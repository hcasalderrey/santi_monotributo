import { defineConfig } from 'astro/config';
import animations from '@midudev/tailwind-animations';
import tailwind from "@astrojs/tailwind";

import node from "@astrojs/node";

// https://astro.build/config
export default defineConfig({
  output: 'hybrid',
  plugins: [animations],
  integrations: [tailwind()],
  adapter: node({
    mode: "standalone"
  })
});