const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors")


/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            primary:{
                default: "#1C6758"
            },
            secondary:{
                default: "#D6CDA4"
            },
            tertiary:{
                default: "#3D8361"
            },
            quartary:{
                default: "#EEF2E6"
            }  

        },
    },

    plugins: [require('@tailwindcss/forms')],
};
