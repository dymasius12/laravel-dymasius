// tailwind.config.js
module.exports = {

    content: [
      './storage/framework/views/*.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    darkMode: 'class',
    theme: {
      extend: {},
    },
    variants: {},
    plugins: [require('tailgrids/plugin')],
  };
