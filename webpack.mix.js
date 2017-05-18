const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
.js('resources/assets/js/app.js', 'public/js')
   // .sass('resources/assets/sass/app.scss', 'public/css')
   //.less('node_modules/semantic-ui/src/semantic.less','public/css')
   //.less('node_modules/semantic-ui/src/theme.less','public/css')
   //.options({ processCssUrls: false })
   .scripts([
   	'node_modules/dropzone/dist/dropzone.js',
   	'resources/assets/semantic-ui/dist/semantic.js',
   	'resources/assets/semantic-ui/dist/components/**/*.js'], 'public/js/components.js');
