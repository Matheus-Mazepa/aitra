const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  purge: ['./public/**/*.html', './src/**/*.vue'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontSize: {
      'xs': '.75rem',
      'sm': '.875rem',
      'tiny': '.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '3rem',
      '6xl': '4rem',
      '7xl': '5rem',
    },

    fontFamily: {
      'sans': ['Roboto', 'Helvetica', 'Arial', 'sans-serif'],
      serif: ["Poppins"],
      mono: ["Poppins"],
      display: ["Poppins"],
      body: ["Poppins"],
    },
    extend: {
      width: {
        "100": "800px"
      },
      colors: {
        red: {
          ...defaultTheme.colors.red,
        },
        gray: {
          ...defaultTheme.colors.gray,
        },
        green: {
          ...defaultTheme.colors.green
        },
      },
      screens: {
        xsm: "320px",
        lsm: "425px"
      },
      opacity: {
        "10": "0.1"
      }
    }
  },

  variants: {
    opacity: ["responsive", "hover", "focus", "disabled"]
  },
  plugins: [],
}
