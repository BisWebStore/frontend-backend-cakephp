<?php
declare(strict_types=1);

use Cake\Routing\Route\DashedRoute;

$routes->plugin(
    'FrontendBackend',
    ['path' => '/'],
    function ($routes) {
        $routes->setRouteClass(DashedRoute::class);

        $routes->get('/', ['controller' => 'Frontend', 'action' => 'home']);
    }
);