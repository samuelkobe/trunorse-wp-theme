<?php
/**
 * Schema.org JSON-LD Implementation
 *
 * Adds structured data for SEO via Customizer settings.
 * Outputs HomeAndConstructionBusiness schema on homepage and Service schema on service pages.
 *
 * @package Trunorse_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Schema Customizer Settings
 */
function trunorse_schema_customizer_settings( $wp_customize ) {

	// Add Schema Section
	$wp_customize->add_section( 'trunorse_schema_section', array(
		'title'       => __( 'Schema / SEO', 'trunorse' ),
		'description' => __( 'Configure structured data (JSON-LD) for improved search engine visibility.', 'trunorse' ),
		'priority'    => 35,
	) );

	// Enable Homepage Schema
	$wp_customize->add_setting( 'trunorse_schema_enable_homepage', array(
		'default'           => true,
		'sanitize_callback' => 'trunorse_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'trunorse_schema_enable_homepage', array(
		'label'       => __( 'Enable Homepage Schema', 'trunorse' ),
		'description' => __( 'Output HomeAndConstructionBusiness schema on the homepage.', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'checkbox',
	) );

	// Enable Service Page Schema
	$wp_customize->add_setting( 'trunorse_schema_enable_services', array(
		'default'           => true,
		'sanitize_callback' => 'trunorse_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'trunorse_schema_enable_services', array(
		'label'       => __( 'Enable Services Page Schema', 'trunorse' ),
		'description' => __( 'Output Service schema on the services page.', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'checkbox',
	) );

	// Enable Projects Archive Schema
	$wp_customize->add_setting( 'trunorse_schema_enable_projects', array(
		'default'           => true,
		'sanitize_callback' => 'trunorse_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'trunorse_schema_enable_projects', array(
		'label'       => __( 'Enable Projects Archive Schema', 'trunorse' ),
		'description' => __( 'Output CollectionPage/ItemList schema on the projects archive page.', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'checkbox',
	) );

	// Enable About Page Schema
	$wp_customize->add_setting( 'trunorse_schema_enable_about', array(
		'default'           => true,
		'sanitize_callback' => 'trunorse_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'trunorse_schema_enable_about', array(
		'label'       => __( 'Enable About Page Schema', 'trunorse' ),
		'description' => __( 'Output AboutPage schema on the about page.', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'checkbox',
	) );

	// Enable Contact Page Schema
	$wp_customize->add_setting( 'trunorse_schema_enable_contact', array(
		'default'           => true,
		'sanitize_callback' => 'trunorse_sanitize_checkbox',
	) );
	$wp_customize->add_control( 'trunorse_schema_enable_contact', array(
		'label'       => __( 'Enable Contact Page Schema', 'trunorse' ),
		'description' => __( 'Output ContactPage schema on the contact page.', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'checkbox',
	) );

	// Business Name
	$wp_customize->add_setting( 'trunorse_schema_business_name', array(
		'default'           => 'Trunorse Construction',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_business_name', array(
		'label'   => __( 'Business Name', 'trunorse' ),
		'section' => 'trunorse_schema_section',
		'type'    => 'text',
	) );

	// Business URL
	$wp_customize->add_setting( 'trunorse_schema_business_url', array(
		'default'           => home_url(),
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'trunorse_schema_business_url', array(
		'label'   => __( 'Business URL', 'trunorse' ),
		'section' => 'trunorse_schema_section',
		'type'    => 'url',
	) );

	// Logo URL
	$wp_customize->add_setting( 'trunorse_schema_logo', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'trunorse_schema_logo', array(
		'label'       => __( 'Business Logo', 'trunorse' ),
		'description' => __( 'Used in schema markup. Google recommends at least 112x112px, ideally 1200px wide.', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
	) ) );

	// Business Image (optional)
	$wp_customize->add_setting( 'trunorse_schema_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'trunorse_schema_image', array(
		'label'       => __( 'Business Image (Optional)', 'trunorse' ),
		'description' => __( 'Photo of the business or completed work for schema.', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
	) ) );

	// Phone Number
	$wp_customize->add_setting( 'trunorse_schema_phone', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_phone', array(
		'label'       => __( 'Phone Number', 'trunorse' ),
		'description' => __( 'Format: +1-778-847-2361', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'text',
	) );

	// Email
	$wp_customize->add_setting( 'trunorse_schema_email', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_email',
	) );
	$wp_customize->add_control( 'trunorse_schema_email', array(
		'label'   => __( 'Email Address', 'trunorse' ),
		'section' => 'trunorse_schema_section',
		'type'    => 'email',
	) );

	// Street Address
	$wp_customize->add_setting( 'trunorse_schema_street', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_street', array(
		'label'   => __( 'Street Address', 'trunorse' ),
		'section' => 'trunorse_schema_section',
		'type'    => 'text',
	) );

	// City
	$wp_customize->add_setting( 'trunorse_schema_city', array(
		'default'           => 'Chilliwack',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_city', array(
		'label'   => __( 'City', 'trunorse' ),
		'section' => 'trunorse_schema_section',
		'type'    => 'text',
	) );

	// Province/Region
	$wp_customize->add_setting( 'trunorse_schema_region', array(
		'default'           => 'BC',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_region', array(
		'label'   => __( 'Province/Region', 'trunorse' ),
		'section' => 'trunorse_schema_section',
		'type'    => 'text',
	) );

	// Postal Code
	$wp_customize->add_setting( 'trunorse_schema_postal', array(
		'default'           => 'V2P 5A3',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_postal', array(
		'label'   => __( 'Postal Code', 'trunorse' ),
		'section' => 'trunorse_schema_section',
		'type'    => 'text',
	) );

	// Country
	$wp_customize->add_setting( 'trunorse_schema_country', array(
		'default'           => 'CA',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_country', array(
		'label'   => __( 'Country Code', 'trunorse' ),
		'section' => 'trunorse_schema_section',
		'type'    => 'text',
	) );

	// Opening Hours
	$wp_customize->add_setting( 'trunorse_schema_hours', array(
		'default'           => 'Mo-Fr 08:00-17:00',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_hours', array(
		'label'       => __( 'Opening Hours', 'trunorse' ),
		'description' => __( 'Format: Mo-Fr 08:00-17:00', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'text',
	) );

	// Price Range
	$wp_customize->add_setting( 'trunorse_schema_price_range', array(
		'default'           => '$$',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_price_range', array(
		'label'       => __( 'Price Range', 'trunorse' ),
		'description' => __( 'Use $ to $$$$ scale.', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'text',
	) );

	// Business Description
	$wp_customize->add_setting( 'trunorse_schema_description', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_description', array(
		'label'       => __( 'Business Description', 'trunorse' ),
		'description' => __( 'Brief description of the business for schema (1-2 sentences).', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'textarea',
	) );

	// Area Served
	$wp_customize->add_setting( 'trunorse_schema_area_served', array(
		'default'           => 'Chilliwack, British Columbia',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_area_served', array(
		'label'       => __( 'Area Served', 'trunorse' ),
		'description' => __( 'Primary service area (city, region).', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'text',
	) );

	// Services List (comma-separated)
	$wp_customize->add_setting( 'trunorse_schema_services', array(
		'default'           => 'Custom Renovations, Restorations, New Construction, Commercial',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'trunorse_schema_services', array(
		'label'       => __( 'Services Offered', 'trunorse' ),
		'description' => __( 'Comma-separated list of services.', 'trunorse' ),
		'section'     => 'trunorse_schema_section',
		'type'        => 'textarea',
	) );
}
add_action( 'customize_register', 'trunorse_schema_customizer_settings' );

/**
 * Sanitize checkbox values
 */
function trunorse_sanitize_checkbox( $checked ) {
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

/**
 * Get business provider schema array (reusable)
 */
function trunorse_get_provider_schema() {
	$provider = array(
		'@type' => 'HomeAndConstructionBusiness',
		'name'  => get_theme_mod( 'trunorse_schema_business_name', 'Trunorse Construction' ),
		'url'   => get_theme_mod( 'trunorse_schema_business_url', home_url() ),
	);

	// Add address if any address fields are set
	$street  = get_theme_mod( 'trunorse_schema_street' );
	$city    = get_theme_mod( 'trunorse_schema_city', 'Chilliwack' );
	$region  = get_theme_mod( 'trunorse_schema_region', 'BC' );
	$postal  = get_theme_mod( 'trunorse_schema_postal', 'V2P 5A3' );
	$country = get_theme_mod( 'trunorse_schema_country', 'CA' );

	if ( $street || $city ) {
		$provider['address'] = array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => $street,
			'addressLocality' => $city,
			'addressRegion'   => $region,
			'postalCode'      => $postal,
			'addressCountry'  => $country,
		);
	}

	// Add phone if set
	$phone = get_theme_mod( 'trunorse_schema_phone' );
	if ( $phone ) {
		$provider['telephone'] = $phone;
	}

	// Add email if set
	$email = get_theme_mod( 'trunorse_schema_email' );
	if ( $email ) {
		$provider['email'] = $email;
	}

	// Add logo if set
	$logo = get_theme_mod( 'trunorse_schema_logo' );
	if ( $logo ) {
		$provider['logo'] = $logo;
	}

	// Add image if set
	$image = get_theme_mod( 'trunorse_schema_image' );
	if ( $image ) {
		$provider['image'] = $image;
	}

	// Add price range if set
	$price_range = get_theme_mod( 'trunorse_schema_price_range', '$$' );
	if ( $price_range ) {
		$provider['priceRange'] = $price_range;
	}

	return $provider;
}

/**
 * Output Homepage HomeAndConstructionBusiness Schema
 */
function trunorse_output_homepage_schema() {
	if ( ! is_front_page() ) {
		return;
	}

	if ( ! get_theme_mod( 'trunorse_schema_enable_homepage', true ) ) {
		return;
	}

	$schema = array(
		'@context' => 'https://schema.org',
		'@type'    => 'HomeAndConstructionBusiness',
		'name'     => get_theme_mod( 'trunorse_schema_business_name', 'Trunorse Construction' ),
		'url'      => get_theme_mod( 'trunorse_schema_business_url', home_url() ),
	);

	// Add logo if set
	$logo = get_theme_mod( 'trunorse_schema_logo' );
	if ( $logo ) {
		$schema['logo'] = $logo;
	}

	// Add image if set
	$image = get_theme_mod( 'trunorse_schema_image' );
	if ( $image ) {
		$schema['image'] = $image;
	}

	// Add phone if set
	$phone = get_theme_mod( 'trunorse_schema_phone' );
	if ( $phone ) {
		$schema['telephone'] = $phone;
	}

	// Add email if set
	$email = get_theme_mod( 'trunorse_schema_email' );
	if ( $email ) {
		$schema['email'] = $email;
	}

	// Add description if set
	$description = get_theme_mod( 'trunorse_schema_description' );
	if ( $description ) {
		$schema['description'] = $description;
	}

	// Add price range
	$price_range = get_theme_mod( 'trunorse_schema_price_range', '$$' );
	if ( $price_range ) {
		$schema['priceRange'] = $price_range;
	}

	// Add address if any address fields are set
	$street  = get_theme_mod( 'trunorse_schema_street' );
	$city    = get_theme_mod( 'trunorse_schema_city', 'Chilliwack' );
	$region  = get_theme_mod( 'trunorse_schema_region', 'BC' );
	$postal  = get_theme_mod( 'trunorse_schema_postal', 'V2P 5A3' );
	$country = get_theme_mod( 'trunorse_schema_country', 'CA' );

	if ( $street || $city ) {
		$schema['address'] = array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => $street,
			'addressLocality' => $city,
			'addressRegion'   => $region,
			'postalCode'      => $postal,
			'addressCountry'  => $country,
		);
	}

	// Add opening hours
	$hours = get_theme_mod( 'trunorse_schema_hours', 'Mo-Fr 08:00-17:00' );
	if ( $hours ) {
		$schema['openingHours'] = $hours;
	}

	// Add area served
	$area_served = get_theme_mod( 'trunorse_schema_area_served', 'Chilliwack, British Columbia' );
	if ( $area_served ) {
		$schema['areaServed'] = $area_served;
	}

	// Add services as offer catalog
	$services_string = get_theme_mod( 'trunorse_schema_services', 'Custom Renovations, Restorations, New Construction, Commercial' );
	if ( $services_string ) {
		$services = array_map( 'trim', explode( ',', $services_string ) );

		if ( ! empty( $services ) ) {
			$schema['hasOfferCatalog'] = array(
				'@type'           => 'OfferCatalog',
				'name'            => 'Construction Services',
				'itemListElement' => array(),
			);

			foreach ( $services as $service ) {
				$schema['hasOfferCatalog']['itemListElement'][] = array(
					'@type'       => 'Offer',
					'itemOffered' => array(
						'@type' => 'Service',
						'name'  => $service,
					),
				);
			}
		}
	}

	trunorse_output_json_ld( $schema );
}
add_action( 'wp_head', 'trunorse_output_homepage_schema', 5 );

/**
 * Output Services Page Schema
 */
function trunorse_output_services_schema() {
	if ( ! is_page( 'services' ) ) {
		return;
	}

	if ( ! get_theme_mod( 'trunorse_schema_enable_services', true ) ) {
		return;
	}

	$services_string = get_theme_mod( 'trunorse_schema_services', 'Custom Renovations, Restorations, New Construction, Commercial' );
	$services        = array_map( 'trim', explode( ',', $services_string ) );

	$schema = array(
		'@context' => 'https://schema.org',
		'@type'    => 'Service',
		'name'     => 'Construction & Renovation Services',
		'url'      => get_permalink(),
		'provider' => trunorse_get_provider_schema(),
	);

	// Add description
	$description = get_theme_mod( 'trunorse_schema_description' );
	if ( $description ) {
		$schema['description'] = $description;
	}

	// Add area served
	$area_served = get_theme_mod( 'trunorse_schema_area_served', 'Chilliwack, British Columbia' );
	if ( $area_served ) {
		$schema['areaServed'] = $area_served;
	}

	// Add services as offer catalog
	if ( ! empty( $services ) ) {
		$schema['hasOfferCatalog'] = array(
			'@type'           => 'OfferCatalog',
			'name'            => 'Construction Services',
			'itemListElement' => array(),
		);

		foreach ( $services as $service ) {
			$schema['hasOfferCatalog']['itemListElement'][] = array(
				'@type'       => 'Offer',
				'itemOffered' => array(
					'@type' => 'Service',
					'name'  => $service,
				),
			);
		}
	}

	trunorse_output_json_ld( $schema );
}
add_action( 'wp_head', 'trunorse_output_services_schema', 5 );

/**
 * Output Projects Archive Schema (CollectionPage with ItemList)
 */
function trunorse_output_projects_schema() {
	if ( ! is_post_type_archive( 'project' ) ) {
		return;
	}

	if ( ! get_theme_mod( 'trunorse_schema_enable_projects', true ) ) {
		return;
	}

	$business_name = get_theme_mod( 'trunorse_schema_business_name', 'Trunorse Construction' );

	// Build the main CollectionPage schema
	$schema = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'CollectionPage',
		'name'        => 'Projects - ' . $business_name,
		'description' => 'Browse our portfolio of completed construction and renovation projects in ' . get_theme_mod( 'trunorse_schema_area_served', 'Chilliwack, British Columbia' ) . '.',
		'url'         => get_post_type_archive_link( 'project' ),
		'isPartOf'    => array(
			'@type' => 'WebSite',
			'name'  => $business_name,
			'url'   => home_url(),
		),
	);

	// Query all published projects
	$projects = get_posts( array(
		'post_type'      => 'project',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
	) );

	if ( ! empty( $projects ) ) {
		$item_list = array(
			'@type'           => 'ItemList',
			'itemListElement' => array(),
		);

		$position = 1;
		foreach ( $projects as $project ) {
			$item = array(
				'@type'    => 'ListItem',
				'position' => $position,
				'item'     => array(
					'@type' => 'CreativeWork',
					'name'  => get_the_title( $project ),
					'url'   => get_permalink( $project ),
				),
			);

			// Add featured image if available
			if ( has_post_thumbnail( $project ) ) {
				$item['item']['image'] = get_the_post_thumbnail_url( $project, 'large' );
			}

			// Add excerpt/description if available
			$excerpt = get_the_excerpt( $project );
			if ( $excerpt ) {
				$item['item']['description'] = wp_strip_all_tags( $excerpt );
			}

			$item_list['itemListElement'][] = $item;
			$position++;
		}

		$schema['mainEntity'] = $item_list;
	}

	trunorse_output_json_ld( $schema );
}
add_action( 'wp_head', 'trunorse_output_projects_schema', 5 );

/**
 * Output About Page Schema (AboutPage)
 */
function trunorse_output_about_schema() {
	if ( ! is_page( 'about' ) ) {
		return;
	}

	if ( ! get_theme_mod( 'trunorse_schema_enable_about', true ) ) {
		return;
	}

	$business_name = get_theme_mod( 'trunorse_schema_business_name', 'Trunorse Construction' );
	$description   = get_theme_mod( 'trunorse_schema_description' );

	$schema = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'AboutPage',
		'name'        => 'About ' . $business_name,
		'url'         => get_permalink(),
		'isPartOf'    => array(
			'@type' => 'WebSite',
			'name'  => $business_name,
			'url'   => home_url(),
		),
		'about'       => trunorse_get_provider_schema(),
	);

	// Add description if available
	if ( $description ) {
		$schema['description'] = 'Learn more about ' . $business_name . '. ' . $description;
	}

	// Add main entity (the business)
	$schema['mainEntity'] = trunorse_get_provider_schema();

	trunorse_output_json_ld( $schema );
}
add_action( 'wp_head', 'trunorse_output_about_schema', 5 );

/**
 * Output Contact Page Schema (ContactPage)
 */
function trunorse_output_contact_schema() {
	if ( ! is_page( 'contact' ) ) {
		return;
	}

	if ( ! get_theme_mod( 'trunorse_schema_enable_contact', true ) ) {
		return;
	}

	$business_name = get_theme_mod( 'trunorse_schema_business_name', 'Trunorse Construction' );
	$phone         = get_theme_mod( 'trunorse_schema_phone' );
	$email         = get_theme_mod( 'trunorse_schema_email' );
	$area_served   = get_theme_mod( 'trunorse_schema_area_served', 'Chilliwack, British Columbia' );

	$schema = array(
		'@context'    => 'https://schema.org',
		'@type'       => 'ContactPage',
		'name'        => 'Contact ' . $business_name,
		'description' => 'Get in touch with ' . $business_name . ' for construction and renovation services in ' . $area_served . '.',
		'url'         => get_permalink(),
		'isPartOf'    => array(
			'@type' => 'WebSite',
			'name'  => $business_name,
			'url'   => home_url(),
		),
	);

	// Add the business as main entity with full contact details
	$main_entity = trunorse_get_provider_schema();

	// Add opening hours to contact page schema
	$hours = get_theme_mod( 'trunorse_schema_hours', 'Mo-Fr 08:00-17:00' );
	if ( $hours ) {
		$main_entity['openingHours'] = $hours;
	}

	// Add area served
	if ( $area_served ) {
		$main_entity['areaServed'] = $area_served;
	}

	$schema['mainEntity'] = $main_entity;

	trunorse_output_json_ld( $schema );
}
add_action( 'wp_head', 'trunorse_output_contact_schema', 5 );

/**
 * Output JSON-LD script tag
 *
 * @param array $schema The schema array to output
 */
function trunorse_output_json_ld( $schema ) {
	if ( empty( $schema ) ) {
		return;
	}

	$json = wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );

	if ( $json ) {
		echo "\n" . '<script type="application/ld+json">' . "\n";
		echo $json;
		echo "\n" . '</script>' . "\n";
	}
}
