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
        '/event' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/list2' => [[['_route' => 'list2', '_controller' => 'App\\Controller\\EventController::list'], null, null, null, false, false, null]],
        '/new2' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
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
                .'|/edit2/([^/]++)(*:184)'
                .'|/show2/([^/]++)(*:207)'
                .'|/delete(?'
                    .'|2/([^/]++)(*:235)'
                    .'|3/([^/]++)/([^/]++)(*:262)'
                .')'
                .'|/list(?'
                    .'|3/([^/]++)(*:289)'
                    .'|4/([^/]++)(*:307)'
                .')'
                .'|/new5/([^/]++)/([^/]++)(*:339)'
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
        184 => [[['_route' => 'edit2', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], null, null, false, true, null]],
        207 => [[['_route' => 'show2', '_controller' => 'App\\Controller\\EventController::show'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'delete2', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'delete3', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id', 'id1'], null, null, false, true, null]],
        289 => [[['_route' => 'list3', '_controller' => 'App\\Controller\\EventController::list3'], ['id'], null, null, false, true, null]],
        307 => [[['_route' => 'list4', '_controller' => 'App\\Controller\\ReservationController::list'], ['id'], null, null, false, true, null]],
        339 => [
            [['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['id', 'id1'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
