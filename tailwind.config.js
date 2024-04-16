const plugin = require('tailwindcss/plugin');
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],

  theme: {
    extend: {},
  },
  daisyui: {
    themes: [
      {
        mytheme: {
          "primary": "#4baa0b",
          "secondary": "#10b981",
          "accent": "#f97316",
          "neutral": "#010101",
          "base-100": "#f8f6f9",
          "info": "#0284c7",
          "success": "#4baa0b",
          "warning": "#f59e0b",
          "error": "#c2410c",
        },

      },
    ]
  },
  plugins: [require("daisyui"), '@tailwindcss/typography'],
}

