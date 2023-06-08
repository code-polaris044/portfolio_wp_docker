// CommonJSで記述
const path = require("path");

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
};
