/** @type {import('tailwindcss').Config} */

// const colors = require('tailwindcss/colors')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {

      fontFamily: {
        'm-plus': ['"M PLUS Rounded 1c"', 'sans-serif']
      },

      screens: {
        'sm': '360px',
        // => @media (min-width: 360px) { ... }
  
        'md': '768px',
        // => @media (min-width: 768px) { ... }
  
        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }
  
        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }
  
        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
      },

      extend: {
        colors: {
          'gradient-pink': '#de509f',
          'gradient-purple': '#a569f1',

          'textarea': '#dcdde0',
          'darkgray': '#a5a6a8',
          'lightgray': '#d9d9d9',
          'active': '#00ce9c',

          'chat-1': '#ffcdd2',
          'chat-2': '#C3F0C8',
          'chat-3': '#e3e3e3',
          'chat-4': '#EEB8EC',
          'chat-5': '#B9DCF2',
      }
    },
    
  },
  plugins: [],
}

