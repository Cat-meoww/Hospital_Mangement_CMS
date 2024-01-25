<?php

namespace App\Libraries;



class GithubAuth
{
    private $urlAuthorize = "";
    private $redirect_uri = "";
    private $state = false;
    private $scope = "read:user,user:email";
    private $token = "";

    function __construct()
    {
        $this->urlAuthorize = 'https://github.com/login/oauth/authorize';
        $this->redirect_uri = base_url('oauth/github/callback');
    }

    public function setScope(string $scope = "read:user"): void
    {
        $this->scope = $scope;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getAuthorizationUrl(): string
    {
        $uri = new \CodeIgniter\HTTP\URI($this->urlAuthorize);
        $this->state = \Ramsey\Uuid\Uuid::uuid4();
        $uri->setQueryArray([
            'client_id' => env('GITHUB_CLIENT_ID'),
            'scope' => $this->scope,
            'state' => (string) $this->state,
            'redirect_uri' => $this->redirect_uri,
        ]);

        return (string) $uri;
    }

    public function getAccessToken($code)
    {
        $client = \Config\Services::curlrequest([
            'user_agent' => 'CodeIgniter Framework v4',
            'connect_timeout' => 0,
            'baseURI' => 'https://github.com',
            'headers' => [
                'Accept'     => 'application/json',
            ],
        ]);
        $param = [
            'client_id' => env('GITHUB_CLIENT_ID'),
            'client_secret' => env('GITHUB_CLIENT_SECRET'),
            'code' => $code,
        ];

        $response = $client->request('POST', 'login/oauth/access_token', ['json' => $param]);
        $responseBody = json_decode($response->getBody());

        if ($responseBody->error ?? false) {
           
            throw new \ErrorException($responseBody->error_description);
        }

       
        return (string) $responseBody->access_token;
    }
}
