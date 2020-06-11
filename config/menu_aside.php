<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/admin',
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
                            'title' => 'Visualizza Utenti',
                            'page' => 'admin/utenti'
                        ],

                        [
                            'title' => 'Inserisci Utente',
                            'page' => 'admin/utenti/inserisci'
                        ],

                    ]
                ],
                [
                    'title' => 'Progetti',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Elenco',
                            'page' => 'custom/apps/projects/add-project'
                        ],
                        [
                            'title' => 'Inserisci Progetto',
                            'page' => 'custom/apps/projects/edit-project'
                        ],
                        [
                            'title' => 'Visualizza Progetti',
                            'page' => 'custom/apps/projects/edit-project'
                        ]
                    ]
                ],
                [
                    'title' => 'Servizi',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Elenco',
                            'page' => 'custom/apps/projects/add-project'
                        ],
                        [
                            'title' => 'Inserisci Servizio',
                            'page' => 'custom/apps/projects/edit-project'
                        ],
                        [
                            'title' => 'Visualizza Servizio',
                            'page' => 'custom/apps/projects/edit-project'
                        ]
                    ]
                ],
                [
                    'title' => 'Categorie',
                    'bullet' => 'dot',
                    'submenu' => [

                        [
                            'title' => 'Elenco',
                            'page' => 'custom/apps/projects/add-project'
                        ],
                        [
                            'title' => 'Inserisci Categoria',
                            'page' => 'custom/apps/projects/edit-project'
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
            'title' => 'Pages',
            'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
            'bullet' => 'dot',
            'root' => true,
            'submenu' => [
                [
                    'title' => 'Wizard',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Wizard 1',
                            'page' => 'custom/pages/wizard/wizard-1'
                        ],
                        [
                            'title' => 'Wizard 2',
                            'page' => 'custom/pages/wizard/wizard-2'
                        ],
                        [
                            'title' => 'Wizard 3',
                            'page' => 'custom/pages/wizard/wizard-3'
                        ],
                        [
                            'title' => 'Wizard 4',
                            'page' => 'custom/pages/wizard/wizard-4'
                        ]
                    ]
                ],
                [
                    'title' => 'Pricing Tables',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Pricing Tables 1',
                            'page' => 'custom/pages/pricing/pricing-1'
                        ],
                        [
                            'title' => 'Pricing Tables 2',
                            'page' => 'custom/pages/pricing/pricing-2'
                        ],
                        [
                            'title' => 'Pricing Tables 3',
                            'page' => 'custom/pages/pricing/pricing-3'
                        ],
                        [
                            'title' => 'Pricing Tables 4',
                            'page' => 'custom/pages/pricing/pricing-4'
                        ]
                    ]
                ],
                [
                    'title' => 'Invoices',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Invoice 1',
                            'page' => 'custom/pages/invoices/invoice-1'
                        ],
                        [
                            'title' => 'Invoice 2',
                            'page' => 'custom/pages/invoices/invoice-2'
                        ]
                    ]
                ],
                [
                    'title' => 'User Pages',
                    'bullet' => 'dot',
                    'label' => [
                        'type' => 'label-rounded label-primary',
                        'value' => '2'
                    ],
                    'submenu' => [
                        [
                            'title' => 'Login 1',
                            'page' => 'custom/pages/users/login-1',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 2',
                            'page' => 'custom/pages/users/login-2',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 3',
                            'page' => 'custom/pages/users/login-3',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 4',
                            'page' => 'custom/pages/users/login-4',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 5',
                            'page' => 'custom/pages/users/login-5',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Login 6',
                            'page' => 'custom/pages/users/login-6',
                            'new-tab' => true
                        ]
                    ]
                ],
                [
                    'title' => 'Error Pages',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Error 1',
                            'page' => 'custom/pages/errors/error-1',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 2',
                            'page' => 'custom/pages/errors/error-2',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 3',
                            'page' => 'custom/pages/errors/error-3',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 4',
                            'page' => 'custom/pages/errors/error-4',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 5',
                            'page' => 'custom/pages/errors/error-5',
                            'new-tab' => true
                        ],
                        [
                            'title' => 'Error 6',
                            'page' => 'custom/pages/errors/error-6',
                            'new-tab' => true
                        ]
                    ]
                ]
            ]
        ]




    ]

];
