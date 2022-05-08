const mix = require("laravel-mix");

mix.sass("assets/styles/main.scss", "/dist");
mix.js("assets/script.js", "/dist");
