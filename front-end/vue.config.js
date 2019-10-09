module.exports = {
    // proxy API requests to Valet during development
    devServer: {
        proxy: 'http://neonbet-back-end.loc'
    },

    // output built static files to Laravel's public dir.
    // note the "build" script in package.json needs to be modified as well.
    outputDir: '../public',

    // modify the location of the generated HTML file.
    // make sure to do this only in production.
    indexPath: process.env.NODE_ENV === 'production'
        ? '../resources/views/index.blade.php'
        : '_main.sass.html',

    pages: {
        index: {
            entry: 'src/app/main.js',
            template: 'public/index.html'
        }
    }
};
