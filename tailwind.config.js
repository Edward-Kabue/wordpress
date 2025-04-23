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
    },
  },
  plugins: [],
  safelist: [
    'bg-primary',
    'bg-primary-dark',
    'bg-primary-light',
    'bg-secondary',
    'bg-secondary-dark',
    'bg-secondary-light',
    'bg-accent',
    'bg-accent-dark',
    'bg-accent-light',
    // Padding utilities
    'p-2',
    'p-3',
    'p-4',
    'p-8',
    'px-2',
    'px-3',
    'px-4',
    'px-8',
    'py-2',
    'py-3',
    'py-4',
    'py-8',
    // Margin utilities
    'm-2',
    'm-3',
    'm-4',
    'm-8',
    'mx-2',
    'mx-3',
    'mx-4',
    'mx-8',
    'my-2',
    'my-3',
    'my-4',
    'my-8',
    // Text utilities
    'text-sm',
    'text-base',
    'text-lg',
    'text-xl',
    'text-2xl',
    'text-3xl',
    'text-4xl',
    'text-5xl',
    'text-6xl',
    // Other common utilities
    'flex',
    'items-center',
    'justify-center',
    'gap-2',
    'gap-4',
    'gap-8',
    'rounded-full',
    'font-bold',
    'font-medium',
    'uppercase',
    'lowercase',
    'capitalize',
    'tracking-wider',
    'leading-tight',
    'opacity-90',
    'transition',
    'duration-300',
    'hover:bg-primary-dark',
    'hover:bg-white',
    'hover:text-black',
    'whitespace-nowrap',
    'overflow-hidden',
  ]
}




