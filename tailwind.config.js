/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      colors: {
        primary: {
          DEFAULT: '#0078bf',
          light: '#0095ea',
          dark: '#005f96',
        },
        secondary: {
          DEFAULT: '#f8b301',
          light: '#ffc835',
          dark: '#d99a00',
        },
        accent: {
          DEFAULT: '#d40000',
          light: '#ff1a1a',
          dark: '#aa0000',
        },
      },
    },
  },
  plugins: [],
} 