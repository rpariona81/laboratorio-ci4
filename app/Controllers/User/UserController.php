<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
        $data = [];
        //$data['rol'] = 'docente';
        //$data['rol'] = session()->get('role');
        $data['rol'] = session()->userdata['role'];
        return view('users/home', $data);
    }

    public function verConvocatorias()
    {
        //
        return view('users/offersList');
    }

    public function verDetalle($id_convocatoria)
    {
        //
        return view('users/offerDetail');
    }

    public function postular()
    {
        //
        echo "Postulaste!!";
    }

    public function cargaCV()
    {
        //
        echo "Archivo cargado correctamente";
    }

    public function verPerfil()
    {
        //
        return view('users/miperfil');
    }
}
