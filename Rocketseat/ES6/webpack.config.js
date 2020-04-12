module.exports = {
  // File who will be compiled.
  entry: ['@babel/polyfill', './src/main.js'],
  // Directory way of file compiled.
  output: {
    path: __dirname + '/public',
    /**
     * When mode=development, bundle.js will not be gerated as file, because the 
     * public/ directory have this file implied. Bundle.js will appear only when 
     * mode=production.
     */
    filename: "bundle.js",
  },
  // Directory where will stay the compiled files to webpack server.
  devServer: {
    contentBase: __dirname + '/public',
  },
  module: {
    rules: [
      {
        // Reference of files who will be searched.
        test: /\.js$/,
        // Files who will not be compiled.
        exclude: /node_modules/,
        // Mecanism used for to "compile" the files.
        use: {
          loader: 'babel-loader',
        },
      }
    ]
  }
};

// With webpack-dev-server installed, this:
// "dev": "webpack --mode=development -w" 

// Will be transformed in this:
// "dev": "webpack-dev-server --mode=development"

// PS: All these changes are in package.json file
