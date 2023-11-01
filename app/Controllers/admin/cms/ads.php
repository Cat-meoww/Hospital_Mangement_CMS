<?php

namespace App\Controllers\admin\cms;

use App\Controllers\General;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Files\FileCollection;

class ads extends General
{
    use ResponseTrait;

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        return $this->dashboard();
    }
    public function dashboard()
    {
        helper(['form']);
        $this->data['title'] = "Ads";
        $Ads = new \App\Models\cms\Ads();
        $this->data['Ads'] = $Ads->orderBy('id', 'DESC')->findAll();
        $this->data['Options'] = [
            'pages' => [
                '' => "Select Page",
                'home' => "Home Page",
                'property-detail' => "Property Detail Page",
                'property-filter' => "Property Filter Page",
            ],
            'component' => [
                '' => "Select Component",
                'topbar' => "Top Bar",
                'bottombar' => "Bottom Bar",
            ],
            'visiblity' => [
                '' => 'Visiblity',
                'Public' => 'Public',
                'Private' => 'Private'
            ]
        ];
        return view('admin/cms/ads', $this->data);
    }

    /**
     * API post forms
     */
    public function create_ads()
    {

        try {

            $rules  = [
                'title' => [
                    'label' => 'Ad Title',
                    'rules' => "trim|required|min_length[3]|max_length[300]",
                ],
                'page' => [
                    'label' => 'page',
                    'rules' => "required|in_list[home,property-detail,property-filter]",
                ],
                'component' => [
                    'label' => 'Component name',
                    'rules' => "required|in_list[topbar,bottombar]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
                'imagefile' => [
                    'label' => "Ad Image",
                    'rules' => "uploaded[imagefile]|max_size[imagefile,1048]|is_image[imagefile]",
                ]
            ];
            if ($this->validate($rules)) {

                $page_name = $this->request->getPost('page');
                $component = $this->request->getPost('component');
                $visiblity = $this->request->getPost('visiblity');

                $img = $this->request->getFile('imagefile');

                if (!$img->hasMoved()) {

                    $newName = $img->getRandomName();
                    $data = $img->move(ROOTPATH . 'public/uploads/ads/', $newName);
                    if ($data) {
                        $Ads = new \App\Models\cms\Ads();
                        if ($visiblity == "Public") {
                            $Ads->where('page_name', $page_name)->where('component', $component)->set('visibility', 'Private')->update();
                        }

                        $query = $Ads->insert([
                            'page_name' => $page_name,
                            'component' => $component,
                            'title' => $this->request->getPost('title'),
                            'image' => $newName,
                            'visibility' => $visiblity,
                            'created_by' => $this->session->user_id
                        ]);
                        if ($query) {
                            return $this->respond([
                                'status' => "success",
                                'msg' => "Stored data successfully."
                            ]);
                        }
                    }
                }

                throw new \Exception("Unable to store data");
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }
    public function update_ads()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[cms_ads.id]",
                    'errors' => [
                        'is_not_unique' => "Related Ad not founded"
                    ],
                ],
                'title' => [
                    'label' => 'title',
                    'rules' => "trim|required|min_length[3]|max_length[300]",
                ],
                'page' => [
                    'label' => 'page',
                    'rules' => "required|in_list[home,property-detail,property-filter]",
                ],
                'component' => [
                    'label' => 'Component name',
                    'rules' => "required|in_list[topbar,bottombar]",
                ],
                'visiblity' => [
                    'label' => " Visiblity",
                    'rules' => "required|in_list[Public,Private]",
                ],
            ];
            if ($this->validate($rules)) {
                $Ads = new \App\Models\cms\Ads();
                $id = $this->request->getPost("id");
                $page_name = $this->request->getPost('page');
                $component = $this->request->getPost('component');
                $visibility =  $this->request->getPost("visiblity");

                $oldimg = $Ads->where('id', $id)->first()->image;
                $newimg = $this->request->getFile('imagefile');

                if ($newimg->getSize() > 0) {
                    $this->handleUpdateAdsFile($newimg, $oldimg, $id, $Ads);
                }



                if ($visibility == "Public") {
                    $Ads->where('page_name', $page_name)->where('component', $component)->set('visibility', 'Private')->update();
                }


                $query = $Ads->where('id', $id)->set([
                    'title' => $this->request->getPost("title"),
                    'page_name' => $page_name,
                    'component' => $component,
                    'visibility' => $visibility,
                ])->update();
                if ($query) {
                    return $this->respond([
                        'status' => "success",
                        'msg' => "Updated data successfully."
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
    private  function handleUpdateAdsFile($image, $oldimage, $id, $model)
    {
        $allowedExt = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $imageext = $image->guessExtension();
        if (in_array($imageext, $allowedExt)) {

            $imagePATH = ROOTPATH . 'public/uploads/ads/' . $oldimage;
            $oldfile = new \CodeIgniter\Files\File($imagePATH);
            if ($oldfile->isFile()) {
                unlink($imagePATH);
            }

            if (!$image->hasMoved()) {

                $newName = $image->getRandomName();
                $data = $image->move(ROOTPATH . 'public/uploads/ads/', $newName);
                if ($data) {
                    $model->where('id', $id)->set('image', $newName)->update();
                }
            }
        }
    }

    public function delete_ads()
    {

        try {

            $rules  = [
                'id' => [
                    'label' => 'ID',
                    'rules' => "trim|required|is_natural|is_not_unique[cms_ads.id]",
                    'errors' => [
                        'is_not_unique' => "Related Ads not founded"
                    ],
                ],
            ];
            if ($this->validate($rules)) {
                $id = $this->request->getPost("id");
                $Ads = new \App\Models\cms\Ads();
                $oldimage = $Ads->where('id', $id)->first()->image;
                $imagePATH = ROOTPATH . 'public/uploads/ads/' . $oldimage;

                $oldfile = new \CodeIgniter\Files\File($imagePATH);
                if ($oldfile->isFile()) {
                    unlink($imagePATH);
                }
                $query = $Ads->where('id', $id)->delete();
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
