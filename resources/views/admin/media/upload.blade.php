@extends('admin.layout.main')

@section('title','媒体管理')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 面板</a></li>
                <li><a href="#">内容</a></li>
                <li>文件</li>
                <li class="active">文件上传</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">

                </div>
                <div class="box-body">
                    <form action="{{route('adminMediaStore')}}" method="POST" enctype="multipart/form-data">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="form-group">
                                <label for="" class="control-label col-sm-3">请选择文件类型:</label>
                                <div class="col-sm-9">
                                    <select name="type" id="">
                                        <option value="fcover">文章封面</option>
                                        <option value="cover">分类封面</option>
                                        <option value="apic">图片</option>
                                        <option value="zip">压缩文件</option>
                                        <option value="pro">程序文件</option>
                                        <option value="doc">文档</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9">
                                    <input type="file" name="upload">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function () {
            $('.sidebar-menu').tree()
        })
    </script>
@endsection
