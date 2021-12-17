<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$OTQ2cS5RYW5yQ1hmWkEuVA$ehJum3ICGrZI5F0O1irhzGOPLDgrE0QhjWQKLSQfuHg',
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:14:"backendFavicon";s:0:"";s:11:"backendLogo";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:19:"loginHighlightColor";s:0:"";s:9:"loginLogo";s:0:"";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
            'slub_web_kartenforum' => 'a:8:{s:8:"basemaps";s:624:"[{"id":"slub-osm","label":"SLUB OSM","urls":["https://basemaps-1.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png","https://basemaps-2.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png","https://basemaps-3.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png"],"type":"xyz","tileSize":256},{"id":"maptiler-satellite","label":"MapTiler Satellite","urls":["https://api.maptiler.com/maps/hybrid/{z}/{x}/{y}.jpg?key=9wghD5zlvdu13A81zHqB"],"type":"xyz","tileSize":512},{"id":"bkg-topoplus","label":"BKG TopoPlus","urls":["https://sgx.geodatenzentrum.de/wms_topplus_open"],"type":"wms", "layers": "web", "tileSize":512}]";s:7:"mapView";s:106:"{ "extent": [-20026376.39,-20048966.10,20026375.39,20048966.10], "center": [1528150, 6630500], "zoom": 2 }";s:12:"urlNominatim";s:46:"https://kartenforum.slub-dresden.de/nominatim/";s:9:"urlSearch";s:37:"https://search-slub.pikobytes.de/vk20";s:10:"urlTerrain";s:79:"https://api.maptiler.com/tiles/terrain-quantized-mesh/?key=kRAKrA0wcbZZFOT64bX5";s:9:"georefApi";s:29:"https://geo-slub.pikobytes.de";s:14:"georefAuthUser";s:0:"";s:18:"georefAuthPassword";s:0:"";}',
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
        'slub_web_kartenforum' => [
            'basemaps' => '[{"id":"slub-osm","label":"SLUB OSM","urls":["https://basemaps-1.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png","https://basemaps-2.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png","https://basemaps-3.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png"],"type":"xyz","tileSize":256},{"id":"maptiler-satellite","label":"MapTiler Satellite","urls":["https://api.maptiler.com/maps/hybrid/{z}/{x}/{y}.jpg?key=9wghD5zlvdu13A81zHqB"],"type":"xyz","tileSize":512},{"id":"bkg-topoplus","label":"BKG TopoPlus","urls":["https://sgx.geodatenzentrum.de/wms_topplus_open"],"type":"wms", "layers": "web", "tileSize":512}]',
            'georefApi' => 'https://geo-slub.pikobytes.de',
            'georefAuthPassword' => '',
            'georefAuthUser' => '',
            'mapView' => '{ "extent": [-20026376.39,-20048966.10,20026375.39,20048966.10], "center": [1528150, 6630500], "zoom": 2 }',
            'urlNominatim' => 'https://kartenforum.slub-dresden.de/nominatim/',
            'urlSearch' => 'https://search-slub.pikobytes.de/vk20',
            'urlTerrain' => 'https://api.maptiler.com/tiles/terrain-quantized-mesh/?key=kRAKrA0wcbZZFOT64bX5',
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        5 => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '2139712da0c429ee7650bbee51dba0246c280b8d2ccaa8cca7f2e6a443d986d98132a214a0978ac04d60e17afcfebc80',
        'exceptionalErrors' => 4096,
        'features' => [
            'newTranslationServer' => true,
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'New TYPO3 site',
        'systemLogLevel' => 2,
    ],
];
