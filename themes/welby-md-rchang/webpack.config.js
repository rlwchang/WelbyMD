const webpack = require('webpack');
const path = require('path');
// const HtmlWebpackPlugin = require('html-webpack-plugin');
// const ExtractTextPlugin = require('extract-text-webpack-plugin');

// const VENDOR_LIBS = [];

module.exports = {
  entry: {
    bundle: "./scripts/modules/index.js",
    // vendor: VENDOR_LIBS
  },
  output: {
    path: path.resolve(__dirname, "scripts"),
  },
  module: {
    rules: [
      {test: /\.jsx?$/, exclude: /node_modules/, loader: "babel-loader"},
    ]
  },
  plugins: [
    // new HtmlWebpackPlugin({
    //   template: "./public/index.html",
    //   showErrors: false,
    //   chunks: ["vendor", "bundle"]
    // }),
    new webpack.optimize.CommonsChunkPlugin({
      name: ["vendor", "manifest"]
    })
  ]
}
