import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'image-overlay' : 'linear-gradient(180deg, rgba(0, 0, 0, 0.72) 32.39%, rgba(0, 0, 0, 0.72) 32.39%, rgba(0, 0, 0, 0.72) 32.39%',
                'overlay' : 'linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.72) 32.39%, rgba(0, 0, 0, 0.88) 100%)'
            },
        },
    },

    plugins: [forms],
};
