<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\adminController::index'], null, null, null, false, false, null]],
        '/admin/gite/create' => [[['_route' => 'admin_gite_create', '_controller' => 'App\\Controller\\Admin\\adminController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\homeController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\homeController::contact'], null, null, null, false, false, null]],
        '/recherche-gite' => [[['_route' => 'recherche-gite', '_controller' => 'App\\Controller\\homeController::rechercheGite'], null, null, null, false, false, null]],
        '/detail-gite' => [[['_route' => 'detailGite', '_controller' => 'App\\Controller\\homeController::detailGite'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/gite/([^/]++)(*:21)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:59)'
                    .'|wdt/([^/]++)(*:78)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:123)'
                            .'|router(*:137)'
                            .'|exception(?'
                                .'|(*:157)'
                                .'|\\.css(*:170)'
                            .')'
                        .')'
                        .'|(*:180)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'gite_show', '_controller' => 'App\\Controller\\GiteController::show'], ['id'], null, null, false, true, null]],
        59 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        123 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        137 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        157 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        180 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
