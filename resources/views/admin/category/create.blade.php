@extends('admin.layout.main')
@section('style')
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('vendor/iCheck/all.css')}}">
<!-- Bootstrap-select -->
<link rel="stylesheet" href="{{asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
<!-- jstree sytle -->
<link rel="stylesheet" href="{{asset('vendor/jstree/themes/proton/style.min.css')}}">
@endsection
@section('title','添加分类')
@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            分类
            <small>分类列表</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 面板</a></li>
            <li>分类</li>
            <li class="active">添加分类</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="col-md-6">
            <div class="box box-info">
                <!-- form start -->
                <form method="POST" action="{{route('adminCategoryStore')}}" class="form-horizontal">
                  {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="catetgoryParent" class="col-sm-2 control-label w80">父分类</label>
                            <div class="col-sm-10">
                                <select name="data[pid]" id="catetgoryParent" class="form-control">
                                    {{!!$options!!}}
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCatetgoryName" class="col-sm-2 control-label w80">分类名</label>
                            <div class="col-sm-10">
                                <input type="text" name="data[name]" class="form-control" id="inputCatetgoryName" placeholder="分类名">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCatetgoryAlias" class="col-sm-2 control-label w80">别名</label>
                            <div class="col-sm-10">
                                <input type="text"  name="data[alias]" class="form-control" id="inputCatetgoryAlias" name="slug" placeholder="Category Slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="catetgoryType" class="col-sm-2 control-label w80">类型</label>
                            <div class="col-sm-8">
                                <div class="radio-inline" id="catetgoryType">
                                    <label>
                                        <input type="radio"  name="data[type]" value="category" checked="checked"> 分类
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="data[type]" value="cover"> 封面
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="data[type]" value="special"> 专题
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="catetgoryTemplate" class="col-sm-2 control-label w80">模版</label>
                            <div class="col-sm-10">
                                <input type="text" name="data[template]" id="catetgoryTemplate" class="form-control" placeholder="list.blade.php">
                                {{--<select name="data[template]" id="catetgoryTemplate" class="form-control">--}}
                                    {{--<option value="list.blade.php">list.blade.php</option>--}}
                                    {{--<option value="cover.blade.php">cover.blade.php</option>--}}
                                    {{--<option value="1special.blade.php">specail.blade.php</option>--}}
                                {{--</select>--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="catetgoryeClass" class="col-sm-2 control-label w80">样式</label>
                            <div class="col-sm-10">
                                <input type="text" name="data[class]" id="catetgoryeClass" class="form-control" placeholder="分类样式">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="catetgoryeCover" class="col-sm-2 control-label w80">封面</label>
                            <div class="col-sm-10">
                                <input type="text" name="data[cover]" id="catetgoryeCover" class="form-control" placeholder="分类封面">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="catetgoryeClass" class="col-sm-2 control-label w80">查看次数</label>
                            <div class="col-sm-10">
                                <input type="number" name="data[view]" value="0" id="catetgoryeClass" class="form-control" placeholder="分类样式">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCatetgoryDesc" class="col-sm-2 control-label w80">描述</label>
                            <div class="col-sm-10">
                                <input type="text" name="data[desc]" class="form-control" id="inputCatetgoryDesc" placeholder="分类描述">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCatetgoryOrder" class="col-sm-2 control-label w80">排序</label>
                            <div class="col-sm-10">
                                <input type="number" name="data[order]" value="10" class="form-control" id="inputCatetgoryOrder" placeholder="分类描述">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="catetgoryIsnav" class="col-sm-2 control-label w80">导航栏显示</label>
                            <div class="col-sm-10">
                                <div class="radio-inline" id="catetgoryIsnav">
                                    <label>
                                        <input type="radio"  name="data[isnav]" value="1" checked="checked"> 是
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="data[isnav]" value="2"> 否
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="catetgoryStatus" class="col-sm-2 control-label w80">状态</label>
                            <div class="col-sm-10">
                                <div class="radio-inline" id="catetgoryStatus">
                                    <label>
                                        <input type="radio"  name="data[status]" value="1" checked="checked"> 启用
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="data[status]" value="2"> 禁用
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">重填</button>
                        <button type="submit" class="btn btn-success pull-right">保存</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-body" >
                    <div class="listCategory" id="categoryTree"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('vendor/iCheck/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/bootstrap-select/js/i18n/defaults-zh_CN.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/jstree/jstree.min.js')}}"></script>
<script>
    $(function() {
        $('input[type="radio"]').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });

        $('.selectpicker').selectpicker();

        $.get('{{route('adminCategoryJsonShow')}}',function(data){
            $("#categoryTree").jstree({
                'core': {
                    'data':data,
                    'themes': {
                        'name': 'proton',
                        'responsive': true
                    }
                }
            });
        });

    })
</script>
@endsection
