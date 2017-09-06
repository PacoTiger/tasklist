var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
//return app.css en public/css
elixir(function(mix) {
    mix.sass('app.scss');
});

//return all.js in public/js
//elixir(function(mix) {
//mix.scripts([
//'app.js',
//        'other.js'
//    ]);
//});



