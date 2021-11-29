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
            'slub_web_kartenforum' => 'a:6:{s:12:"urlNominatim";s:46:"https://kartenforum.slub-dresden.de/nominatim/";s:10:"urlOsmMaps";s:218:"https://basemaps-1.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png,https://basemaps-2.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png,https://basemaps-3.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png";s:9:"urlSearch";s:37:"https://search-slub.pikobytes.de/vk20";s:9:"georefApi";s:29:"https://geo-slub.pikobytes.de";s:14:"georefAuthUser";s:9:"vk20_user";s:18:"georefAuthPassword";s:14:"vk20_user_1234";}',
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
            'georefApi' => 'https://geo-slub.pikobytes.de',
            'georefAuthPassword' => '',
            'georefAuthUser' => '',
            'urlNominatim' => 'https://kartenforum.slub-dresden.de/nominatim/',
            'urlOsmMaps' => 'https://basemaps-1.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png,https://basemaps-2.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png,https://basemaps-3.pikobytes.de/styles/maptiler-basic-v2/{z}/{x}/{y}.png',
            'urlSearch' => 'https://search-slub.pikobytes.de/vk20',
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
