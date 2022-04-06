module.exports = {
  content: [
    '*.php',
    '**/*.php',
    '**/**/*.php',
    '*.twig',
    '**/*.twig',
    '**/**/*.twig',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#FFB8CC',
          100: '#FFA3BD',
          200: '#FF7AA0',
          300: '#FF5283',
          400: '#FF2965',
          500: '#FF0048',
          600: '#C70038',
          700: '#8F0028',
          800: '#570018',
          900: '#1F0009',
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
  ],
}
