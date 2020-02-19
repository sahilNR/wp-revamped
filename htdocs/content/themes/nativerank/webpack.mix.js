const mix = require('laravel-mix');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */
mix.setPublicPath('dist');
const rootPath = Mix.paths.root.bind(Mix.paths);


mix.js('assets/js/theme.js', 'dist/js/theme.min.js')
	.sass('assets/sass/style.scss', 'dist/css/theme.css')

	.purgeCss({
		content: [
			rootPath('resources/**/*.html'),
			rootPath('resources/**/*.js'),
			rootPath('resources/**/*.ts'),
			rootPath('resources/**/*.php'),
			rootPath('views/**/*.php'),
		]
	});
