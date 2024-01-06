<?php

namespace App\Controllers\admin\master;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;



class RolePermissions extends General
{
    use ResponseTrait;

    public function __construct()
    {
        helper(['form']);
        parent::__construct();
    }

    public function index(int $Role_id)
    {
        helper('text');

        $SubRoles = new \App\Models\SubRoles();
        if (!$SubRole = $SubRoles->find($Role_id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->data['title'] = "Roles and Permissions";

        $this->data['role'] = $Role_id;
        $this->data['SubRole'] = $SubRole;
        $Routes = new \App\Models\Routes();
        $this->data['Dataset'] = $Routes
            ->select('routes.*,rp.id as rpid')->join('route_permissions as rp', "rp.route_id=routes.id AND rp.role_id=$Role_id", 'left')
            ->orderBy('routes.id', 'DESC')->findAll();


        $this->data['Options'] = [
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];
        return view('admin/all-master/role_permissions', $this->data);
    }


    private function handle_exception(\Exception $e)
    {
        $data = ['status' => 'bad'];
        $data['message'] = $e->getMessage();
        $errors = $this->validator->getErrors();
        if (count($errors) > 0) {
            $data['errors'] = $errors;
        } else {
            $data['errors'] = $e->getMessage();
        }
        return $this->respond($data);
    }

    public function PermissonHandler()
    {
        try {

            $rules  = [
                'route_id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[routes.id]",
                    'errors' => [
                        'is_not_unique' => "Related Route not founded"
                    ],
                ],
                'role_id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[sub_roles.id]",
                    'errors' => [
                        'is_not_unique' => "Related Role not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $RoutePermissions = new \App\Models\RoutePermissions();
                $route_id = $this->request->getPost("route_id");
                $role_id = $this->request->getPost("role_id");


                $data = [
                    'route_id' => $route_id,
                    'role_id' => $role_id,
                ];

                $rpdata = $RoutePermissions->where($data)->first();

                $buttonafteraction = "";
                if ($rpdata ?? false) {
                    $RoutePermissions->where($data)->delete();
                    $buttonafteraction = "Not Allowed";
                } else {
                    $RoutePermissions->set($data)->insert();
                    $buttonafteraction = "Allowed";
                }



                if ($query ?? true) {
                    return $this->respond([
                        'status' => "success",
                        "data" => $buttonafteraction,
                        'msg' => "Updated  data successfully."
                    ]);
                }
                throw new \Exception("Unable to store data");
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {

            return $this->handle_exception($e);
        }
    }

    public function delete()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[sub_roles.id]",
                    'errors' => [
                        'is_not_unique' => "Related Role not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                if ($id <= 2) {
                    throw new \Exception("You cannot perform this action. dependeny !");
                }
                $SubRoles = new \App\Models\SubRoles();


                $query = $SubRoles->where('id', $id)->delete();
                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Data Deleted successfully."
                    ]);
                }
                throw new \Exception("Unable to store data");
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }
}
