/** @type {import('tailwindcss').Config} */
module.exports = {
  purge:['./app/Views/**/*.php', './app/Views/*.php', './app/Views/welcome_message.php'],
  content: ['./app/Views/**/*.php', './app/Views/*.php'],
  theme: {
    extend: {
      colors:{
        'light-primary'  : '#6750A4',
      },
    },

  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
}


