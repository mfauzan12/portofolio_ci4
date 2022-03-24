<?php

namespace App\Controllers;

use App\Models\Crud_ci_m;

class Crud_ci extends BaseController
{
    public function index()
    {
        // $this->Crud_ci_m = new Model1();
        $data = [
            'title' => 'Home'
        ];
        return view('crud_ci/index.php', $data);
    }
}
