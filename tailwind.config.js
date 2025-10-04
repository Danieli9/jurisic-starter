const defaultTheme = require('tailwindcss/defaultTheme');
const typography = require('@tailwindcss/typography');

module.exports = {
  content: [
    './*.php',
    './*.html',
    './inc/**/*.php',
    './parts/**/*.{html,php}',
    './templates/**/*.{html,php}',
    './patterns/**/*.php',
    './src/js/**/*.{js,ts}'
  ],
  theme: {
    extend: {
      colors: {
        base: '#f4f4f5',
        accent: '#1d4ed8',
        neutral: '#1f2937'
      },
      fontFamily: {
        sans: ['Inter', ...defaultTheme.fontFamily.sans]
      }
    }
  },
  plugins: [typography]
};
