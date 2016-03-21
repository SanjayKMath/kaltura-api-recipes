var fs = require('fs');

var assetMan = module.exports = new (require('bb-asset-manager'))({
  staticDirectory: __dirname + '/static',
  outputDirectory: 'minified',
  cacheID: Math.floor(Math.random() * 100000000),
  useOriginalAssets: process.env.DEVELOPMENT,
});

assetMan.addAsset('kaltura', {
  js: [
    '/js/kaltura/ox.ajast.js',
    '/js/kaltura/webtoolkit.md5.js',
    '/js/kaltura/KalturaClientBase.js',
    '/js/kaltura/KalturaTypes.js',
    '/js/kaltura/KalturaVO.js',
    '/js/kaltura/KalturaServices.js',
    '/js/kaltura/KalturaClient.js',
  ],
});

assetMan.addAsset('core', {
  js: [
    "/js/includes/mixpanel.js",
    "/js/includes/locations.js",
    "/js/includes/cookie.js",
    "/js/includes/app.js",
    '/js/includes/kc-setup.js',
    '/js/includes/console.js',
  ],
  css: [
    '/css/navbar.css',
    '/css/embed.css',
  ],
})

assetMan.compile();
