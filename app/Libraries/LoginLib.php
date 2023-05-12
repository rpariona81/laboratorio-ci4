<?php

namespace App\Libraries;

use App\Models\RoleModel;
use App\Models\UserModel;

class LoginLib
{
    protected $user;
    protected $role;
    protected $model;
    public $db;
    public $session;

    public $is_logged;


    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session = session();
        $this->is_logged = [];
    }
    
    public function getLoginUser($username, $pass)
    {
        //helper('url');
        //echo base_url();
        //redirect()->to(base_url('admin'),null, 'refresh');
        //return redirect()->route('admin',[], 200,'get');
        //return redirect()->to('/');

        //return redirect()->route('www.google.com');
        $model = model('UserModel');
        $user = $model->getUserBy('username', $username);
        //$user = $model->findAll();
        //dd($user);
        if(!$user){
            //echo 'no existe usuario';
            $this->is_logged['check'] = false;
            /*return redirect()->to(base_url('/wp-login'))->with('msg',*/
            $this->is_logged['msg'] = 
                [
                    'type' => 'danger',
                    'body' => 'Este nombre de usuario no está registrado.'
                ];
        }else{
            //echo $user['password'];
            if (!(password_verify($pass, $user['password']))) {
                //echo 'Password is invalid!';
                //$this->session->setTempData('error','Error de contraseña.');
                //return redirect()->to(current_url());
                //return $isLoggedIn;
                $this->is_logged['check'] = false;
                $this->is_logged['msg'] = 
                [
                    'type' => 'danger',
                    'body' => 'Error de contraseña.'
                ];
            } else {
                //echo 'Valid password.';
                $model = model('RoleModel');
                $role = $model->find($user['role_id']);
                //dd($role);
                $this->session->set('userdata',[
                    'username'  => $user['username'],
                    'user_id'   => $user['id'],
                    'role'   => $role['rolename'],
                    'role_id'   => $role['id'],
                    'email'   => $user['email']
                    ]
                );
                $this->session->set('isLoggedIn', true);
                //dd($this->session->userdata['role']);
                //dd($this->session->userdata);
                //dd(session()->userdata['role']);
                //dd($this->session->isLoggedIn);
                $this->is_logged['check'] = true;
                $this->is_logged['msg'] = 
                [
                    'type' => 'success',
                    'body' => 'Bienvenido(a).'
                ];
            }
        }
        return $this->is_logged; 
        
    }
    
}
