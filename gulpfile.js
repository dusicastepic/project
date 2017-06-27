var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.

 usage for compiling .css and saas files; gruop all styles in one file. Therefore the app will be faster!
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')


        .styles([
           'libs/blog-post.css',
           'libs/bootstrap.css',
            'libs/font-awesome.css',
            'libs/metisMenu.css',
            'libs/sb-admin-2.css',
            'libs/style.css'

       ],'./public/css/libs.css')

        .scripts([
            'libs/bootstrap.js',
            'libs/jquery.js',
            'libs/metisMenu.js',
            'libs/admin.js',
            'libs/scripts.js'


        ],'./public/js/libs.js')



});
