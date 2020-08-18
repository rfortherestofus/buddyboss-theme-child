module.exports = {
  purge: [
    "*.php"
  ],
  theme: {
    extend: {
      filter: { // defaults to {}
      'none': 'none',
      'grayscale': 'grayscale(1)',
      'invert': 'invert(1)',
      'sepia': 'sepia(1)',
    },
    backdropFilter: { // defaults to {}
      'none': 'none',
      'blur': 'blur(20px)',
    },
      fontFamily: {
        'body': ['Inter', 'sans-serif'],
        'display': ['Inter', 'sans-serif']
      },
      colors: {
        blue: {
          100: '#F0F7FC',
          200: '#DAEAF7',
          300: '#C4DDF1',
          400: '#98C4E7',
          500: '#6CABDD',
          600: '#619AC7',
          700: '#416785',
          800: '#314D63',
          900: '#203342',
        }
      }
    }
  },
  variants: {},
  plugins: [
    require('tailwindcss-filters'),
    // require('@tailwindcss/typography'),
  ],
}
