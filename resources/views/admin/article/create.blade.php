@extends('admin.layout.main')

@section('style')
<!-- iCheck style -->
<link rel="stylesheet" href="{{asset('vendor/iCheck/square/green.css')}}">
<!-- image-picker -->
<link rel="stylesheet" href="{{asset('vendor/image-picker/image-picker.css')}}">
<!-- Bootstrap select -->
<link rel="stylesheet" href="{{asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
<!-- Ueditor -->
<script src="{{asset('vendor/ueditor1.4.3.3/ueditor.config.js')}}"></script>
<script src="{{asset('vendor/ueditor1.4.3.3/ueditor.all.min.js')}}"></script>
<script src="{{asset('vendor/ueditor1.4.3.3/lang/zh-cn/zh-cn.js')}}"></script>
@endsection

@section('title','新建文章')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 面板</a></li>
            <li>文章</li>
            <li class="active">新建文章</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="box box-default">
                    <form action="{{route('adminArticleStore')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body pad">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="inputAritcleTitle" class="col-sm-3 control-label">标题:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control" id="inputAritcleTitle" placeholder="请输入文章标题">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAritcleSubTitle" class="col-sm-3 control-label">副标题:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="subtitle" class="form-control" id="inputAritcleSubTitle" placeholder="请输入文章副标题">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="selectArticleCategor" class="col-sm-3 control-label">分类:</label>
                                    <div class="col-sm-9">
                                        <select name="category" class="form-control" id="selectArticleCategor">
                                            {{!!$options!!}}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">封面:</label>
                                    <div class="col-sm-9">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-group-xs" onclick="nocover()">无封面</button>
                                            <button type="button" class="btn btn-default btn-group-xs" onclick="defaultcover()">默认</button>
                                            <button type="button" class="btn btn-default btn-group-xs" data-toggle="modal" data-target="#coverBrower">浏览</button>
                                            <button type="button" class="btn btn-default btn-group-xs" onclick="uploadcover()">上传</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <div class="coverPreview">
                                            <img src="{{asset('assets/image/artcover/demo.jpg')}}" width="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade in" id="coverBrower" tabindex="-1" role="dialog" aria-labelledby="Cover Browser">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title text-center">文章封面浏览</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12">
                                                        <select name="cover">
                                                            <option value="1" data-img-src="{{asset('assets/image/artcover/architecture.jpg')}}" data-img-class="first" data-img-alt="architecture"> architecture </option>
                                                            <option value="2" data-img-src="{{asset('assets/image/artcover/xiagu.jpg')}}" data-img-alt="xiagu"> xiagu</option>
                                                            <option value="3" data-img-src="{{asset('assets/image/artcover/butterfly.jpg')}}" data-img-alt="butterfly"> butterfly</option>
                                                            <option value="4" data-img-src="{{asset('assets/image/artcover/xiyang.jpg')}}" data-img-alt="xiyang"> xiyang</option>
                                                            <option value="5" data-img-src="{{asset('assets/image/artcover/dais.jpg')}}" data-img-alt="dais"> dais</option>
                                                            <option value="6" data-img-src="{{asset('assets/image/artcover/dandelion.jpg')}}" data-img-alt="dandelion"> dandelion</option>
                                                            <option value="7" data-img-src="{{asset('assets/image/artcover/dandelion2.jpg')}}" data-img-alt="dandelion2"> dandelion2</option>
                                                            <option value="8" data-img-src="{{asset('assets/image/artcover/eiffel-towe.jpg')}}" data-img-alt="eiffel-towe"> eiffel-towe</option>
                                                            <option value="9" data-img-src="{{asset('assets/image/artcover/fire.jpg')}}" data-img-alt="fire"> fire</option>
                                                            <option value="10" data-img-src="{{asset('assets/image/artcover/flower2.jpg')}}" data-img-alt="flower2">flower2 </option>
                                                            <option value="11" data-img-src="{{asset('assets/image/artcover/flowers.jpg')}}" data-img-alt="flowers">flowers</option>
                                                            <option value="12" data-img-src="{{asset('assets/image/artcover/gleise.jpg')}}" data-img-alt="gleise"> gleise</option>
                                                            <option value="13" data-img-src="{{asset('assets/image/artcover/home.jpg')}}" data-img-alt="home"> home</option>
                                                            <option value="14" data-img-src="{{asset('assets/image/artcover/landscap.jpg')}}" data-img-alt="landscap">landscap</option>
                                                            <option value="15" data-img-src="{{asset('assets/image/artcover/live-concert.jpg')}}" data-img-alt="live-concert"> live-concert/option>
                                                            <option value="16" data-img-src="{{asset('assets/image/artcover/livingroom.jpg')}}" data-img-alt="livingroom"> livingroom</option>
                                                            <option value="17" data-img-src="{{asset('assets/image/artcover/louvre.jpg')}}" data-img-alt="louvre"> louvre</option>
                                                            <option value="18" data-img-src="{{asset('assets/image/artcover/man.jpg')}}" data-img-alt="man"> man</option>
                                                            <option value="19" data-img-src="{{asset('assets/image/artcover/wind.jpg')}}" data-img-alt="wind"> wind</option>
                                                            <option value="20" data-img-src="{{asset('assets/image/artcover/marriage.jpg')}}" data-img-alt="marriage">marriage </option>
                                                            <option value="21" data-img-src="{{asset('assets/image/artcover/road.jpg')}}" data-img-alt="road">road </option>
                                                            <option value="22" data-img-src="{{asset('assets/image/artcover/road2.jpg')}}" data-img-alt="road2">road2</option>
                                                            <option value="23" data-img-src="{{asset('assets/image/artcover/rose.jpg')}}" data-img-alt="rose"> rose</option>
                                                            <option value="25" data-img-src="{{asset('assets/image/artcover/sea.jpg')}}" data-img-alt="sea"> sea</option>
                                                            <option value="26" data-img-src="{{asset('assets/image/artcover/sky.jpg')}}" data-img-alt="sky">sky </option>
                                                            <option value="27" data-img-src="{{asset('assets/image/artcover/smartphone.jpg')}}" data-img-alt="smartphone"> smartphone</option>
                                                            <option value="28" data-img-src="{{asset('assets/image/artcover/stained-glass.jpg')}}" data-img-alt="stained-glass"> stained-glass</option>
                                                            <option value="29" data-img-src="{{asset('assets/image/artcover/street1.jpg')}}" data-img-alt="street1"> street1</option>
                                                            <option value="30" data-img-src="{{asset('assets/image/artcover/tree.jpg')}}" data-img-alt="tree"> tree</option>
                                                            <option value="31" data-img-src="{{asset('assets/image/artcover/sun.jpg')}}" data-img-alt="sun"> sun</option>
                                                            <option value="32" data-img-src="{{asset('assets/image/artcover/sunset.jpg')}}" data-img-alt="sunset"> sunset</option>
                                                            <option value="33" data-img-src="{{asset('assets/image/artcover/traffic.jpg')}}" data-img-alt="traffic"> traffic</option>
                                                            <option value="34" data-img-src="{{asset('assets/image/artcover/audience.jpg')}}" data-img-alt="audience"> audience </option>
                                                            <option value="35" data-img-src="{{asset('assets/image/artcover/california.jpg')}}" data-img-alt="california"> california</option>
                                                            <option value="36" data-img-src="{{asset('assets/image/artcover/street2.jpg')}}" data-img-alt="street2"> street2</option>
                                                            <option value="37" data-img-src="{{asset('aassets/image/artcover/marguerit.jpg')}}" data-img-alt="marguerit"> marguerit</option>
                                                            <option value="24" data-img-src="{{asset('assets/image/artcover/roses.jpg')}}" data-img-alt="roses"> roses</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">关闭</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">属性:</label>
                                    <div class="col-sm-9">
                                        <div class="checkbox-inline">
                                            <label>
                                                <input type="checkbox" name="isindex" value="1" checked="checked"> 首页
                                            </label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label>
                                                <input type="checkbox" name="ishot" value="1"> 热门
                                            </label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label>
                                                <input type="checkbox" name="isrecommend" value="1"> 推荐
                                            </label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <label>
                                                <input type="checkbox" name="isslider" value="1"> 幻灯片
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAritcleKeyword" class="col-sm-3 control-label">关键字:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="keywords" class="form-control" id="inputAritcleKeyword" placeholder="请输入文章关键字">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAritcleTag" class="col-sm-3 control-label">标签</label>
                                    <div class="col-sm-9">
                                        <select name="tag" id="">
                                            <option value="1">php</option>
                                            <option value="2">apache</option>
                                            <option value="3">mysql</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAritcleSlug" class="col-sm-3 control-label">Slug</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="slug" class="form-control" id="inputAritcleSlug" placeholder="请输入文章Slug">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="articleIntro" class="col-sm-3 control-label">简介:</label>
                                    <div class="col-sm-9">
                                        <textarea name="intro" id="articleIntro" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label for="editor" class="control-label">内容:</label>
                                        <script id="editor" name="content" type="text/plain" style="height:500px;"></script>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-12 col-sm-12 text-center">
                                    <input type="submit" value="保存" class="btn btn-success btn-sm"> &nbsp;&nbsp;&nbsp;
                                    <input type="reset" value="重填" class="btn btn-warning btn-sm">
                        </div>
                    </form>
                    <div class="box-footer clearfix">
                </div>
            </div>
                    <!-- /.box -->
                    </div>
                    <!-- ./col-md-12 -->
                </div>
                <!-- /.row -->
            </section>
        <!-- /.content -->
    </div>
<!-- /.content-wrapper -->
@endsection
@section('script')
<script src="{{asset('vendor/iCheck/icheck.min.js')}}"></script>
<script src="{{asset('vendor/image-picker/image-picker.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-select/js/i18n/defaults-zh_CN.min.js')}}"></script>

<script>
var ue = UE.getEditor('editor');
//设置无封面
function nocover() {
    $('select[name*=cover]').attr("disabled", false); //移除select 的disabled属性
    var opt = '<option value="none" selected >none cover</option>';
    $("select[name*=cover]").append(opt);
    $('.coverPreview').html("<img src='{{asset("assets/image/artcover/none.jpg")}}'  width='200'>");
}

//设置默认封面
function defaultcover() {
    $('select[name*=cover]').attr("disabled", false); //移除select 的disabled属性
    var opt = '<option value="default" selected >default cover</option>';
    $("select[name*=cover]").append(opt);
    $('.coverPreview').html("<img src='{{asset('assets/image/artcover/default.jpg')}}' width='200'>");
}

//上传封面
function uploadcover() {
    var inp = "<img src='{{asset("assets/image/artcover/none.jpg")}}' width='200'><input type='file' name='cover'>";
    $('.coverPreview').html(inp);
    $('select[name*=cover]').attr("disabled", true); //为select添加disabled属性
    $('input[type*="file"]').on('change', function() {
        $('.coverPreview img').attr('src', URL.createObjectURL($(this)[0].files[0]));
    });
}

$("select[name*=cover]").imagepicker({
    // show_label: true,
    selected: function(s, o) {
        //移除上传函数添加的disabled属性
        $('select[name*=cover]').attr("disabled", false);
        //获取s对像的option数组的第一个元素的data-img-src属性值
        var img_src = s.option[0].getAttribute('data-img-src')
        $('.coverPreview').html('<img src="' + img_src + '"  width="200"/>');
        // console.log(s.option[0].getAttribute('data-img-src'));
        // console.log(s.option[0].getAttribute('value'));
    },
})

//属性美化
$('input[type*=checkbox]').iCheck({
    handle: 'checkbox',
    checkboxClass: 'icheckbox_square-green',
    increaseArea: '20%' // optional
});

$('#selectArticleCategor').selectpicker();
</script>
@endsection
