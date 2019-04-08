<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MottoController extends Controller
{
    //
    public function index()
    {
        return view("admin.motto.index");
    }
}
