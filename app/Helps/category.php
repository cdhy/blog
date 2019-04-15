<?php
//以下拉选项的形式展示子孙树
if (!function_exists('CategoryOfOption')){
    function categoryToOption($arr,$selected=0){
        $data = subTree($arr);
        $option = '<option value="0">|--顶级分类</option>';
        foreach ($data as $k => $v) {
            if ($selected == $v['id']) {
                $option .= '<option value="' . $v['id'] . '" selected >' .'|--'. str_repeat('--', $v['lev']) . $v['name'] . '</option>';
                continue;
            }
            $option .= '<option value="' . $v['id'] . '">'.'|--'. str_repeat('--', $v['lev']) . $v['name'] . '</option>';
        }
        return $option;
    }
}

//子孙树
if (!function_exists('subTree')){
    function subTree($arr, $pid = 0, $lev = 0)
    {
        static $data = array();
        foreach ($arr as $v) {
            if ($v['pid'] == $pid) {
                $v['lev'] = $lev;
                $data[]   = $v;
                subTree($arr, $v['id'], $lev + 1);
            }
        }
        return $data;
    }
}


//显示分类
if (!function_exists('displayCategory')){
    function displayCategory($obj, $pid = 0, $lev = 0)
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
                displayCategory($obj, $v->id, $lev + 1);
            }
        }
        return $data;
    }
}
?>
