module.exports = {
  content: ["*.php"],
  options: {
    whitelist: [
      "bg-orange-200",
      "bg-blue-200",
      "bg-gray-200",
      "px-2",
      "py-1",
      "m-1",
      "text-xs",
      "font-medium",
      "leading-4",
      "text-blue-800",
      "rounded-full",
    ],
  },
  theme: {
    extend: {
      filter: {
        // defaults to {}
        none: "none",
        grayscale: "grayscale(1)",
        invert: "invert(1)",
        sepia: "sepia(1)",
      },
      backdropFilter: {
        // defaults to {}
        none: "none",
        blur: "blur(20px)",
      },
      fontFamily: {
        body: ["Inter", "sans-serif"],
        display: ["Inter", "sans-serif"],
      },
      colors: {
        blue: {
          100: "#F0F7FC",
          200: "#DAEAF7",
          300: "#C4DDF1",
          400: "#98C4E7",
          500: "#6CABDD",
          600: "#619AC7",
          700: "#416785",
          800: "#314D63",
          900: "#203342",
        },
        orange: {
          50: "#FFF8F2",
          100: "#FFF1E6",
          200: "#FFDCBF",
          300: "#FFC799",
          400: "#FF9E4D",
          500: "#FF7400",
          600: "#E66800",
          700: "#994600",
          800: "#733400",
          900: "#4D2300",
        },
      },
      backgroundImage: (theme) => ({
        "rru-logo":
          "url('/wp-content/themes/buddyboss-theme-child/assets/images/rru-logo-blue.svg')",
          "rru-dark-gradient":
          "url('/wp-content/themes/buddyboss-theme-child/assets/images/dark-bg-gradient-1000w.png')",
      }),
    },
  },
  plugins: [
    require("tailwindcss"),
    require("autoprefixer"),
    require("tailwindcss-filters"),
    require("@tailwindcss/aspect-ratio"),
    require('@tailwindcss/typography'),
  ],
};
