# Magento 2 GDPR Cookie Module Fix for Cloudflare Rocket Loader Compatibility

This Magento 2 module addresses a compatibility issue between the Amasty GDPR Cookie module and Cloudflare's Rocket Loader. Rocket Loader defers the loading of JavaScript files, including `require.js`, until after the page has fully loaded, which can disrupt the normal execution of scripts on Magento 2 pages. This fix ensures that `require.js` and its components load correctly by modifying the script tags to disable asynchronous loading via Cloudflare, thereby preserving page functionality and improving user experience.

## Installation

### 1. Manual Installation

1. **Download the code** or clone the repository to your Magento installation:

    ```bash
    git clone https://github.com/your-repository-url.git app/code/Debuglabs/GdprCookieOverride
    ```

2. **Enable the Module**:

    ```bash
    bin/magento setup:upgrade
    bin/magento setup:di:compile
    bin/magento cache:flush
    ```

### 2. File Placement in Theme

This module requires the `require_js.phtml` file to be placed in your theme's directory. Replace `Parilica` with the name of your theme:

    app/design/frontend/<Your_Theme>/default/Magento_Theme/templates/page/js/require_js.phtml



For example, if your theme is named `CustomTheme`, place the file here:

    app/design/frontend/CustomTheme/default/Magento_Theme/templates/page/js/require_js.phtml



## Usage

Once installed, this module will automatically modify the script tags to ensure that Cloudflare's Rocket Loader does not defer `require.js` and its components, thereby preventing potential JavaScript issues.

## Compatibility

- Magento 2.4.6
- Amasty GDPR Cookie Module
- Cloudflare Rocket Loader

## Troubleshooting

If you encounter any issues:

1. Ensure that the module is properly installed and enabled.
2. Verify that the `require_js.phtml` file is correctly placed in your theme's directory.
3. Clear Magento and browser caches after installation.


## Credits

Developed in collaboration with Amasty, a partner of Debuglabs.

For any inquiries or support, please contact Sebastijan Placento at info@debug-labs.hr.




