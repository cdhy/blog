@extends('admin.layout.main')

@section('title','文章列表')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> 面板</a></li>
        <li><a href="#">内容管理</a></li>
        <li>文章</li>
        <li class="active">文章列表</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
          <div class="box-header">
              {{--<h3 class="box-title">所有分类</h3>--}}
              <div class="box-tools">
                  <div class="input-group input-group-sm" >
                      <a  class='btn  btn-success btn-sm' href="{{route('adminArticleCreate')}}"><i class="fa fa-plus-square"></i> 新建文章</a>
                  </div>
              </div>
          </div>
          <!-- /.box-header -->
        <div class="box-body">

        </div>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
@endsection

