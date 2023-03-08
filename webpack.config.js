const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const webpack = require('webpack');
const { WebpackManifestPlugin } = require('webpack-manifest-plugin');

const isDev = true;

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
    filename: isDev ? 'js/[name].js' : 'js/[name].[contenthash].js',
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
      filename: isDev ? 'css/[name].css' : 'css/[name].[contenthash].css',
    }),
  ],
  optimization: {
    runtimeChunk: 'single',
  },
};
