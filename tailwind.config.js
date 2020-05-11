module.exports = {
  purge: [
    './source/**/*.html',
    './source/**/*.md',
    './source/**/*.php',
    './source/**/*.js',
  ],
  theme: {
    extend: {
        maxHeight: {
          '300': '300px',
          '500': '500px',
          '600': '600px',
          '700': '700px',
        },
        minHeight: {
          '300': '300px',
          '400': '400px',
          '500': '500px',
          '700': '700px',
        },
        screens: {
          xxl: '1600px',
        },
        spacing:{
          '72': '18rem',
          '80': '20rem',
        },
        boxShadow: {
          xs: '0 0 0 1px rgba(0, 0, 0, 0.05)',
          sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
          default: '0 1px 3px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
          md: '0 4px 6px -1px rgba(0, 0, 0, 0.2), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
          lg: '0 10px 15px -3px rgba(0, 0, 0, 0.2), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
          xl: '0 20px 25px -5px rgba(0, 0, 0, 0.2), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
          '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
          inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
          outline: '0 0 0 3px rgba(66, 153, 225, 0.5)',
          none: 'none',
        },
        height: {
          30: '30vh',
          60: '60vh',
          70: '70vh',
        }
    },
  },
  variants: {
    width: ['responsive', 'focus'],
  },
  plugins: [],
  corePlugins: {
    fontFamily: false,
  }
}
