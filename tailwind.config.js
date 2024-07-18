/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            gridTemplateColumns: {
                "hero-grid": "400px auto",
                "product": "auto 400px"
            }
        },
    },
    plugins: [],
}
