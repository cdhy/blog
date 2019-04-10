<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $all = Category::where('status',1)->orderBy('order','asc')->get();
        $data =  Category::CategoryOfList($all);
        $perPage = 18;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $col = new Collection($data);
        $currentPageSearchResults = $col->slice(($currentPage-1) * $perPage,$perPage)->all();
        $entries = new LengthAwarePaginator($currentPageSearchResults,count($col),$perPage);
        $entries->setPath($request->url);

        return view('admin.category.index',['data'=>$entries]);
    }

    public function create()
    {
        $options = Category::CategoryOfOption();
    	return view('admin.category.create',['options'=>$options]);
    }

    //创建新分类保存方法
    public function store(Request $request)
    {
        $cate = new Category();
        if ($request->method() == 'POST'){
            $data = $request->input('data');
                        foreach($data as $k => $v){
                $cate->$k = $v;
            }
//            dd($data);
            if ($cate->save()){
                return redirect()->back()->with('success',$data['name'].'添加成功!');
            }else{
                return redirect()->back();
            }
        }
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

    public function jsonShow()
    {
        $all = Category::where('status',1)->Orderby('order','asc')->get(['id','name','pid'])->toArray();
        $data = Category::CategoryOfSun($all);
        return  response()->json($data);
    }

}
