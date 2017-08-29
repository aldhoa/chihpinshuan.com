<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */


    //config admin
    Router::prefix('admin', function ($routes) {
        $routes->connect('/login'               , ['controller' => 'User'   , 'action' => 'login']);
        $routes->connect('/product'             , ['controller' => 'Product', 'action' => 'product']);
        $routes->connect('/product/add'         , ['controller' => 'Product', 'action' => 'add']);
        $routes->connect('/product/edit/:id'    , ['controller' => 'Product', 'action' => 'edit']);
        $routes->connect('/product/delete/:id'  , ['controller' => 'Product', 'action' => 'delete']);
        $routes->connect('/orders'              , ['controller' => 'Orders'  , 'action' => 'orders']);
    });

    //config web

        $routes->connect('/',           ['prefix' => 'web','controller' => 'Product', 'action' => 'index']);
        $routes->connect('/media',      ['prefix' => 'web','controller' => 'Product', 'action' => 'media']);
        $routes->connect('/prodtype',   ['prefix' => 'web','controller' => 'Product', 'action' => 'prodtype']);
        $routes->connect('/orderinfo',  ['prefix' => 'web','controller' => 'Product', 'action' => 'orderinfo']);
        $routes->connect('/contact',    ['prefix' => 'web','controller' => 'Product', 'action' => 'contact']);
        $routes->connect('/product_detail/:id',    ['prefix' => 'web','controller' => 'Product', 'action' => 'product_detail']);

        $routes->connect('/order/:id',['prefix' => 'web','controller' => 'Product', 'action' => 'order']);

        $routes->connect('/order_address',['prefix' => 'web','controller' => 'Product', 'action' => 'orderAddress']);

        $routes->connect('/order_success',['prefix' => 'web','controller' => 'Product', 'action' => 'orderSuccess']);


    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
