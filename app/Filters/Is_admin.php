<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Is_admin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        // $router = \CodeIgniter\Config\Services::router();
        // $current_route = $router->getMatchedRoute();
        // d($router,$current_route);
       
        // // d($request);
        // // d(service('routes'));
        // // d(service('routes')->getMatchedRoute()->getName());
        // dd(service('routes')->getRoutes('get'));

        if (!session()->has('user_role') || session()->user_role != 1) {
            
            return redirect('auth/login');
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
