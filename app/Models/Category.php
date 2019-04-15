<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Category extends Model
{
    use Notifiable;

    protected $table = 'categories';

    protected $fillable = [
        'name','pid','type','template','alias','class','cover','view','order','isnav','status'
    ];

     public function article()
    {
        return $this->hasMany('App\Models\Article', 'id');
    }

    public static function CategoryOfOption($selected=0)
    {
        $arr = Category::where('status',1)->orderBy('order','desc')->get(['id','name','pid'])->toArray();
        $arr = subTree($arr);
        $data = categoryToOption($arr,$selected);
        return $data;
    }



    public static function CategoryOfSun($arr, $pid = 0)
    {
//       dd($arr);
        $tree = array();
        foreach ($arr as $v) {
            $v['text'] = '[ID:'.$v['id'].'] '.$v['name'];

            if ($v['pid'] == $pid) {
                $v['children'] = self::CategoryOfSun($arr, $v['id']);
                if ($v['children'] == null) {
                    unset($v['children']);
                }

                if (isset($v['children'])) {
                    $v['state'] = ['opened' => true];
                }

                $tree[] = $v;
            }
        }
        return $tree;
    }
    public static function getCategoryByPid($pid = 0)
    {
        $res = Category::where('pid', $pid)
            ->where('status',10)
            ->orderBy('order', 'asc')
            ->get();
        return $res;
    }

    public static function CategoryOfList($obj, $pid = 0, $lev = 0)
    {
        static $data = array();
        foreach ($obj as $v) {
            if ($v->pid == $pid) {
                $v->lev   = $lev;
                if ($pid == 0){
                    $v->_name = '|-' . $v->name;
                }
                $v->_name =  '|-' .str_repeat("---", $lev) . $v->name;
                $data[]   = $v;
                self::CategoryOfList($obj, $v->id, $lev + 1);
            }
        }
        return $data;
    }
}
