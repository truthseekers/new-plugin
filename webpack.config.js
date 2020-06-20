const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require('path');

console.log("laaaaalala");

module.exports = {
    ...defaultConfig,
    entry: {
        ...defaultConfig.entry,
        editorStyle: './src/editorStyle.js',
        style: './src/style.js'
    }
}
