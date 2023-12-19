<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;



use Config\Services;
use Closure;
use Generator;
use App\Models\Routes as RouteTable;
use CodeIgniter\Database\RawSql;


class FetchRoutes extends BaseCommand
{
    protected $group       = 'App';
    protected $name        = 'fetch:routes';
    protected $description = 'Fetchs all admin routes admin/* to init route table.';

    public function run(array $params)
    {
        $collection = Services::routes()->loadRoutes();

        $RouteTable = new RouteTable();
        $additionalUpdateField = ['updated_on' => new RawSql('CURRENT_TIMESTAMP')];
        $tbody           = [];
        $dataset = [];

        foreach ($this->collect($collection) as $route) {

            if (!str_starts_with($route['route'], 'admin/')) {
                continue;
            }


            $routeName = ($route['route'] === $route['name']) ? null : $route['name'];

            $ControllerMethod = explode('::', $route['handler']);

            $tbody[] = [
                strtoupper($route['method']),
                $route['route'],
                $routeName,
                $route['handler'],
                $ControllerMethod[0] ?? "",
                $ControllerMethod[1] ?? "",
            ];
            $data = [
                'method' => strtoupper($route['method']),
                'route' => $route['route'],
                'name' => $routeName,
                'handler' => $route['handler'],
            ];
            $dataset[] = $data;
        }

        $query = $RouteTable->setData($dataset)->updateFields($additionalUpdateField, true)->upsert();
       

        $thead = [
            'Method',
            'Route',
            'Name',
            'Handler',
            'Function'
        ];


        CLI::table($tbody, $thead);
    }

    private function collect($routeCollection): Generator
    {
        $methods = [
            'get',
        ];

        foreach ($methods as $method) {
            $routes = $routeCollection->getRoutes($method);

            foreach ($routes as $route => $handler) {
                if (is_string($handler) || $handler instanceof Closure) {
                    if ($handler instanceof Closure) {
                        $view = $routeCollection->getRoutesOptions($route, $method)['view'] ?? false;

                        $handler = $view ? '(View) ' . $view : '(Closure)';
                    }

                    $routeName = $routeCollection->getRoutesOptions($route, $method)['as'] ?? $route;

                    yield [
                        'method'  => $method,
                        'route'   => $route,
                        'name'    => $routeName,
                        'handler' => $handler,
                    ];
                }
            }
        }
    }
}
