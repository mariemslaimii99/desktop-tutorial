<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)(*:178)'
                .'|/add/([^/]++)/([^/]++)(*:208)'
                .'|/list2/([^/]++)(*:231)'
                .'|/mod/([^/]++)/([^/]++)(*:261)'
                .'|/sup/([^/]++)(*:282)'
                .'|/panier(*:297)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        178 => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\CommandeController::index'], ['id1'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'panier_add', '_controller' => 'App\\Controller\\CommandeController::add'], ['id', 'id1'], null, null, false, true, null]],
        231 => [[['_route' => 'list2', '_controller' => 'App\\Controller\\CommandeController::list'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'panier_mod', '_controller' => 'App\\Controller\\CommandeController::modifyProduct'], ['id', 'id1'], null, null, false, true, null]],
        282 => [[['_route' => 'panier_sup', '_controller' => 'App\\Controller\\CommandeController::deleteProduct'], ['id'], null, null, false, true, null]],
        297 => [
            [['_route' => 'panier_index', '_controller' => 'App\\Controller\\PanierController::index'], [], ['GET' => 0], null, true, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
