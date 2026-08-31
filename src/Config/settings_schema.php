<?php

return [

    'site' => [

        'order' => 0,
        'label' => 'General',
        'info' => 'Basic information about your website.',

        'fields' => [

            '_content' => [
                'type' => 'separator',
                'icon' => 'panels-top-left',
                'label' => 'Site Content',
                'text' => 'Set how your site will be presented.',
                'stores_value' => false,
            ],

            'name' => [
                'path' => 'site.name',
                'type' => 'text',
                'label' => 'Site Name',
                'hint' => 'Universal name of your website. (It can be your Brand name).',
            ],

            'tagline' => [
                'path' => 'site.tagline',
                'type' => 'text',
                'label' => 'Tagline',
                'hint' => 'A short description or slogan for your website.',
                'default' => '',
            ],

            'language' => [
                'path' => 'site.language',
                'type' => 'select',
                'label' => 'Default Language',
                'options' => [],
                'options_source' => [
                    'type'   => 'class',
                    'target' => \DeVy\Core\Support\LanguageRegistry::class,
                    'method' => 'options',
                ],
                'default' => 'en',
            ],

            'currency' => [
                'path' => 'site.currency',
                'type' => 'select',
                'label' => 'Default Currency',
                'options' => [],
                'options_source' => [
                    'type'   => 'class',
                    'target' => \DeVy\Core\Support\CurrencyRegistry::class,
                    'method' => 'options',
                ],
                'default' => 'USD',
            ],

            'timezone' => [
                'path' => 'site.timezone',
                'type' => 'select',
                'label' => 'Timezone',
                'options' => [],
                'options_source' => [
                    'type'   => 'class',
                    'target' => \DeVy\Core\Support\TimezoneRegistry::class,
                    'method' => 'options',
                ],
                'default' => 'Asia/Ho_Chi_Minh',
            ],

            'date_format' => [
                'path' => 'site.date_format',
                'type' => 'select',
                'label' => 'Date Format',
                'options' => [
                    'Y-m-d' => '2026-08-06',
                    'd/m/Y' => '06/08/2026',
                    'm/d/Y' => '08/06/2026',
                    'j M Y' => '6 Aug 2026',
                    'F j, Y' => 'August 6, 2026',
                ],
                'default' => 'Y-m-d',
            ],

            'time_format' => [
                'path' => 'site.time_format',
                'type' => 'select',
                'label' => 'Time Format',
                'options' => [
                    'H:i' => '23:45 (24 hour)',
                    'h:i A' => '11:45 PM (12 hour)',
                ],
                'default' => 'H:i',
            ],

            'week_starts_on' => [
                'path' => 'site.week_starts_on',
                'type' => 'select',
                'label' => 'Week Starts On',
                'options' => [
                    'monday' => 'Monday',
                    'sunday' => 'Sunday',
                    'saturday' => 'Saturday',
                ],
                'default' => 'monday',
            ],



            '_contact' => [
                'type' => 'separator',
                'icon' => 'phone',
                'label' => 'Site Contact',
                'text' => 'Add your hotline, emails, and other contact options.',
                'stores_value' => false,
            ],

            'emails' => [
                'path' => 'site.contact.emails',
                'type' => 'textarea_line',
                'label' => 'Email Addresses',
                'hint' => 'One email address per line. First email will be the main email.',
                'default' => [],
            ],

            'phones' => [
                'path' => 'site.contact.phones',
                'type' => 'textarea_line',
                'label' => 'Phone Numbers',
                'hint' => 'One phone number per line. First phone number will be the main number',
                'default' => [],
            ],

            'social' => [
                'path' => 'site.contact.social',
                'type' => 'textarea_line',
                'label' => 'Social Links',
                'hint' => 'One link(https://) per line. Invalid URLs may result broken links on the site.',
                'default' => [],
            ],



            '_location' => [
                'type' => 'separator',
                'icon' => 'earth',
                'label' => 'Primary Location',
                'text' => 'Setup the main location of your site, if applicable. Branches can be added using a custom module.',
                'stores_value' => false,
            ],

            'address' => [
                'path' => 'site.locations.0.address',
                'type' => 'textarea_line',
                'label' => 'Business Address',
                'hint' => 'Postal or business address. Use new lines to seperate. Put postal code/zip at the bottom.',
                'default' => [],
            ],

            'country' => [
                'path' => 'site.locations.0.country',
                'type' => 'select',
                'label' => 'Country',
                'options' => [],
                'options_source' => [
                    'type'   => 'class',
                    'target' => \DeVy\Core\Support\CountryRegistry::class,
                    'method' => 'options',
                ],
                'default' => 'US',
            ],

            'locale' => [
                'path' => 'site.locations.0.locale',
                'type' => 'select',
                'label' => 'Locale',
                'options' => [],
                'options_source' => [
                    'type'   => 'class',
                    'target' => \DeVy\Core\Support\LocaleRegistry::class,
                    'method' => 'options',
                ],
                'default' => 'en_US',
            ],


        ],

    ],

];