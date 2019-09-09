const mix = require("laravel-mix");
const CopyWebpackPlugin = require("copy-webpack-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
const imageminMozjpeg = require("imagemin-mozjpeg");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Copie et compresse les images
mix.webpackConfig({
    plugins: [
        new CopyWebpackPlugin([
            {
                context: "/resources/images",
                from: "**/*",
                to: "images" // Laravel mix will place this in 'public/ressources'
            }
        ]),
        new ImageminPlugin({
            // disable: process.env.NODE_ENV !== 'production', // Disable during development
            test: /.(jpe?g|png|gif|svg)$/i,
            plugins: [
                imageminMozjpeg({
                    quality: 80
                })
            ]
        })
    ]
});

// // Copie et compresse les images
// mix.webpackConfig({
//     plugins: [
//         new CopyWebpackPlugin([{
//             context: './resources/',
//             from: 'fonts/**/*',

//             to: '.', // Laravel mix will place this in 'public/ressources'
//         }]),
//     ]
// });

// //  TODO Copie et compresse les vidéos ;)
// mix.webpackConfig({
//     plugins: [
//         new CopyWebpackPlugin([{
//             from: 'resources/css/bootstrap.min.css',
//             to: 'css/bootstrap.min.css', // Laravel mix will place this in 'public/ressources'
//         }]),
//     ]
// });

//  TODO Copie et compresse les vidéos ;)
// mix.webpackConfig({
//     plugins: [
//         new CopyWebpackPlugin([{
//             from: 'resources/js/jquery.js',
//             to: 'js/jquery.js', // Laravel mix will place this in 'public/ressources'
//         }]),
//     ]
// });
mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);
