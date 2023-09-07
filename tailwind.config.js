/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.php','./users/system_Admin/includes/*.php','./users/student/includes/*.php','./users/hostel_Admin/includes/*.php'],
  darkMode: 'class',
  theme: {
    screens:{
      'sm' : '481px', //tablets
      'md' : '769px', //small screens and laptops
      'lg' : '1025px', //desktop and large screens
      'xl' : '1201px', //large screens
    },
    extend: {
      backgroundImage: {
        'heroImg': "url('/img/riverblind.jpg')",
        "smallHero": "url('/img/blind-2.jpg')"
      }
    },
  },
  plugins: [],
}
