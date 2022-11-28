const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'lomito-primary': '#47A0A5',
                'lomito-secondary': '#08566D',
                'lomito-thirdty': '#FFDE59',
                'lomito-fourthy': '#FFC2B4'
            }
        },

    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
