<?php

namespace App\Libraries;

use PhpParser\Node\Stmt\TryCatch;

class GithubApi
{
    private $baseUrl = 'https://api.github.com';
    private $version = '2022-11-28';
    public $client;
    public $options;
    private $accesstoken;


    function __construct(string $accesstoken)
    {
        $this->accesstoken = $accesstoken;
        $this->options = [
            'user_agent' => 'CodeIgniter Framework v4',
            'baseURI' => "https://api.github.com",
            'connect_timeout' => 0,
            'headers' => [
                'Accept'    => 'application/json',
                'Authorization'  => "Bearer $this->accesstoken",
                'X-Github-Api-Version'  => $this->version,
            ],
        ];

        $this->client  = \Config\Services::curlrequest();
    }



    public function GetUser()
    {

        try {
            $response = $this->client->request('GET', "/user", $this->options);
            $getBody = $response->getBody();

            return json_decode($getBody);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function GetUserEmail()
    {

        try {
            $response = $this->client->request('GET', "/user/emails", $this->options);
            $getBody = $response->getBody();

            return json_decode($getBody);
        } catch (\Throwable $th) {
            throw $th;
        }
    }







    public function getAccessToken($code)
    {
    }
}
