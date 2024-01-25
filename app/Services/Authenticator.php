<?php

namespace App\Services;

use OTPHP\TOTP;


class Authenticator
{
    public function sendOTP(&$user)
    {
        $secret = $this->getUserSecret($user);

        return $this->generateOTP($secret, $user['email']);


       
    }


    protected function getUserSecret(&$user)
    {
        // if user has a secret
        if ($user['authenticator_secret']) {
            return $user['authenticator_secret'];
        }


        // user doesn't we create one for the user
        $otp = TOTP::create();
        $secret = $otp->getSecret();


        $Usermodal = new \App\Models\UserModel();

        $Usermodal->where('id', $user['id'])->set(['authenticator_secret' => $secret])->update();

        return $secret;
    }



    protected function generateOTP(string $secret, &$Issuer)
    {
        $timestamp = time();

        $otp = TOTP::create($secret);

        $code = $otp->at($timestamp);

        $otp->setLabel($Issuer);
        $otp->setIssuer(env('app.name'));


        return $otp->getProvisioningUri();
    }




    public function verifyOTP(&$user, string &$code)
    {
        $secret = $this->getUserSecret($user);

        $timestamp = time();

        $otp = TOTP::create($secret);

        $res = $otp->verify($code, $timestamp);

        return $res;
    }
}
