const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],
    
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'spin-reverse': 'spin 1s linear infinite reverse',
            },
            minHeight:    defaultTheme.height
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/typography'),
    ],
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true
    },
};
