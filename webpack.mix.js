const mix = require('laravel-mix');
require('laravel-mix-purgecss');

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

mix.config.fileLoaderDirs.fonts = 'assets/webfonts';
mix.config.fileLoaderDirs.images = 'assets/images';

mix.js('resources/js/app.js', 'public/assets/js');
mix.js('resources/js/pages/ecommerce-solidaire/app.js', 'public/assets/js/pages/ecommerce-solidaire');
mix.sass('resources/sass/app.scss', 'public/assets/css');
mix.sass('resources/sass/pages/ecommerce-solidaire/app.scss', 'public/assets/css/pages/ecommerce-solidaire');
mix.copyDirectory('resources/images', 'public/assets/images');

if (mix.inProduction()) {
    // Purge css not used
    mix.purgeCss({
        content: [
            'resources/views/**/*.php',
            'public/assets/js/*.js',
            'resources/**/*.vue'
        ],
        whitelistPatterns: [
            /dropdown/,
            /tooltip/,
            /active$/,
            /pagination$/,
            /page-/,
            /btn-/
        ],
        enabled: true
    });

    mix.version();
}