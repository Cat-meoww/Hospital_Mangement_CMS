<?php

namespace App\Controllers\admin\cms;

use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;



class blog extends General
{
    use ResponseTrait;

    public function __construct()
    {
        helper(['form']);
        parent::__construct();
    }

    public function index()
    {
        helper('text');

        $this->data['title'] = "Blog";
        $Blogs = new \App\Models\Blogs();
        $this->data['Dataset'] = $Blogs
            ->select()
            ->orderBy('id', 'DESC')->findAll();

        $this->data['Options'] = [
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];
        return view('admin/cms/blog/index', $this->data);
    }
    public function create()
    {

        $this->data['title'] = "Blog";

        $this->data['Options'] = [
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];

        return view('admin/cms/blog/create', $this->data);
    }
    public function update($id)
    {

        try {
            $Blogs = new \App\Models\Blogs();

            if (!$Blog = $Blogs->select('*')->find($id)) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }

            $this->data['title'] = "Doctor CMS";
            $this->data['blog'] = $Blog;

            $this->data['Options'] = [
                'visiblity' => [
                    '' => 'Visiblity',
                    'Public' => 'Public',
                    'Private' => 'Private'
                ]
            ];
            return view('admin/cms/blog/update', $this->data);
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e);
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
