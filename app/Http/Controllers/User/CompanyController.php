<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class CompanyController extends Controller {
    public function index()
    {
        return view("user.company.index");
    }

    public function edit()
    {
        return view("user.company.edit");
    }
}