/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'primary': '#222831',
        'secondary': '#393E46',
        'ascent': '#00ADB5',
        'smoke': '#EEEEEE',
        'ascentBlack': '#008B92',
      },
    },
  },
  plugins: [],
}

