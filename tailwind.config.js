/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin')
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    screens: {
      sm: '375px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    extend: {
      backgroundImage: {
        'car-slide': "url('/src/images/gtr-nissan.png')",
        'blob': "url('/src/images/blob.svg')"
      }
    },
  },
  variantes:{
    extends:{
      display: ['group-focus'],
      opacity: ['group-focus'],
      inset: ['group-focus']
    }
  },
  plugins: [
    plugin(function({ addComponents }) {
      addComponents({
        '.btn-yellow': {
          padding: '.5rem 1rem',
          borderRadius: '.25rem',
          fontWeight: '600',
        },
        '.btn-green': {
          backgroundColor: '#3490dc',
          color: '#fff',
          '&:hover': {
            backgroundColor: '#2779bd'
          },
        }
      })
    })
  ],
}