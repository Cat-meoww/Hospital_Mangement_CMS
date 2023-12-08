<?php

namespace App\Controllers\admin\cms;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;



class pages extends General
{
    use ResponseTrait;

    public function __construct()
    {
        parent::__construct();
    }

    public function doctor($id)
    {
        try {
            $Doctors = new \App\Models\Doctors();

            if (!$Doctor = $Doctors->select('id,slug,name')->find($id)) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }

            $this->data['title'] = "Doctor CMS";
            $this->data['doctor'] = $Doctor;
            $CmsPages = new \App\Models\CmsPages();
            $where = ['type' => 'doctor', 'slug' => $Doctor->slug];
            $this->data['Dataset'] = $CmsPages->where($where)->first();

            return view('admin/cms/doctor_page', $this->data);
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
        }
    }
    public function upsert_doctor()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'Doctor Id',
                    'rules' => "is_not_unique[doctors.id]",
                ],
                'meta_title' => [
                    'label' => 'Meta Title',
                    'rules' => "trim|required|min_length[3]|max_length[100]",
                ],
                'meta_description' => [
                    'label' => 'Meta Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],
                'cms_heading' => [
                    'label' => 'CMS Heading',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],
                'cms_content' => [
                    'label' => 'CMS Content',
                    'rules' => "trim|required",
                ],
            ];
            if ($this->validate($rules)) {
                $CmsPages = new \App\Models\CmsPages();
                $Doctors = new \App\Models\Doctors();
                $Doctor = $Doctors->find($this->request->getPost('id'));

                $upsert = [
                    'type' => 'doctor',
                    'slug' => $Doctor->slug,
                    'meta_title' => $this->request->getPost('meta_title'),
                    'meta_description' => $this->request->getPost('meta_description'),
                    'heading' => $this->request->getPost('cms_heading'),
                    'content' => $this->request->getPost('cms_content'),
                    'updated_on' => $this->date,
                ];


                $query = $CmsPages->upsert($upsert);



                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Stored data successfully."
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
}
