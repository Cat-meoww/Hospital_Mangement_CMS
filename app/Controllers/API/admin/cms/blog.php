<?php

namespace App\Controllers\API\admin\cms;


use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;
use DateTime;

class Blog extends General
{
    use ResponseTrait;

    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        try {

            $rules  = [

                'meta_title' => [
                    'label' => 'Meta Title',
                    'rules' => "trim|required|min_length[3]|max_length[100]",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "trim|alpha_dash|is_unique[blogs.slug]",
                ],
                'meta_description' => [
                    'label' => 'Meta Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],
                'cms_heading' => [
                    'label' => 'Heading',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],
                'cms_content' => [
                    'label' => 'Content',
                    'rules' => "trim|required",
                ],
                'hero_image' => [
                    'label' => "Display Image",
                    'rules' => "uploaded[hero_image]|max_size[hero_image,1048]|is_image[hero_image]",
                ]
            ];
            if ($this->validate($rules)) {
                $CmsPages = new \App\Models\CmsPages();
                $Blogs = new \App\Models\Blogs();

                $imagename = $this->uploadImage('hero_image');
                if (!$imagename) {
                    throw new \Exception("Upload Image failed to save");
                }


                $data = [
                    'type' => 'doctor',
                    'slug' => $this->request->getPost('slug'),
                    'meta_title' => $this->request->getPost('meta_title'),
                    'meta_description' => $this->request->getPost('meta_description'),
                    'heading' => $this->request->getPost('cms_heading'),
                    'content' => $this->request->getPost('cms_content'),
                    'hero_image' => $imagename
                ];


                $query = $Blogs->insert($data);

                $this->session->setFlashdata('success', 'Created a blog successfully');



                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Stored data successfully."
                    ]);
                }
                throw new \Exception("Unable to store data");
            } else {
                throw new \Throwable("Invalid data");
            }
        } catch (\Throwable $e) {
            return $this->handle_exception($e);
        }
    }
    public function update()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[blogs.id]",
                    'errors' => [
                        'is_not_unique' => "Related Blog not founded"
                    ],
                ],
                'meta_title' => [
                    'label' => 'Meta Title',
                    'rules' => "trim|required|min_length[3]|max_length[100]",
                ],
                'slug' => [
                    'label' => 'Slug',
                    'rules' => "trim|alpha_dash|is_unique[blogs.slug,id,{id}]",
                ],
                'meta_description' => [
                    'label' => 'Meta Description',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],
                'cms_heading' => [
                    'label' => 'Heading',
                    'rules' => "trim|required|min_length[3]|max_length[500]",
                ],
                'cms_content' => [
                    'label' => 'Content',
                    'rules' => "trim|required",
                ],
            ];
            if ($this->validate($rules)) {
                $Blogs = new \App\Models\Blogs();
                $id = $this->request->getPost("id");

                $update = [
                    'type' => 'doctor',
                    'slug' => $this->request->getPost('slug'),
                    'meta_title' => $this->request->getPost('meta_title'),
                    'meta_description' => $this->request->getPost('meta_description'),
                    'heading' => $this->request->getPost('cms_heading'),
                    'content' => $this->request->getPost('cms_content'),
                ];

                $olddata = $Blogs->select('hero_image')->where('id', $id)->first();
                $newimg = $this->request->getFile('hero_image');

                if ($newimg->getSize() > 0) {
                    $newimagename = $this->uploadImage('hero_image', $olddata->hero_image);

                    if ($newimagename) {
                        $update['hero_image'] = $newimagename;
                    }
                }

                $query = $Blogs->where('id', $id)->set($update)->update();

                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Updated data successfully."
                    ]);
                }
                throw new \Exception("Unable to store data");
            } else {
                throw new \Throwable("Invalid data");
            }
        } catch (\Throwable $e) {
            return $this->handle_exception($e);
        }
    }

    public function delete()
    {
        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[blogs.id]",
                    'errors' => [
                        'is_not_unique' => "Related Doctor not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $Blogs = new \App\Models\Blogs();
                $olddata = $Blogs->where('id', $id)->first();
                unlink(ROOTPATH . 'public/uploads/blogs/' . $olddata->hero_image);
                $query = $Blogs->where('id', $id)->delete();
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




    private function handle_exception(\Throwable $e)
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
    private function uploadImage($imageName, $oldfilename = false)
    {

        $IMAGE = $this->request->getFile($imageName);

        $baseroot = ROOTPATH . 'public/uploads/blogs/';
        $SAVEDPATH = $baseroot . $IMAGE->getRandomName();

        $image = \Config\Services::image()
            ->withFile($IMAGE)
            ->fit(899, 500, 'center')
            ->save($SAVEDPATH);
        if (!$image) {
            return false;
        }

        if ($oldfilename) {
            $oldfile = new \CodeIgniter\Files\File($baseroot . $oldfilename);
            if ($oldfile->isFile()) {
                unlink($baseroot . $oldfilename);
            }
        }


        $file = new \CodeIgniter\Files\File($SAVEDPATH);

        return $file->getFilename();
    }
}
