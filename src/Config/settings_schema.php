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

            'phones' => [
                'path' => 'site.contact.phones',
                'type' => 'repeater',
                'label' => 'Phone Numbers',
                'add_label' => 'Add Phone',
                'item_label' => '{label} {phone}',
                'sortable' => true,
                'min_items' => 1,                      // the first is the main number
                'default' => [],
                'default_item' => ['label' => '', 'phone' => '', 'type' => 'landline'],
                'fields' => [
                    'label' => [
                        'type' => 'text',
                        'label' => 'Label',
                        'hint' => 'e.g. Hotline, Office, WhatsApp. The first entry is the main number.',
                        'default' => '',
                    ],
                    'phone' => [
                        'type' => 'text',
                        'label' => 'Phone Number',
                        'rules' => ['required', 'max:40'],
                        'default' => '',
                    ],
                    'type' => [
                        'type' => 'select',
                        'label' => 'Type',
                        'options' => [
                            'landline' => 'Landline',
                            'mobile'   => 'Mobile',
                            'whatsapp' => 'WhatsApp',
                            'fax'      => 'Fax',
                            'other'    => 'Other',
                        ],
                        'default' => 'landline',
                    ],
                ],
            ],

            'emails' => [
                'path' => 'site.contact.emails',
                'type' => 'repeater',
                'label' => 'Email Addresses',
                'add_label' => 'Add Email',
                'item_label' => '{label} <{email}>',   // e.g. "Sales <sales@acme.com>"
                'sortable' => true,
                'min_items' => 1,                      // the first is the main email
                'default' => [],
                'default_item' => ['label' => '', 'email' => ''],
                'fields' => [
                    'label' => [
                        'type' => 'text',
                        'label' => 'Label',
                        'hint' => 'e.g. Sales, Support, General. The first entry is the main email.',
                        'default' => '',
                    ],
                    'email' => [
                        'type' => 'text',
                        'label' => 'Email Address',
                        'rules' => ['required', 'email'],
                        'default' => '',
                    ],
                ],
            ],

            'social' => [
                'path' => 'site.contact.social',
                'type' => 'repeater',
                'label' => 'Social Links',
                'add_label' => 'Add Social Link',
                'item_label' => '{platform}',      // or '{platform} — {url}'
                'sortable' => true,
                'default' => [],
                'default_item' => ['platform' => '', 'url' => ''],
                'fields' => [
                    'platform' => [
                        'type' => 'select',
                        'label' => 'Platform',
                        'options' => [
                            'facebook'  => 'Facebook',
                            'instagram' => 'Instagram',
                            'x'         => 'X / Twitter',
                            'linkedin'  => 'LinkedIn',
                            'youtube'   => 'YouTube',
                            'tiktok'    => 'TikTok',
                            'zalo'      => 'Zalo',
                            'other'     => 'Other…',
                        ],
                        'rules' => ['required'],
                    ],
                    'url' => [
                        'type' => 'text',
                        'label' => 'URL',
                        'hint' => 'Must start with https://',
                        'rules' => ['required', 'url', 'starts_with:https://'],
                    ],
                ],
            ],



            '_branches' => [
                'type' => 'separator',
                'icon' => 'map-pin',
                'label' => 'Branches',
                'text' => 'Add your locations. The first branch is used as the primary location.',
                'stores_value' => false,
            ],

            'branches' => [
                'path' => 'site.branches',
                'type' => 'repeater',
                'label' => 'Branches',
                'add_label' => 'Add Branch',
                'item_label' => '{name}',
                'sortable' => true,
                'min_items' => 1,                       // the first item is the primary branch
                'default' => [],
                'default_item' => [
                    'id'        => null,
                    'name'      => '',
                    'address'   => [],
                    'country'   => 'US',
                    'locale'    => 'en_US',
                    'phone'     => '',
                    'email'     => '',
                    'hours'     => '',
                    'image_url' => '',
                    'image_alt' => '',
                    'map_url'   => '',
                ],
                'fields' => [

                    'id' => [
                        'type' => 'hidden',             // stable key for sort/delete
                    ],

                    'name' => [
                        'type' => 'text',
                        'label' => 'Branch Name',
                        'hint' => 'The first branch is treated as the primary location.',
                        'rules' => ['required', 'max:120'],
                        'default' => '',
                    ],

                    'address' => [
                        'type' => 'textarea_line',
                        'label' => 'Address',
                        'hint' => 'Postal or business address. Use new lines to separate. Put postal code/zip at the bottom.',
                        'rules' => ['required'],
                        'default' => [],
                    ],

                    'phone' => [
                        'type' => 'text',
                        'label' => 'Phone',
                        'rules' => ['nullable', 'max:40'],
                        'default' => '',
                    ],

                    'email' => [
                        'type' => 'text',
                        'label' => 'Email',
                        'rules' => ['nullable', 'email'],
                        'default' => '',
                    ],

                    'hours' => [
                        'type' => 'text',
                        'label' => 'Opening Hours',
                        'default' => '',
                    ],

                    'image_url' => [
                        'type' => 'image',
                        'label' => 'Image URL',
                        'default' => '',
                    ],

                    'image_alt' => [
                        'type' => 'text',
                        'label' => 'Image ALT Text',
                        'default' => '',
                    ],

                    'map_url' => [
                        'type' => 'text',
                        'label' => 'Map / Directions URL',
                        'rules' => ['nullable', 'url'],
                        'default' => '',
                    ],

                ],
            ],


        ],

    ],

];