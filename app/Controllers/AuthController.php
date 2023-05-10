<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\Request;

class AuthController extends BaseController
{

    protected $helpers = ['form'];


    public function index()
    {
        //
        return view('auth/login');
    }

    public function loginUser()
    {
        //
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return view('auth/loginUser');
    }

    public function accedeUser()
    {
        if (! $this->request->is('post')) {
            return redirect()->to('/wp-login');
        }

        //$rules = [];

        /*if (! $this->validate($rules)) {
            return redirect()->to('/wp-login');
        }*/
        return redirect()->to('/users');
    }
    public function ingresaUser(Request $request)
    {
        $request->getVar(null, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $login = $this->request->getPost('login');
        $password = $this->request->getPost('password');
        //si existe la clave token oculta en el formulario y es igual
        // que la generada con el método token dejamos pasar
        //if ($this->input->post('token') && $this->input->post('token') === $this->session->userdata('token')) {
        if ($login != NULL && $password != NULL) {
            $this->form_validation->set_rules('login', 'Usuario', 'required|callback_loginok');
            $this->form_validation->set_rules('password', 'Clave', 'required');
            //si el proceso falla mostramos errores
            if ($this->form_validation->run() == FALSE) {
                $this->ingreso();
                //en otro caso procesamos los datos
            } else {
                redirect('encuestacsc/index');
                //redirect('home/index');
            }
        } else {
            redirect('home/acceso_denegado');
        }
        //}else{
        //redirect('home/acceso_denegado');
    }

    public function loginok()
    {
        $login = $this->input->post('login');
        $password = $this->input->post('password');
        return $this->usuariolib->login($login, $password);
    }

    public function loginStudent()
    {
        //
        return view('auth/loginStudent');
    }

    public function loginTeacher()
    {
        //
        return view('auth/loginTeacher');
    }

    public function loginAdmin()
    {
        //
        return view('auth/loginAdmin');
    }
}
