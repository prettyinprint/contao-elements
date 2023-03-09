const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const webpack = require('webpack');
const { WebpackManifestPlugin } = require('webpack-manifest-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

const isDev = false;

module.exports = {
  entry: {
    accordion: {
      import: path.resolve(__dirname, './assets/controllers/accordion.js'),
      dependOn: 'stimulus',
    },
    grid: path.resolve(__dirname, './assets/scss/grid.scss'),
    contentBox: path.resolve(__dirname, './assets/scss/content_box.scss'),
    stimulus: path.resolve(__dirname, './assets/stimulus.js'),
  },
  mode: isDev ? 'development' : 'production',
  output: {
    path: path.resolve(__dirname, 'src/Resources/public'),
    filename: 'js/[name].js',
    publicPath: '/public/',
  },
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        use: ['babel-loader'],
      },
      {
        test: /\.s[ac]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new WebpackManifestPlugin({}),
    new MiniCssExtractPlugin({
      filename: 'css/[name].css',
    }),
  ],
  optimization: {
    runtimeChunk: 'single',
  },
};
