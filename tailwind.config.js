/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    screens: {
      sm: '414px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    extend: {},
  },
  variantes:{
    extends:{
      display: ['group-focus'],
      opacity: ['group-focus'],
      inset: ['group-focus']
    }
  },
  plugins: [],
}