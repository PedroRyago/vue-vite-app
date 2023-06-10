import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import VuetifyPlugin from 'vite-plugin-vuetify';

export default defineConfig({
// trocando porta padrão para 8080
  server: {
    port: 8080
  },
  plugins: [
    vue(),
    VuetifyPlugin({
      autoImport: true,
    }),
  ],
});
