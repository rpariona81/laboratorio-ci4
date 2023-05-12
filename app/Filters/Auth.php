<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        $uri = current_url(true);

        

        if (!session()->isLoggedIn) {
            return redirect()->to('/wp-login');
        } else {
            $role_in = session()->userdata['role'];
            if(in_array($role_in,['docente','estudiante']) && $uri->getSegment(1) == 'admin') return redirect()->to('/users');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
