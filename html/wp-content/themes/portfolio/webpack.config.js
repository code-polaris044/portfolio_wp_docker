// CommonJSで記述
const path = require("path");
const CopyPlugin = require("copy-webpack-plugin");
const ImageminWebpWebpackPlugin = require("imagemin-webp-webpack-plugin");
const ImageminAvifWebpackPlugin = require("imagemin-avif-webpack-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
//10.0.0はes moduleでバグがあるため、9.0.0を使用
const ImageminMozjpeg = require("imagemin-mozjpeg");

// 'production' か 'development' を指定

module.exports = {
    mode: "development",
    entry: "./src/js/index.jsx",
    output: {
        path: path.resolve(__dirname, "./dist"),
        filename: "js/index.js",
        publicPath: "/",
    },
    devtool: "source-map",
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/i,
                exclude: /node_modules/,
                use: [
                    {
                        loader: "babel-loader",
                        options: {
                            presets: [
                                [
                                    "@babel/preset-env",
                                    { targets: "> 3%, not dead" },
                                ],
                                "@babel/preset-react",
                            ],
                        },
                    },
                ],
            },
        ],
    },
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
                {
                    from: path.resolve(__dirname, "src", "fonts"),
                    to: path.resolve(__dirname, "dist", "fonts"),
                },
            ],
        }),
        new ImageminPlugin({
            test: /\.(jpe?g|png)$/i,
            pngquant: {
                quality: 60,
            },
            plugins: [
                ImageminMozjpeg({
                    quality: 60,
                    progressive: true,
                }),
            ],
        }),
        new ImageminWebpWebpackPlugin({
            config: [
                {
                    test: /\.(png|jpe?g)$/i,
                    options: {
                        quality: 60,
                    },
                },
            ],
        }),
        new ImageminAvifWebpackPlugin({
            config: [
                {
                    test: /\.(jpe?g|png)/,
                    options: {
                        quality: 75,
                    },
                },
            ],
            overrideExtension: true,
            detailedLogs: false,
            silent: false,
            strict: true,
        }),
    ],
};
