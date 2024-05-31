import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'color-main': '#1f2b6c',
                'color-secundary': '#159be7',
                'color-terciario': '#bbcef3',
                'color-cuarto': '#f7f9f9',
                'color-letter': '#202023',
                'color-red': '#FE5F55',
                'color-green': '#35FF69',
                'color-fondo': '#f7f8fd',
                'color-letras1': '#899DC1',
                'color-letras2': '#2B384E',
                'color-letras3': '#B0B0B0',
                'color-letras4': '#333333',
                'color-letras5': '#22BAA0',
            },
            backgroundImage: {
                'image-page-main': "url('./assets/image/logo-page-main.jpg')"
            }
        },
        fontFamily: {
            'sans': ['Inter', 'sans-serif'],
        }
    },

    plugins: [forms, typography],
};
