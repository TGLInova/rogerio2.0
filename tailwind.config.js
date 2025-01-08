import defaultTheme from 'tailwindcss/defaultTheme';


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './config/bless-ui.php'
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    300: '#355EC0',
                    400: '#1251E8',
                    500: '#050E2D',
                    600: '#03091B'
                }
            },
            fontFamily: {
                sans: ['Schibsted Grotesk', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require('tailwindcss-animated'),
    ],
};
