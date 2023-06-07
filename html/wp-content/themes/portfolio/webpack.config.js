// CommonJSで記述
const webpack = require("webpack");
const path = require("path");

// 'production' か 'development' を指定
const MODE = "production";

// ソースマップの利用有無(productionのときはソースマップを利用しない)
const enabledSourceMap = MODE === "development";

module.exports = {
  mode: MODE,
  devServer: {
    static: path.resolve(__dirname, "src"),
  },
  entry: "./src/js/index.js",
  output: {
    path: path.resolve(__dirname, "./dist"),
    filename: "js/index.js",
    publicPath: "/",
  },
  // devtool: "source-map",
};
