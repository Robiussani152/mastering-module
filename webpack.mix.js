const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();
mix.copyDirectory(__dirname+'/Assets', '../../public/modules/Mastering');
mix.js(__dirname + '/Resources/assets/js/app.js', 'js/mastering.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'css/mastering.css');

if (mix.inProduction()) {
    mix.version();
}
