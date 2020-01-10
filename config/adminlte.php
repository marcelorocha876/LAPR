<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'REGES',
    'title_prefix' => '',
    'title_postfix' => '',


    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-logo
    |
    */

    'logo' => '<b>REGES</b>',
    'logo_img' => 'vendor/adminlte/dist/img/Logo.png',
    'logo_img_class' => 'brand-image-xl',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => '',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => true,

    /*
    |--------------------------------------------------------------------------
    | Extra Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_header' => 'container-fluid',
    'classes_content' => 'container-fluid',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand-md',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#66-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#67-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#68-laravel-mix
    |
    */

    'enabled_laravel_mix' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#69-menu
    |
    */

    'menu' => [
        [
            'text' => 'Pesquisar',
            'search' => true,
            'topnav' => true,
        ],
        [
            'topnav' => true,
            'text' => '',
            'icon' => 'far fa-bell',
            'icon_color' => 'yellow',
            'aria-expanded' => false,
            'data-toggle' => 'dropdown',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ]
            ]

        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Início',
            'url'         => '/home',
            'icon'        => 'fas fa-fw fa-home',
        ],
        ['header' => 'ÁREA PESSOAL'],
        [
            'text' => 'Perfil Pessoal',
            'url'  => '/perfilpessoal',
            'icon' => 'fas fa-fw fa-user',
            'icon_color' => 'yellow',
        ],
        [
          'text' => 'Submeter Comprovativos',
          'icon' => 'fas fa-fw fa-copy',
            'icon_color' => 'red',
          'submenu'  => [
              [
                  'text' => 'Comprovativo de Ausência',
                  'icon' => 'fas fa-exclamation-triangle',
                  'url' => '/comp_ausencia',
                      'icon_color' => 'red',
              ],
              [
                  'text' => 'Comprovativo de Morada',
                  'icon' => 'fas fa-fw fa-home',
                  'url' => '/comp_morada',
                  'icon_color' => 'red',
              ],
              [
                'text'    => 'Comprovativo de IBAN',
                'icon'    => 'fas fa-fw fa-credit-card',
                  'url' => '/comp_iban',
                  'icon_color' => 'red',
              ],
              [
                  'text'    => 'Cartão de Identificação',
                  'icon'    => 'fas fa-fw fa-user',
                  'url' => '/comp_identificacao',
                  'icon_color' => 'red',
              ]
          ]
        ],
        [
            'text' => 'Objetivos Pessoais',
            'icon' => 'fas fa-fw fa-clipboard',
            'url' => '/objetivospessoais',
            'icon_color' => 'green',
        ],

        [
            'text' => 'Consulta',
            'icon' => 'fas fa-search',
            'icon_color' => 'orange',
            'submenu'  => [
                [
                    'text' => 'Rendimentos',
                    'icon' => 'fas fa-fw fa-box',
                    'icon_color' => 'orange',
                ],
                [
                    'text' => 'Assiduidade',
                    'icon' => 'fas fa-fw fa-calendar',
                    'icon_color' => 'orange',
                ]
            ]
        ],
        ['header' => 'EMPRESA'],
        [
            'text'       => 'Calendarização',
            'icon' => 'fas fa-fw fa-calendar',
            'url' => '/calendario',
            'icon_color' => 'fuchsia',
        ],
        [
            'text'       => 'Caixa de Correio',
            'icon' =>   'far fa-envelope',
            'icon_color' => 'red',
            'submenu' => [
                [
                    'text' => 'Caixa de Entrada',
                    'icon' => 'fas fa-inbox',
                    'url' => '/correio/entrada',
                    'icon_color' => 'red',
                ],
                [
                    'text'    => 'Enviado',
                    'icon' => 'fas fa-fw fa-share',
                    'url' => '/correio/enviado',
                    'icon_color' => 'red',
                 ],
                [
                    'text' => 'Compor',
                    'icon' => 'fas fa-fw fa-edit',
                    'url' => '/correio/compor',
                    'icon_color' => 'red',
                ],
            ]

        ],

        [
            'text'       => 'Pedidos',
            'icon' =>   'fas fa-fw fa-check',
            'icon_color' => 'yellow',
            'submenu' => [
                [
                    'text' => 'Fazer Pedido',
                    'icon' => 'fas fa-fw fa-edit',
                    'icon_color' => 'yellow',
                    'url' => '/fazerpedido',
                ],
                [
                    'text'    => 'Histórico de Pedidos',
                    'icon' => 'fas fa-fw fa-list',
                    'icon_color' => 'yellow',
                    'url' => '/historicopedidos',
                ]
            ]

        ],
        [
            'text'       => 'Objetivos',
            'icon' =>   'fas fa-fw fa-clipboard',
            'icon_color' => 'green',
            'submenu' => [
                [
                    'text' => 'Mensal',
                    'icon' => 'fas fa-fw fa-tag',
                    'icon_color' => 'green',
                ],
                [
                    'text'    => 'Anual',
                    'icon' => 'fas fa-fw fa-tag',
                    'icon_color' => 'green',
                ]
            ]

        ],

    ],


    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#610-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you c'layout_footer' => true,an look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#611-plugins
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
