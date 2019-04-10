<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CategoryController extends Controller
{
    //分类列表显示
    public function index(Request $request)
    {
        //查找状态为1,按order值的升序排列的分类
        $all = Category::where('status',1)->orderBy('order','asc')->get();
        //重新组合数据
        $data =  Category::CategoryOfList($all);
        //每页12条记录
        $perPage = 12;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        //重新定义集合
        $col = new Collection($data);
        $currentPageSearchResults = $col->slice(($currentPage-1) * $perPage,$perPage)->all();
        $entries = new LengthAwarePaginator($currentPageSearchResults,count($col),$perPage);
        $entries->setPath($request->url);

        return view('admin.category.index',['data'=>$entries]);
    }

    //添加分类视图
    public function create()
    {
        $options = Category::CategoryOfOption();
    	return view('admin.category.create',['options'=>$options]);
    }

    //创建新分类保存的方法
    public function store(Request $request)
    {
        $cate = new Category();
        if ($request->method() == 'POST'){
            $data = $request->input('data');
            foreach($data as $k => $v){
                //过滤掉空项
                if (empty($data[$k])){
                    $data[$k] = null;
                }
                $cate->$k = $v;
            }
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

    //添加分类后,右侧显示的结果
    public function jsonShow()
    {
        $all = Category::where('status',1)->Orderby('order','asc')->get(['id','name','pid'])->toArray();
        $data = Category::CategoryOfSun($all);
        return  response()->json($data);
    }

    //ajax个性排序
    public function changeOrder(Request $request)
    {
        $input = $request->input();
        $data = Category::find($input['id']);
        $data->order = $input['order'];

        if ($data->save()){
            $result = ['error'=>1,'msg'=>'修改成功'];
        }else{
            $result = ['error'=>1,'msg'=>'修改失败'];
        }
        return $result;
    }

}
