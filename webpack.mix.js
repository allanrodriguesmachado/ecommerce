let mix = require('laravel-mix');

mix.setPublicPath('public');
mix.version();


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'), // Integração com TailwindCSS
    ]);