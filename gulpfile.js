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

console.log(elixir.config);

elixir(function(mix) {
    mix.sass('app.scss');

    mix.scripts([
	    '../../assets/bower/jquery/dist/jquery.js',
	    '../../assets/bower/bootstrap-sass/assets/javascripts/bootstrap.js'
	], 'public/js/vendor.js');
});
