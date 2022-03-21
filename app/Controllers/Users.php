<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        return view('users_v/index.php');
    }
}
