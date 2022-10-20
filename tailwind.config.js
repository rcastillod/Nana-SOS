/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: 'var(--ast-global-color-0)',
        secondary: 'var(--ast-global-color-6)',
        font: 'var(--ast-global-color-2)',
        text: 'var(--ast-global-color-8)',
        'body-bg': 'var(--ast-global-color-4)',
      },
    },
  },
  plugins: [],
}
