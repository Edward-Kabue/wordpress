/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './app/**/*.php',
    './resources/**/*.{php,vue,js}',
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#4F46E5', // You can adjust this color
          dark: '#4338CA',    // Darker shade for hover states
          light: '#818CF8',   // Lighter shade
        },
        secondary: {
          DEFAULT: '#1F2937',
          dark: '#111827',
          light: '#374151',
        },
        accent: {
          DEFAULT: '#10B981',
          dark: '#059669',
          light: '#34D399',
        },
      },
      backgroundColor: theme => ({
        ...theme('colors'),
      }),
    },
  },
  plugins: [],
}
