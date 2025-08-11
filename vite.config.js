import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'resources/views/**/*.blade.php',
                'routes/**/*.php',
                'app/**/*.php'
            ],
        }),
        tailwindcss({
            config: {
                content: [
                    'resources/views/**/*.blade.php',
                    'resources/js/**/*.js',
                    'app/**/*.php'
                ],
            }
        }),
    ],
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    css: {
        devSourcemap: true,
    },
});
