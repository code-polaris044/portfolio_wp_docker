// CommonJSで記述
const path = require("path");
const CopyPlugin = require("copy-webpack-plugin");
const ImageminWebpWebpackPlugin = require("imagemin-webp-webpack-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
//10.0.0はes moduleでバグがあるため、9.0.0を使用
const ImageminMozjpeg = require("imagemin-mozjpeg");

// 'production' か 'development' を指定

module.exports = {
  mode: "development",
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
          from: path.resolve(__dirname, "src", "images", "common"),
          to: path.resolve(__dirname, "dist", "images", "common"),
        },
        {
          from: path.resolve(__dirname, "src", "images", "only"),
          to: path.resolve(__dirname, "dist", "images", "only"),
        },
      ],
    }),
    new ImageminPlugin({
      test: /\.(jpe?g|png)$/i,
      pngquant: {
        quality: 75,
      },
      plugins: [
        ImageminMozjpeg({
          quality: 75,
          progressive: true,
        }),
      ],
    }),
    new ImageminWebpWebpackPlugin({
      config: [
        {
          test: /\.(png|jpe?g)$/i,
          options: {
            quality: 75,
          },
        },
      ],
    }),
  ],
};
