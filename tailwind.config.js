import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import plugin from 'tailwindcss';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },

            colors: {
                blackLight: "rgba(17,17,23,0.76)",
            },

            height: {
                long: "35rem",
            },

            backgroundImage: {
                hero: "url(/storage/images/hero.png)",
            },
            
            animation: {
                "slide": "slide 5s ease-in-out infinite"
            },
            keyframes: {
                "slide": {
                    "0%": { transform: "translateX(0) translateY(0)", opcaity: 1 },
                    "100%": {transform: "translateX(1000%) translateY(-1000%)", opacity: .3}
                    // "0%": { transform: "translateX(0) translateY(0)" },
                    // "100%": {transform: "translateX(100%) translateY(-100%)"}
               }
           }
        },
    },
};
