# AmastyGDPRCookieFIx
Fixes an issue between the Amasty GDPR Cookie module and Cloudflare's Rocket Loader in Magento 2. Rocket Loader defers JavaScript loading, causing require.js to load late and disrupt functionality. This module modifies script tags to prevent asynchronous loading, ensuring proper script execution and improving page performance.
