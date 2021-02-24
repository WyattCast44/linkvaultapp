const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.css',
        './resources/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            screens: {
                standalone: { raw: "(display-mode: standalone)" },
            },
            spacing: {
                "safe-top": "env(safe-area-inset-top)",
                "safe-bottom": "env(safe-area-inset-bottom)",
                "safe-left": "env(safe-area-inset-left)",
                "safe-right": "env(safe-area-inset-right)",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
