import { defineConfig } from 'astro/config';
import animations from '@midudev/tailwind-animations'
import tailwind from "@astrojs/tailwind";

// https://astro.build/config
export default defineConfig({
    plugins: [animations],
  integrations: [tailwind()]
});