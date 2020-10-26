module.exports = {
	important: true,
	future: {
		purgeLayersByDefault: true,
		removeDeprecatedGapUtilities: true,
	},
	purge: ['../**/*.php'],
	theme: {
		extend: {
			fontFamily: {
				primary: ['Open Sans', 'sans-serif'],
			},
			maxHeight: {
				none: '0px',
			},
		},
	},
	variants: {},
	plugins: [
		require('../assets/node_modules/tailwind-percentage-heights-plugin')(),
	],
};
