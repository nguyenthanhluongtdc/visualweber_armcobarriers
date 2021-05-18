const mix = require('laravel-mix')
 
// noinspection JSUnresolvedFunction,JSUnresolvedVariable
mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue', '.json'],
        alias: {
            '@': __dirname + '/platform/themes/main/armcobarriers'
        },
    },
});
 
// noinspection JSUnresolvedFunction
mix.version().webpackConfig({
    output: {
        chunkFilename: 'themes/armcobarriers/js/chunks/[name].js',
    },
})
 
// noinspection JSUnresolvedFunction

mix
    .autoload({
        jquery: ['$', 'window.jQuery','window.$'],
    })
    .setPublicPath('public')
    .js('platform/themes/armcobarriers/assets/js/common.js', 'public/themes/armcobarriers/js/common.js')
    .sass('platform/themes/armcobarriers/assets/sass/common.scss', 'public/themes/armcobarriers/css/common.css')
    .copy('platform/themes/armcobarriers/public/images', 'public/themes/armcobarriers/images')
    .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.tsx?$/,
                    loader: 'ts-loader',
                    options: { appendTsSuffixTo: [/\.vue$/] },
                    exclude: /node_modules/,
                },
            ],
        },
        resolve: {
            extensions: ['*', '.js', '.jsx', '.vue', '.ts', '.tsx'],
        },
    })
    .vue()
    .version();
