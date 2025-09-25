import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'resources/views/**/*.blade.php',
                'resources/views/**/*.php',
                'routes/**/*.php',
                'app/**/*.php'
            ],
        }),
        tailwindcss({
            config: {
                content: [
                    'resources/views/**/*.blade.php',
                    'resources/views/**/*.php',
                    'resources/js/**/*.js',
                    'app/**/*.php'
                ],
            }
        }),
    ],
    server: {
        hmr: {
            host: 'localhost',
            port: 5173,
        },
        watch: {
            usePolling: true,
            interval: 1000,
        },
    },
    css: {
        devSourcemap: true,
    },
});
