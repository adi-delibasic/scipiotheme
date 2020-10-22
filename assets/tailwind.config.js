module.exports = {
  important:true,
  future:{
    purgeLayersByDefault: true,
		removeDeprecatedGapUtilities: true,
  },
  purge:['../**/*.php'],
  theme:{
    extend:{

    },
  },
  variants:{},
  	plugins: [
		require('../assets/node_modules/tailwind-percentage-heights-plugin')(),
	],
}