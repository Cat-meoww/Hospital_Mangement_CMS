<?php

namespace App\Controllers\API\Services;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller as BaseController;

class Geoservice extends BaseController
{
    use ResponseTrait;
    private $client;
    private $geo_url;
    private bool $cache = false;
    private int $cacheIntervel = 30;

    public function __construct()
    {
        $options = [
            'baseURI' => 'https://countriesnow.space/api/v0.1/countries/',
            'timeout' => 3,
            'connect_timeout' => 0
        ];
        $this->client  = \Config\Services::curlrequest($options);
        if ($this->cache) {
            $this->cachePage($this->cacheIntervel);
        }
    }
    public function Getcountries()
    {
        $response = $this->client->request('GET', "positions");
        $getBody = $response->getBody();
        return $this->respond(json_decode($getBody), 200);
    }
    public function Getstates()
    {
        try {
            $rules  = [
                'country' => 'required|alpha_space|not_in_list[undefined]'
            ];
            if (!$this->validate($rules)) {
                return $this->failValidationErrors($this->validator->getErrors());
            } else {
                $bodyparam = ["country" => $this->request->getPost("country")];


                $response = $this->client->request('GET', "states/q", [
                    'query' => $bodyparam,
                ]);
                $getBody = $response->getBody();

                return $this->respond(json_decode($getBody), 200);
            }
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }
    }
    public function Getcities()
    {
        try {
            $rules  = [
                'country' => 'required|alpha_space|not_in_list[undefined]',
                'state' => 'required|alpha_space|not_in_list[undefined]'
            ];
            if (!$this->validate($rules)) {
                return $this->failValidationErrors($this->validator->getErrors());
            } else {
                $bodyparam = [
                    "country" => $this->request->getGetPost("country"),
                    "state" => $this->request->getGetPost("state")
                ];

                $response = $this->client->request('GET', "state/cities/q", [
                    'query' => $bodyparam,
                ]);
                $getBody = $response->getBody();

                return $this->respond(json_decode($getBody), 200);
            }
        } catch (\Exception $e) {
            return $this->fail($e->getMessage());
        }
    }
}
