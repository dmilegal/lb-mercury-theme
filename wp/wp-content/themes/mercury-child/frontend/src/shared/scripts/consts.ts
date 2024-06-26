export const API_URL =
  document.querySelector<HTMLLinkElement>('link[rel="https://api.w.org/"]')?.href ||
  '/wp-json/'
