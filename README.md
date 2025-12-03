Muse Salon - split project
==========================
Structure created at: /mnt/data/muse_salon_project

How to use:
- Open index.html in a static server or browser. The page loads component HTML via fetch(), so for local testing run a simple server:
    python3 -m http.server 8000
  then open http://localhost:8000/muse_salon_project/index.html

- CSS is in styles/global.css
- JS is in scripts/main.js
- Components are in components/*.html
- Assets: assets/images/*

Notes:
- I moved inline <style> and <script> from your original HTML into styles/global.css and scripts/main.js.
- Component files are verbatim extracts of the sections from your HTML.
