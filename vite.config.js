import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'
import laravel from 'laravel-vite-plugin'
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin'

export default defineConfig({
  plugins: [
    tailwindcss(),
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/css/editor.css',
        'resources/js/editor.js',
      ],
      refresh: true,
    }),
    wordpressPlugin(),
    wordpressThemeJson({
      disableTailwindColors: false,
      disableTailwindFonts: false,
      disableTailwindFontSizes: false,
    }),
  ],
  build: {
    manifest: 'manifest.json', // Specify manifest filename
    outDir: 'public/build',
    rollupOptions: {
      output: {
        manualChunks: {
          editor: ['resources/js/editor.js'],
        },
      },
      external: [
        'jquery',
        'bootstrap',
        'validator',
        'slicknav',
        'swiper',
        'waypoints',
        'counterup',
        'isotope',
        'magnific-popup',
        'smoothscroll',
        'parallaxie',
        'gsap',
        'splittext',
        'scrolltrigger',
        'ytplayer',
        'wow',
      ],
    },
  },
  resolve: {
    alias: {
      '@scripts': '/resources/js',
      '@styles': '/resources/css',
      '@fonts': '/resources/fonts',
      '@images': '/resources/images',
    },
  },
})


