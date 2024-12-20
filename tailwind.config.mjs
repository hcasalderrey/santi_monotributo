import defaultTheme from 'tailwindcss/defaultTheme'

/** @type {import('tailwindcss').Config} */
import animations from '@midudev/tailwind-animations'
//import '@fontsource/pt-serif';
//import '@fontsource/gotham/500.css'
//import '@fontsource/gotham/700.css'
export default {
	content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
	theme: {
         
      
		extend: {
            fontFamily: {
                
                'gotham': ['Gotham', 'sans-serif'],
                'gotham-bold': ['Gotham-Bold', 'sans-serif'],
                'pt': ['PT Serif', ...defaultTheme.fontFamily.sans],

              },
            colors: {
                accent: "#3f6b9c",
                accentligth: "#91a6b7",
                accentmorelight: "#c3d8e2",

                // Your preferred gray scale. Zinc is closest to Starlight’s defaults.
                gray: "#f3f3f3", 
                whitegray: "#f9f9fa", 

                optical: "#fcfcfc", 

              } 
        },
	},
	plugins: [animations],
}
