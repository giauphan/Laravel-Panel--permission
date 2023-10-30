import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/filament/filament/app.css',
            'resources/css/filament/support/support.css',
            'resources/css/filament/forms/forms.css',
            'resources/js/filament/filament/*.js',
            'resources/js/filament/filament/*/*.js',
            'resources/js/filament/filament/*/*/*.js',
            'resources/js/filament/widgets/components/stats-overview/stat/chart.js'],
            refresh: true,
        }),
    ],
});
