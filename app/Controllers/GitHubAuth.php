<?php

namespace App\Controllers;


use Config\Services;

class GitHubAuth extends BaseController
{
    public $session;
    public $data;
    public function __construct()
    {
        $this->session = session();
        $this->data['session'] = $this->session;
        $this->data['uri']  = service('uri');
    }

    public function login()
    {
        $Provider = new \App\Libraries\GithubAuth();
        $authorizationUrl  = $Provider->getAuthorizationUrl();
        $this->session->set('gh-oauth2state', $Provider->getState());
        return redirect()->to($authorizationUrl);
    }
    public function callback()
    {

        try {

            if ($error = $this->request->getVar('error')) {
                throw new \Exception((string)$error);
            }

            $state = $this->request->getVar('state');

            if ($state != $this->session->get('gh-oauth2state')) {
                throw new \Exception('Invalid state');
            }

            if (!$this->request->getGet('code')) {
                throw new \Exception('code not found');
            }




            $this->session->remove('gh-oauth2state');



            $Provider = new \App\Libraries\GithubAuth();
            $accessToken = $Provider->getAccessToken($this->request->getGet('code'));

            $GitApi = new \App\Libraries\GithubApi($accessToken);
            $user = $GitApi->GetUser();

            $emails=$GitApi->GetUserEmail();
            d($emails);
            dd($user);

            






            //d($user);

            //d($this->request);
        } catch (\Throwable $th) {
            throw $th;
            echo $th->getMessage();
        }
    }
}
