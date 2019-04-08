<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
    	return view('admin.category.index');
    }

    public function create()
    {
    	return view('admin.category.create');
    }

    public function store()
    {
        
    }

    public function edit($id)
    {
    	return view('admin.category.edit');
    }

    public function show($id)
    {
        return view('admin.category.detail');
    }
    public function destory($id)
    {
        return view('admin.category.destory');
    }

}
