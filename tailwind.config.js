/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/**/*.{php, js}",
        "./static/js/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                'black': {
                    900: '#000000',
                    500: '#1a1a1a',
                    100: '#4d4d4d',
                },
                'white': {
                    100: '#f2f2f2',
                    500: '#f9f9f9',
                    900: '#ffffff',
                },
                'gray': {
                    900: '#333333',
                    500: '#666666',
                    100: '#999999',
                },
                'primary': {
                    900: '#dc3545',
                    500: '#dc3545',
                    100: '#dc3545',
                },
            }
        },
    },
    plugins: [],
}

