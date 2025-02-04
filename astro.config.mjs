import { defineConfig } from 'astro/config';
import animations from '@midudev/tailwind-animations';
import tailwind from "@astrojs/tailwind";

import react from "@astrojs/react";

// https://astro.build/config
export default defineConfig({
    prefetch: {
        prefetchAll: true
      },
  plugins: [animations],
  integrations: [tailwind(), react()]
});