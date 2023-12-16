<?php

namespace App\Libraries;



class Mailer
{
    private $email;
    public function __construct()
    {
        $this->email = \Config\Services::email();
        $config = [
            'protocol' => 'smtp',
            'charset' => 'utf-8',
            'wordWrap' => false,
            'mailType' => 'html',
            'priority' => 1,
            'SMTPHost' => env('app.smtp.host'),
            'SMTPPort' => (int) env('app.smtp.port'),
            'SMTPUser' => env('app.smtp.user'),
            'SMTPPass' => env('app.smtp.password'),
            'SMTPKeepAlive' => true,
            'validate' => true,
            'SMTPCrypto' => 'ssl',
        ];
        $this->email->initialize($config);
    }

    public function send_mail($To, $Subject, $Message)
    {
        try {
            $email = $this->email;
            $email->setTo($To);
            $email->setFrom(env('app.smtp.user'), 'GEM MAILER');
            $email->setSubject($Subject);
            $email->setMessage($Message);
            if ($email->send(false)) {
                return true;
            } else {
                throw new \Exception("Something went wrong !");
            }
        } catch (\Throwable $th) {

            return false;
        }
    }
}
