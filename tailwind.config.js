/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/**/*.php"],
  theme: {
    extend: {
      colors: {
        redText: "#DF6951",
        purpleText: "#181E4B",
        lightPurpleText: "#5E6282",
        yellowColor: "#F1A501",
        textWhite: "#fff",
        buttonColor: "#DF6951",
      },
    },
  },
  plugins: [],
};
