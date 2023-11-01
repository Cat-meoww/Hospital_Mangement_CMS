<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\Message;

class Is_agent implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here

        if (!session()->has('user_role') || session()->user_role != 2) {
            session()->setFlashdata('warn', 'Please sign in access');
            session()->setFlashdata('reason', 'Unauthorized! ');
            return redirect()->to('/?status=unauthorized');
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
