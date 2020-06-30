<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin/dashboard',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'Custom',
        ],
        [
            'title' => 'Sito Web',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [

                [
                    'title' => 'Articoli',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Visualizza',
                            'page' => 'admin/posts'
                        ],
                        [
                            'title' => 'Inserisci',
                            'page' => ''
                        ],

                    ]
                ],
                [
                    'title' => 'Categorie',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Visualizza',
                            'page' => 'admin/postcategories'
                        ],
                        [
                            'title' => 'Inserisci',
                            'page' => ''
                        ],

                    ]
                ],

            ],
        ],
        [
            'title' => 'Gestione Impianti',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Impianti',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Visualizza',
                            'page' => 'admin/progetti'
                        ],
                        [
                            'title' => 'Inserisci',
                            'page' => 'admin/progetti/crea'
                        ],

                    ]
                ],
                [
                    'title' => 'Servizi',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Visualizza',
                            'page' => 'admin/servizi'
                        ],
                        [
                            'title' => 'Inserisci',
                            'page' => 'admin/servizi/crea'
                        ],
                    ]
                ],
                [
                    'title' => 'Categorie',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Visualizza',
                            'page' => 'admin/category'
                        ],
                        [
                            'title' => 'Inserisci',
                            'page' => 'admin/category/create'
                        ],

                    ]
                ],

            ]
        ],
        [
            'section' => 'Settings',
        ],
        [
            'title' => 'Gestione',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Utenti',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Visualizza',
                            'page' => 'admin/utenti'
                        ],

                        [
                            'title' => 'Inserisci',
                            'page' => 'admin/utenti/inserisci'
                        ],

                    ]
                ],
                [
                    'title' => 'Inbox',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox',
                    'label' => [
                        'type' => 'label-danger label-inline',
                        'value' => 'new'
                    ]
                ],

            ]
        ],


        // [
        //     'title' => 'Articoli',
        //     'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
        //     'bullet' => 'line',
        //     'root' => true,
        //     'submenu' => [

        //         [
        //             'title' => 'Visualizza',
        //             'page' => 'admin/articoli'

        //         ],
        //         [
        //             'title' => 'Inserisci',
        //             'page' => 'admin/articoli'

        //         ],
        //     ],
        //     [
        //     'title' => 'Categorie',
        //     'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
        //     'bullet' => 'line',
        //     'root' => true,
        //     'submenu' => [

        //         [
        //             'title' => 'Visualizza',
        //             'page' => 'admin/articoli'

        //         ],
        //         [
        //             'title' => 'Inserisci',
        //             'page' => 'admin/articoli'

        //         ],
        //         ],
        //     ],

        //     [
        //         'title' => 'Inbox',
        //         'bullet' => 'dot',
        //         'page' => 'custom/apps/inbox',
        //         'label' => [
        //             'type' => 'label-danger label-inline',
        //             'value' => 'new'
        //         ]
        //     ]

        // ],


    ],
];
