<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
class ArticleController extends Controller
{
    public function index()
    {
    	return view('admin.article.index');
    }

    public function create()
    {
        $options = Category::CategoryOfOption();
    	return view('admin.article.create',['options'=>$options]);
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function edit($id)
    {
    	return view('admin.article.edit');
    }

    public function update($id)
    {

    }

    public function destory($id)
    {

    }
}
