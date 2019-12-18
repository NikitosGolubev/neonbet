const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const MomentLocalesPlugin = require('moment-locales-webpack-plugin');

const config = {
    // proxy API requests to Valet during development

    // output built static files to Laravel's public dir.
    // note the "build" script in package.json needs to be modified as well.
    outputDir: '../public',

    // modify the location of the generated HTML file.
    // make sure to do this only in production.
    indexPath: process.env.NODE_ENV === 'production'
        ? '../resources/views/index.blade.php'
        : 'front-end/public/index.html',

    pages: {
        index: {
            entry: 'src/app/main.js',
            template: 'public/index.html'
        }
    },

    configureWebpack: {
        plugins: [
            new BundleAnalyzerPlugin(),
            new MomentLocalesPlugin({
                localesToKeep: ['en', 'ru'],
            })
        ]
    }
};

module.exports = config;
