import { merge } from 'webpack-merge'
import common from './common.mjs'
import webpack from 'webpack'
//import BrowserReloadPlugin from 'browser-reload-plugin'
import { createRequire } from 'module'

const require = createRequire(import.meta.url)

const port = require('../../package.json').config.port || 8001

export default merge(common('development', port), {
  mode: 'development',
  devtool: 'source-map',
  cache: true,
  watch: true,
  watchOptions: {
    ignored: /node_modules/,
    aggregateTimeout: 1000,
    poll: process.platform === 'win32' || process.platform === 'darwin' ? false : 1500,
  },
  plugins: [
    new webpack.DefinePlugin({
      'process.env.NODE_ENV': JSON.stringify('development'),
    }),
    /*new BrowserReloadPlugin({
      port,
    }),*/
  ],
})
