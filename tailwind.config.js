module.exports = {
  darkMode: ['class'],
  content: [
    './storage/frameworks/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [require("./plugin")],
}
