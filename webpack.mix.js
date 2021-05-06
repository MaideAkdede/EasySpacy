let mix = require('laravel-mix');

mix.js('/wp-content/themes/easyspacy/resources/js/app.js', 'wp-content/themes/easyspacy/public/js')
    .sass('/wp-content/themes/easyspacy/resources/sass/theme.scss', 'wp-content/themes/easyspacy/public/css');