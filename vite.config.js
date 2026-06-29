import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // Added to force Vite onto IPv4 and resolve the CORS blocking issue
    server: {
        host: '127.0.0.1',
        cors: true,
    },
});