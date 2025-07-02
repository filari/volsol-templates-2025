/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}

/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    "./*.php",
    "./common/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'primary': {
          '50': '#effaf4',
          '100': '#d8f3e3',
          '200': '#b4e6cb',
          '300': '#83d2ac',
          '400': '#4fb889',
          '500': '#2d9c6d',
          '600': '#1c7652',
          '700': '#186447',
          '800': '#15503a',
          '900': '#124231'
        },
        black: colors.black,
        white: colors.white,
        gray: colors.gray,
        red: colors.red,
        transparent: colors.transparent
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '1rem',
          sm: '2rem'
        },
      },
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
  darkMode: 'class',
}
// npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
// npx tailwindcss -i ./assets/style/global.css -o ./assets/style/dist/output.css --watch
