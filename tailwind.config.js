/** @type {import('tailwindcss').Config} */
export default {
  content: ['./resources/**/*.blade.php', './resources/**/*.js'],
  theme: {
    extend: {
      colors: {
        laravel: '#ef3b2d',
      },
    },
  },
  plugins: [],
};
