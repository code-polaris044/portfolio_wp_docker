// CommonJSで記述
const path = require("path");
const ImageminWebpWebpackPlugin = require("imagemin-webp-webpack-plugin");
const CopyPlugin = require("copy-webpack-plugin");

// 'production' か 'development' を指定

module.exports = {
  mode: "production",
  entry: "./src/js/index.js",
  output: {
    path: path.resolve(__dirname, "./dist"),
    filename: "js/index.js",
    publicPath: "/",
  },
  devtool: "source-map",
  plugins: [
    new CopyPlugin({
      patterns: [
        {
          from: path.resolve(__dirname, "src", "images"),
          to: path.resolve(__dirname, "dist", "images"),
        },
      ],
    }),
    new ImageminWebpWebpackPlugin({
      config: [
        {
          test: /\.(png|jpe?g)$/i, // 対象ファイル
          options: {
            quality: 75, // 画質
          },
        },
      ],
    }),
  ],
};
