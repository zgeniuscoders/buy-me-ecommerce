/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "selector",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.ts",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            ringColor: {
                "primary-dark" : '#306a42',
                "primary ":"#306a42",
                "onPrimary" :"#ffffff",
                "secondary" :"#506352",
                "onSecondary" :"#ffffff",
                "tertiary" :"#3a656e",
                "onTertiary" :"#ffffff",
                "error" :"#ba1a1a",
                "onError" :"#ffffff",
                "primaryContainer" :"#b3f1bf",
                "onPrimaryContainer" :"#00210d",
                "secondaryContainer" :"#d2e8d3",
                "onSecondaryContainer" :"#0e1f12",
                "tertiaryContainer" :"#bdeaf5",
                "onTertiaryContainer" :"#001f25",
                "errorContainer" :"#ffdad6",
                "onErrorContainer" : "#410002",
            },
            gridTemplateColumns: {
                "hero-grid": "400px auto",
                "product": "auto 400px",
                "product-details": "100px auto 400px",
            },
            textColor: {
                "primary-dark" : '#306a42',
                "primary":'#306a42',
                "onPrimary" :"#ffffff",
                "secondary" :"#506352",
                "onSecondary" :"#ffffff",
                "tertiary" :"#3a656e",
                "onTertiary" :"#ffffff",
                "error" :"#ba1a1a",
                "onError" :"#ffffff",
                "primaryContainer" :"#b3f1bf",
                "onPrimaryContainer" :"#00210d",
                "secondaryContainer" :"#d2e8d3",
                "onSecondaryContainer" :"#0e1f12",
                "tertiaryContainer" :"#bdeaf5",
                "onTertiaryContainer" :"#001f25",
                "errorContainer" :"#ffdad6",
                "onErrorContainer" : "#410002",
            },
            backgroundColor:{
                "outline-dark":'#8b938a',
                "secondary-container-dark" :'#384b3c',
                "secondary-dark" :'#506352',
                "background-dark" :'#1a1c19',
                "background" :'#fcfdf7',
                "primary-dark" : '#306a42',
                "primary":'#306a42',
                "onPrimary" :"#ffffff",
                "secondary" :"#506352",
                "onSecondary" :"#ffffff",
                "tertiary" :"#3a656e",
                "onTertiary" :"#ffffff",
                "error" :"#ba1a1a",
                "onError" :"#ffffff",
                "primaryContainer" :"#b3f1bf",
                "onPrimaryContainer" :"#00210d",
                "secondaryContainer" :"#d2e8d3",
                "onSecondaryContainer" :"#0e1f12",
                "tertiaryContainer" :"#bdeaf5",
                "onTertiaryContainer" :"#001f25",
                "errorContainer" :"#ffdad6",
                "onErrorContainer" : "#410002",
            },
            borderColor:{
                "outline-dark":'#8b938a',
                "primary-dark" : '#306a42',
                "primary":'#306a42',
                "onPrimary" :"#ffffff",
                "secondary" :"#506352",
                "onSecondary" :"#ffffff",
                "tertiary" :"#3a656e",
                "onTertiary" :"#ffffff",
                "error" :"#ba1a1a",
                "onError" :"#ffffff",
                "primaryContainer" :"#b3f1bf",
                "onPrimaryContainer" :"#00210d",
                "secondaryContainer" :"#d2e8d3",
                "onSecondaryContainer" :"#0e1f12",
                "tertiaryContainer" :"#bdeaf5",
                "onTertiaryContainer" :"#001f25",
                "errorContainer" :"#ffdad6",
                "onErrorContainer" : "#410002",
            },
        },
    },
    plugins: [],
}
