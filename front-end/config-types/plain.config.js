const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const MomentLocalesPlugin = require('moment-locales-webpack-plugin');

const config = {
    publicPath: process.env.NODE_ENV === 'production'
        ? '/neonbet/'
        : './',

    pages: {
        index: {
            entry: 'src/app/main.js'
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
