import paths from '../paths.mjs'
//import path from 'path'
import CopyWebpackPlugin from 'copy-webpack-plugin'
import MiniCssExtractPlugin from 'mini-css-extract-plugin'
//import webpack from 'webpack'
//import { readFileSync } from 'fs'
import threadLoader from 'thread-loader'

threadLoader.warmup(
  {
    // pool options, like passed to loader options
    // must match loader options to boot the correct pool
  },
  ['babel-loader', 'sass-loader']
)

export default function common(mode) {
  return {
    context: paths.root,
    entry: {
      main: {
        import: [`${paths.src}/main/app.ts`],
      },
      'width-container': {
        import: [`${paths.src}/blocks/width-container/width-container.ts`],
      },
    },
    output: {
      path: paths.build,
      publicPath: /*'auto'*/ (() => {
        let flag = 0
        return (
          '/' +
          paths.build
            .replace('\\', '/')
            .split(/\\|\//g)
            .filter((part) => {
              if (part === 'wp-content' && !flag) flag = 1
              return flag
            })
            .join('/') +
          '/'
        )
      })(),
      filename: 'js/[name].js',
      clean: true,
    },
    optimization: {
      splitChunks: {
        cacheGroups: {
          cssVendor: {
            test: (mod) => {
              const moduleName = mod.nameForCondition ? mod.nameForCondition() : ''
              return /node_modules/i.test(moduleName) && /\.css$/i.test(moduleName)
            },
            name: function (module, chunks, cacheGroupKey) {
              const spl = module.identifier().split('.')
              spl.pop()
              const moduleFileName = spl
                .join('.')
                .split('/')
                .reduceRight((item) => item)
              // This is taken from the documentation but there
              // seems to be no great explaination but it seems
              // to be what we need, joining the entry point names
              // together by ~.  We can then determine which chunk/file
              // needs to be loaded by each entry point.
              const allChunksNames = chunks.map((item) => `[${item.name}]`).join('~')
              return `libs/${allChunksNames}-${moduleFileName}`
            },
            chunks: 'initial',
            priority: -10,
            enforce: true,
          },
          vendor: {
            test: /[\\/]node_modules[\\/]/,
            name: function (module, chunks, cacheGroupKey) {
              const spl = module.identifier().split('.')
              spl.pop()
              const moduleFileName = spl
                .join('.')
                .split('/')
                .reduceRight((item) => item)
              // This is taken from the documentation but there
              // seems to be no great explaination but it seems
              // to be what we need, joining the entry point names
              // together by ~.  We can then determine which chunk/file
              // needs to be loaded by each entry point.
              const allChunksNames = chunks.map((item) => `[${item.name}]`).join('~')
              return `libs/${allChunksNames}-${moduleFileName}`
            },
            chunks: 'all',
            priority: -10,
            reuseExistingChunk: true,
          },
          commons: {
            name: function (module, chunks, cacheGroupKey) {
              const spl = module.identifier().split('.')
              spl.pop()
              const moduleFileName = spl
                .join('.')
                .split('/')
                .reduceRight((item) => item)

              // This is taken from the documentation but there
              // seems to be no great explaination but it seems
              // to be what we need, joining the entry point names
              // together by ~.  We can then determine which chunk/file
              // needs to be loaded by each entry point.
              const allChunksNames = chunks.map((item) => `[${item.name}]`).join('~')
              return `commons/${allChunksNames}-${moduleFileName}`
            },
            // Automatically split all code as needed into separate files.
            chunks: 'all',
            priority: -20,
            reuseExistingChunk: true,
          },
        },
      },
    },
    module: {
      rules: [
        {
          test: /\.(ts|js)x?$/,
          exclude: /node_modules/,
          use: [
            'thread-loader',
            {
              loader: 'babel-loader',
              options: {
                presets: [
                  [
                    '@babel/preset-env',
                    {
                      targets: {
                        node: '17.6.0',
                      },
                    },
                  ],
                  '@babel/preset-react',
                  '@babel/preset-typescript',
                ],
              },
            },
          ],
        },
        {
          test: /\.(scss|sass|css)$/,
          use: [
            MiniCssExtractPlugin.loader,
            {
              loader: 'css-loader',
              options: {
                sourceMap: mode === 'development',
                importLoaders: 2,
              },
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: mode === 'development',
                postcssOptions: {
                  plugins: [
                    [
                      'postcss-preset-env',
                      {
                        browsers: 'last 2 versions',
                        autoprefixer: false,
                      },
                    ],
                  ],
                },
              },
            },
            {
              loader: 'sass-loader',
              options: {
                sourceMap: mode === 'development',
              },
            },
          ],
        },
        {
          test: /\.jpe?g$|\.gif$|\.png$|\.svg$/,
          exclude: [/fonts/],
          type: 'asset',
          generator: {
            filename: 'images/[name][ext]',
          },
        },
        {
          test: /\.wav$|\.mp3$|\.webm$|\.mp4$/,
          exclude: [/fonts/, /images/],
          type: 'asset/resource',
          generator: {
            filename: 'media/[name][ext]',
          },
        },
        {
          test: /\.woff$|\.woff2$|\.svg$|\.eot$|\.ttf$/,
          exclude: [/images/],
          type: 'asset/resource',
          generator: {
            filename: 'fonts/[name][ext]',
          },
        },
      ],
    },
    experiments: {
      topLevelAwait: true,
      outputModule: true,
    },
    resolve: {
      extensions: ['.mjs', '.js', '.jsx', '.ts', '.tsx', '.json', 'scss'],
      modules: ['node_modules'],
      alias: {
        '@': `${paths.src}`,
        fonts: `${paths.public}/fonts/`,
        assets: `${paths.public}/assets/`,
      },
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: 'css/[name].css',
        chunkFilename: '[name].css',
      }),
      /*new CopyWebpackPlugin({
        patterns: [
          {
            from: `${paths.public}/assets/`,
          },
        ],
      }),*/
    ],
  }
}
