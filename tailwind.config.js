/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "black-rgba": "rgba(0, 0, 0, 0.54)",
                "color-title": "#EBF1F7",
                "noice-new-project": "#2D3640",
                "lightred-clr": "rgba(255, 0, 93, 1)",
                "red-clr": "rgba(234, 78, 77, 1)",
                "blue-clr": "#056EDA",
                "skyblue-clr": "rgba(0, 145, 234, 1)",
                "paleblue-clr": "rgba(235, 241, 247, 1)",
                "lightgreen-clr": "rgba(66, 214, 143, 1)",
                "gray-clr": "rgba(187, 197, 208, 1)",
                "text-sub": "rgba(138, 153, 168, 1)",
                "paleblue-clr": "#EBF1F7",
                "text-main": "#2D3640",
                "border-ordered": "#EA4E4D",
                "blue2-clr": "#BCDCFF",
                "green-clr": "#00B162",
                "text-gray": "#8A99A8",
                "blue-dark": "#0044A9",
            },
            letterSpacing: {
                widest: ".25em",
            },
            spacing: {
                "60px": "3.75rem",
            },
            screens: {
                xs: "375px",
            },
        },
        fontFamily: {
            primary: ["Noto Sans JP", "sans-serif"],
        },
    },
    plugins: [require("@tailwindcss/line-clamp"), require("flowbite/plugin")],
};
