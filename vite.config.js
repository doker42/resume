import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    server: {
        host: 'localhost', // или '127.0.0.1' — главное, чтобы совпадало с тем, как ты открываешь сайт
        port: 5175,
        cors: true, // разрешаем CORS
        strictPort: true,
        hmr: {
            host: 'localhost', // это важно для HMR и предотвращения CORS
        },
    },

});
