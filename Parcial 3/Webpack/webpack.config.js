/* const path = require('path');
module.exports={
    entry:'./src/index.js',
    output: {
        filename:'bundle.js',
        path: path.resolve(__dirname,'dist')
    }
} */
const HtmlwebpackPlugin = require ('html-webpack-plugin');
const { Template } = require('webpack');
module.exports={
    plugins:[
        new HtmlwebpackPlugin({
            template: './src/index.html',
            filename: 'index.html',
            inject: 'body'
        })
    ]
};

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
module.exports{
    module:{
        rules:[
            {
                test: /\.css$/i,
                use: [MiniCssExtractPlugin.loader, "css-loader"],
            },
        ],
    },
plugins:[new MiniCssExtractPlugin()],
}