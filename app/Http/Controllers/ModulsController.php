<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulsController extends Controller
{
    public function index()
    {
        return view('admin.moduls');
    }
}
