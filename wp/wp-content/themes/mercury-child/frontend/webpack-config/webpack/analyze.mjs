import { merge } from 'webpack-merge'
import { BundleAnalyzerPlugin } from 'webpack-bundle-analyzer'
import prod from './prod.mjs'

export default merge(prod, {
  plugins: [new BundleAnalyzerPlugin()],
})
