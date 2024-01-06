<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Models\RoutePermissions;
use App\Models\Routes;
use CodeIgniter\HTTP\Message;
use Exception;

class RolePermission implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

        try {
            // if user role is not admin
            if (!session()->has('sub_role')) {
                throw new Exception('User role not defined');
            }

            if (($userrole = session()->sub_role) == 1) {
                return true;
            }
            
            $router = \CodeIgniter\Config\Services::router();

            $current_route = $router->getMatchedRoute()[0] ?? false;

            $Routes = new Routes();
            $route_id = $Routes->select('id')->where('route', $current_route)->first()->id ?? false;
            // dd($route_id,$current_route);
            if (!$route_id) {
                return true;
            }
           
           
            $RoutePermissions = new RoutePermissions();
            $where = [
                'role_id' => $userrole,
                'route_id' => $route_id
            ];
           
            $RoutePermission = $RoutePermissions->select('id')->where($where)->first()->id ?? false;
            
            if ($RoutePermission) {
                return true;
            }
           

            throw new Exception('Access Denied to this role please contact admin');
        } catch (\Exception $e) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound($e->getMessage());
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
