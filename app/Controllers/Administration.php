<?php

namespace App\Controllers;

class Administration extends BaseController
{
    public function index()
    {
        return view('adminlogin-view');
    }
    public function register()
    {
        return view('adminregister-view');
    }
}
