const { js, sass, css } = require('laravel-mix')
const mix = require('laravel-mix')

mix.setPublicPath('public');
mix.setResourceRoot('../');

mix
sass('resources/css/app.scss', 'public/css', 'public/scss')
.sourceMaps();
