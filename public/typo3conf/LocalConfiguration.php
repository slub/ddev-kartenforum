<?php
return [
    'BE' => [
        'debug' => true,
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
    'EXT' => [],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => 'EXT:slub_web_kartenforum/Resources/Public/Icons/VkfLogoBackend.svg',
            'loginBackgroundImage' => 'EXT:slub_web_kartenforum/Resources/Public/Images/loginbg.jpg',
            'loginFootnote' => '...by PIKOBYTES GmbH',
            'loginHighlightColor' => '#ff3333',
            'loginLogo' => 'EXT:slub_web_kartenforum/Resources/Public/Icons/VkfLogoLogin.svg',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'slub_web_kartenforum' => [
            'basemaps' => '[{"id":"slub-osm","label":"SLUB OSM","urls":["https://tile-1.kartenforum.slub-dresden.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png","https://tile-2.kartenforum.slub-dresden.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png"],"type":"xyz","tileSize":256, "attribution": "<a href=\\"https://kartenforum.slub-dresden.de/\\" target=\\"_blank\\">Hosted by SLUB Dresden</a> <a href=\\"https://www.pikobytes.de/\\" target=\\"_blank\\">build by PIKOBYTES GmbH</a> <a href=\\"https://www.openmaptiles.org/\\" target=\\"_blank\\">&copy; OpenMapTiles</a> <a href=\\"https://www.openstreetmap.org/copyright\\" target=\\"_blank\\">&copy; OpenStreetMap contributors</a>"},{"id":"maptiler-satellite","label":"MapTiler Satellite","urls":["https://api.maptiler.com/maps/hybrid/{z}/{x}/{y}.jpg?key=9wghD5zlvdu13A81zHqB"],"type":"xyz","tileSize":512, "attribution": "<a href=\\"https://www.maptiler.com/copyright/\\" target=\\"_blank\\">© MapTiler</a> <a href=\\"https://www.openstreetmap.org/copyright\\" target=\\"_blank\\">© OpenStreetMap contributors</a>"},{"id":"bkg-topoplus","label":"BKG TopPlusOpen","urls":["https://sgx.geodatenzentrum.de/wms_topplus_open"],"type":"wms", "layers": "web", "tileSize":512, "attribution": "<a href=\\"https://sg.geodatenzentrum.de/web_public/Datenquellen_TopPlus_Open.pdf\\" target=\\"blank\\">© Bundesamt für Kartographie und Geodäsie 2022</a>"}]',
            'georefApi' => 'https://geo.kartenforum.slub-dresden.de',
            'georefAuthPassword' => '',
            'georefAuthUser' => '',
            'mapView' => '{ "extent": [-20026376.39,-20048966.10,20026375.39,20048966.10], "center": [1528150, 6630500], "zoom": 2 }',
            'terrain' => '{"url": "https://api.maptiler.com/tiles/terrain-quantized-mesh/?key=kRAKrA0wcbZZFOT64bX5", "attribution": "<a href=\'https://www.maptiler.com/maps/3d/#10.4800/46.8400/4300/281/-24\' target=\'_blank\'>© MapTiler</a>"}',
            'urlNominatim' => 'https://kartenforum.slub-dresden.de/nominatim/',
            'urlSearch' => 'https://search.kartenforum.slub-dresden.de/vk20',
        ],
    ],
    'FE' => [
        'debug' => true,
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
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
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
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'pagesection' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
            ],
        ],
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '2139712da0c429ee7650bbee51dba0246c280b8d2ccaa8cca7f2e6a443d986d98132a214a0978ac04d60e17afcfebc80',
        'exceptionalErrors' => 12290,
        'features' => [
            'felogin.extbase' => true,
            'newTranslationServer' => true,
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'SLUB Kartenforum',
    ],
];
