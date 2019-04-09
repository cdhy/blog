@extends('admin.layout.main')

@section('title','文章列表')

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
        <li><a href="#">内容管理</a></li>
        <li class="active">分类</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <h4>所有文章</h4>
        </div>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
@endsection

