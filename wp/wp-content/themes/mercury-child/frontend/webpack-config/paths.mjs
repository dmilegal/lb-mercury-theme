import path from 'path'
import { fileURLToPath } from 'url'

const __filename = fileURLToPath(import.meta.url)
const __dirname = path.dirname(__filename)

export default {
  root: path.resolve(__dirname, '../'),
  public: path.resolve(__dirname, '../public'),
  src: path.resolve(__dirname, '../src'),
  build: path.resolve(__dirname, '../dist'),
}
