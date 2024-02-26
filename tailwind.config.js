/** @type {import("tailwindcss").Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "node_modules/preline/dist/*.js"
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '8rem',
                xl: '16rem',
                '2xl': '24rem',
            },
        },
        extend: {
            colors: {
                primary: "#FC9E9E",
                bg: "#F5F5F5",
                dark_bg: "#0D0D0D",
            },
            plugins: [
                require("flowbite/plugin"),
                require("preline/plugin")
            ]
        }
    }
};

