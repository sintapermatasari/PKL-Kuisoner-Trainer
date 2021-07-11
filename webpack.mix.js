const mix = require('laravel-mix')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/app.js', 'public/js')
  .styles(['resources/css/app.css'], 'public/css/app.css')
  .styles(['resources/css/homepage.css'], 'public/css/homepage.css')
  .styles(['resources/css/selesai.css'], 'public/css/selesai.css')
  .styles(['resources/css/kuisioner.css'], 'public/css/kuisioner.css')
