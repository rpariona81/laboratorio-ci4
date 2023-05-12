<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        //
        return view('admin/dashboard');

    }

    public function verEstudiantes()
    {
        //
        return view('admin/studentsList');

    }

    public function verDocentes()
    {
        //
        return view('admin/teachersList');

    }

    public function verConvocatorias()
    {
        //
        return view('admin/vacantesList');

    }

    public function verReportePrograma()
    {
        //
        return view('admin/reportProgramas');

    }

    public function verReporteFechas()
    {
        //
        return view('admin/reportFechas');

    }
}
