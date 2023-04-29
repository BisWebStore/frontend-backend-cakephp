<?php
declare(strict_types=1);

use Cake\Routing\RouteBuilder;

$routes->plugin(
    'FrontendBackend',
    ['path' => '/'],
    function (RouteBuilder $builder) {
        // Add custom routes here

        $builder->prefix('Backend', function (RouteBuilder $routes) {
            // All routes here will be prefixed with `/backend`, and
            // have the `'prefix' => 'Backend'` route element added that
            // will be required when generating URLs for these routes
            $routes->fallbacks();
        });

        // Frontend Routes
        $builder->connect('/', ['controller' => 'Frontend', 'action' => 'home']);
        $builder->connect('/frontend/{action}/*', ['controller' => 'Frontend']);
    }
);