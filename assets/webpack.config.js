const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const cssnano = require('cssnano');
const TerserWebpackPlugin = require('terser-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const autoprefixer = require('autoprefixer');

//File paths
const JS_DIR = path.resolve(__dirname, 'src/js');
const IMG_DIR = path.resolve(__dirname, 'src/img');
const SCSS_DIR = path.resolve(__dirname, 'src/scss');
const DIST_DIR = path.resolve(__dirname, 'dist');

// Input
const entry = {
	main: JS_DIR + '/index.js',
};

// Output
const output = {
	path: DIST_DIR,
	filename: 'js/[name].js',
};

// Rules
const rules = [
	// JS
	{
		test: /\.js$/,
		include: [JS_DIR],
		exclude: /node_modules/,
		use: 'babel-loader',
	},

	// SCSS
	// {
	// 	test: /\.scss$/,
	// 	exclude: /node_modules/,
	// 	use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader'],
	// },
	// CSS Tailwind
	{
		test: /\.css$/,
		exclude: /node_modules/,
		use: [
			MiniCssExtractPlugin.loader,
			{
				loader: 'css-loader',
				options: {
					importLoaders: 1,
				},
			},
			{
				loader: 'postcss-loader',
				options: {
					postcssOptions: {
						ident: 'postcss',
						plugins: [require('tailwindcss'), require('autoprefixer')],
					},
				},
			},
		],
	},
	{
		test: /\.(eot|woff|woff2|svg|ttf)([\?]?.*)$/,
		use: [
			{
				loader: 'url-loader',
				options: {
					name: '[name].[ext]',
					outputPath: '/css/fonts',
				},
			},
		],
	},

	// File loader
	{
		test: /\.(png|jpeg|jpg|gif|svg|ico)$/,
		use: [
			{
				loader: 'file-loader',
				options: {
					name: 'img/[name].[ext]',
					publicPath: 'production' === process.env.NODE_ENV ? '../' : ' ../../',
				},
			},
		],
	},
];

// Plugins
const plugins = (argv) => [
	new CleanWebpackPlugin({
		cleanStaleWebpackAssets: 'production' === argv.mode,
	}),
	new MiniCssExtractPlugin({
		filename: 'css/[name].css',
	}),
	new BrowserSyncPlugin({
		proxy: 'http://theme.local/',
		files: ['../**/*.php', '../**/*.css', '../**/*.scss', '../**/*.js'],
		port: 3000,
		notify: false,
	}),
];

module.exports = (env, argv) => ({
	entry: entry,
	output: output,
	devtool: 'source-map',

	module: {
		rules: rules,
	},
	optimization: {
		minimizer: [
			new OptimizeCssAssetsPlugin({
				cssProcessor: cssnano,
			}),
			new TerserWebpackPlugin({
				cache: false,
				parallel: true,
				sourceMap: false,
			}),
		],
	},
	plugins: plugins(argv),
});
