import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import jquery from 'jquery';

export default defineConfig({
    plugins: [
        laravel([
            'resources/sass/app.scss',
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
    resolve: {
        alias: {
            $: 'jquery',
            jQuery: 'jquery',
        }
    }
});
