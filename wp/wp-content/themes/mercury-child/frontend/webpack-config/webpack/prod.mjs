import { merge } from 'webpack-merge'
import common from './common.mjs'
import webpack from 'webpack'

export default merge(common('production'), {
  mode: 'production',
  plugins: [
    new webpack.DefinePlugin({
      'process.env.NODE_ENV': JSON.stringify('production'),
    }),
  ],
})
