/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        
      },
      transformOrigin: {
        'left': 'left',
      },
      rotate: {
        '-180': '-180deg',
      },
      perspective: {
        '2000': '2000px',
      },
      backfaceHidden: {
        'backface-hidden': 'backface-visibility: hidden;',
      },
    },
  },
  plugins: [
  ],
  darkMode: "class",
}

