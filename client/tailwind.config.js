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
    },
    borderColor: (theme) => ({
      ...theme("colors"),
      "error": theme("colors.danger"),
      DEFAULT: theme("colors.gray.200", "currentColor"),
    }),
    borderOpacity: (theme) => theme("opacity"),
    borderRadius: {
      none: "0px",
      sm: "0.125rem",
      DEFAULT: "0.25rem",
      md: "0.375rem",
      lg: "0.5rem",
      xl: "0.75rem",
      "2xl": "1rem",
      "3xl": "1.5rem",
      full: "9999px",
    },
    borderWidth: {
      DEFAULT: "1px",
      0: "0px",
      2: "2px",
      4: "4px",
      8: "8px",
    },
  },

  variants: {
    opacity: ["responsive", "hover", "focus", "disabled"]
  },
  plugins: [],
}
