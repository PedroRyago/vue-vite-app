import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import VuetifyPlugin from 'vite-plugin-vuetify';

export default defineConfig({
  plugins: [
    vue(),
    VuetifyPlugin({
      autoImport: true,
    }),
  ],
});