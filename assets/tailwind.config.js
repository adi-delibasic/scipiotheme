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
			height: {
				nav: '6vh',
			},
			maxHeight: {
				none: '0px',
			},
			inset: {
				full: '100%',
			},
		},
	},
	variants: {},
	plugins: [
		require('../assets/node_modules/tailwind-percentage-heights-plugin')(),
	],
};
