/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: 'hsl(var(--ast-global-color-0) / <alpha-value>)',
        secondary: 'hsl(var(--ast-global-color-6) / <alpha-value>)',
        font: 'hsl(var(--ast-global-color-2) / <alpha-value>)',
      },
    },
  },
  plugins: [],
}