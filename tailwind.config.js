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

          'gradient-light-purple': '#9b39ff',
          'gradient-light-blue'  : '#64aefe',

          'product-item-background': '#f0f0f0',

          'textarea': '#dcdde0',
          'darkgray': '#a5a6a8',
          'c' : '5f5f5f',
          'lightgray': '#d9d9d9',
          'active': '#00ce9c',

          'chat-1': '#ffcdd2',
          'chat-2': '#C3F0C8',
          'chat-3': '#e3e3e3',
          'chat-4': '#EEB8EC',
          'chat-5': '#B9DCF2',

          'promotion-background': '#9a6aff',
      },

      container: {
        center: true,

        screens : {
          sm: '600px',
          md: '728px',
          lg: '1280px',
          xl: '1280px',
          '2xl' : '1280px',
        },
      },

      boxShadow: {
        'button-shadow': '0px 4px 4px 0px rgba(0, 0, 0, 0.25)',
      },

      dropShadow: {
        'drop-text-shadow': '0px 4px 2px rgba(0,0,0,0.4)',
      },
    },
    
  },
  plugins: [
    require('tailwind-scrollbar-hide'),
  ],
}

