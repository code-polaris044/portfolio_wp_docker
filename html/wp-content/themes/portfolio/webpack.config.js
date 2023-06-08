// CommonJSで記述
const path = require("path");

// 'production' か 'development' を指定
const MODE = "development";

// ソースマップの利用有無(productionのときはソースマップを利用しない)
const enabledSourceMap = MODE === "development";

module.exports = {
  mode: MODE,
  entry: "./src/js/index.js",
  output: {
    path: path.resolve(__dirname, "./dist"),
    filename: "js/index.js",
    publicPath: "/",
  },
  module: {
    rules: [
      {
        test: /\.css/,
        use: [
          {
            loader: "css-loader",
          },
        ],
      },
    ],
  },
  // devtool: "source-map",
};
