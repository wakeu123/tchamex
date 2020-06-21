const mix = require('laravel-mix');

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
    .styles(
        [

            'resources/assets/css/companies.css',
            'resources/assets/css/home.css',
            'resources/assets/css/mainn.css',
            'resources/assets/css/mainv3.css',
            'resources/assets/css/style.css',
        ],
        'public/css/home.min.css'
    )
    .scripts(
        [
            'resources/assets/js/ast.js',
        ],
        'public/js/front.min.js'
    )

    .copyDirectory('node_modules/datatables/media/images', 'public/images')
    .copyDirectory('node_modules/font-awesome/fonts', 'public/fonts')
    //.copyDirectory('resources/assets/admin-lte/img', 'public/img')
    .copyDirectory('resources/assets/images', 'public/images')
    //.copy('resources/assets/js/jquery-3.3.1.min.js', 'public/js/jquery.min.js');

/*
|-----------------------------------------------------------------------
| BrowserSync
|-----------------------------------------------------------------------
|
| BrowserSync refreshes the Browser if file changes (js, sass, blade.php) are
| detected.
| Proxy specifies the location from where the app is served.
| For more information: https://browsersync.io/docs
*/
mix.browserSync({
  proxy: 'http://localhost:8000',
  host: 'localhost',
  open: true,
  watchOptions: {
    usePolling: false
  },
  files: [
    'app/**/*.php',
    'resources/views/**/*.php',
    'public/js/**/*.js',
    'public/css/**/*.css',
    //'resources/docs/**/*.md'
  ]
});
