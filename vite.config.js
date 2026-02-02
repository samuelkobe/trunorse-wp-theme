import { defineConfig } from 'vite';
import liveReload from 'vite-plugin-live-reload';
import path from 'path';

export default defineConfig({
  plugins: [
    liveReload([
      './**/*.php',
    ]),
  ],

  base: process.env.NODE_ENV === 'development' ? '/' : '/wp-content/themes/trunorse-theme/dist/',

  build: {
    outDir: 'dist',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'src/main.js'),
      },
      output: {
        entryFileNames: 'js/[name].js',
        chunkFileNames: 'js/[name].js',
        assetFileNames: (assetInfo) => {
          const extType = assetInfo.name.split('.').pop();
          if (/css/i.test(extType)) {
            return 'css/[name][extname]';
          }
          if (/woff|woff2|eot|ttf|otf/i.test(extType)) {
            return 'fonts/[name][extname]';
          }
          if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
            return 'img/[name][extname]';
          }
          return 'assets/[name][extname]';
        },
      },
    },
    minify: 'esbuild',
    sourcemap: process.env.NODE_ENV === 'development',
  },

  server: {
    host: '0.0.0.0',
    port: 5173,
    cors: true,
    hmr: {
      host: 'localhost',
      protocol: 'ws',
    },
  },

  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src'),
      '@css': path.resolve(__dirname, './src/styles'),
      '@js': path.resolve(__dirname, './src/js'),
    },
  },
});
