const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.sass('resources/scss/app.scss', 'public/assets/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('tailwind.config.js')],
        uglify: {
            comments: false,
        }
    })
    .version();

if (!mix.inProduction()) {
    mix.sourceMaps();
}
