<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "AceLords Themes Galore", // set false to total remove
            'description'  => 'Get your custom theme/template cleaned up and Blade-ready for your next big project - or simply spice up an existing one!', // set false to total remove
            'separator'    => ' | ',
            'keywords'     => ['acelords', 'themes', 'blade', 'laravel', 'laravel 5.5'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'AceLords Themes Galore', // set false to total remove
            'description' => 'Get your custom theme/template cleaned up and Blade-ready for your next big project - or simply spice up an existing one!', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => true,
            'site_name'   => 'Acelords',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          'card'        => 'summary',
          'site'        => '@acelords',
        ],
    ],
];
