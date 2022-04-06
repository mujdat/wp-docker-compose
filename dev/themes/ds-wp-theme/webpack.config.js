const glob = require('glob')
const path = require('path')

module.exports = {
  mode: 'production',
  entry: {
    'main.min.js': glob.sync('./assets/js/*.js'),
  },
  output: {
    filename: '[name]',
    path: path.resolve(__dirname, 'assets/js/dist'),
  },
}
