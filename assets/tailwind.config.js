module.exports = {
	important: true,
	purge: ['../**/*.php', './template-parts/*.php', './includes/*.php'],
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
			maxWidth: {
				'7xl': '90%',
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
