let mix = require('laravel-mix');

require('laravel-mix-pluton');

mix.pluton('wp-content/themes/easyspacy/resources/js/parts')
    .js('/wp-content/themes/easyspacy/resources/js/app.js', 'wp-content/themes/easyspacy/public/js')
    .sass('/wp-content/themes/easyspacy/resources/sass/theme.scss', 'wp-content/themes/easyspacy/public/css')
    .browserSync({
        proxy: 'localhost:8888/EasySpacy/',
        notify: false,
    });