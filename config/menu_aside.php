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
            'title' => 'Applications',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
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
                    'title' => 'Articoli',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Visualizza',
                            'page' => 'admin/articoli'
                        ],
                        [
                            'title' => 'Inserisci',
                            'page' => ''
                        ],

                    ]
                ],
                [
                    'title' => 'Progetti',
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
                [
                    'title' => 'Inbox',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox',
                    'label' => [
                        'type' => 'label-danger label-inline',
                        'value' => 'new'
                    ]
                ]
            ]
        ],
        [
            'title' => 'Utility',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Icone',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'ShareServicePack',
                            'page' => 'admin/icons/shareserviceicons'
                        ],

                        [
                            'title' => 'Fontawesome Pack',
                            'page' => 'admin/icons/fontawesome'
                        ],
                        [
                            'title' => 'Svg Pack',
                            'page' => 'admin/icons/svg'
                        ],
                    ]
                ],

            ]
        ],[
            'title' => 'Test',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'title' => 'ShareServicePack',
             'page' => 'admin/icons/shareserviceicons'

        ],




    ]

];
