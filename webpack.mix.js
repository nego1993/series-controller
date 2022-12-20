const { js, sass } = require('laravel-mix')
const mix = require('laravel-mix')

mix
sass('resources/css/app.scss', 'public/css')
