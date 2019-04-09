@extends('admin.layout.main')

@section('title','分类列表')
@section('style')
<link rel="stylesheet" href="{{asset('css/backend.css')}}">
@endsection

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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">所有分类</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" >
                <a  class='btn  btn-success btn-sm' href="{{route('adminCategoryCreate')}}"><i class="fa fa-plus-square"></i> 添加分类</a>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tbody>
						<tr>
							<th> <input type="checkbox" name="ids[]"></th>
							<th>ID</th>
							<th>分类名</th>
							<th>图标</th>
							<th>类型</th>
							<th>模板</th>
							<th>操作</th>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>1</td>
							<td>|-LAMP</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">分类</span></td>
							<td>default-list.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>2</td>
							<td>|-新闻</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">封面</span></td>
							<td>default-cover.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>3</td>
							<td>|----Linux</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">分类</span></td>
							<td>default-list.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>4</td>
							<td>|----php</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">分类</span></td>
							<td>default-list.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>5</td>
							<td>|----Apache</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">分类</span></td>
							<td>default-list.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>6</td>
							<td>|----MySQL</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">分类</span></td>
							<td>default-list.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>7</td>
							<td>|----科技新闻</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">封面</span></td>
							<td>default-cover.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>8</td>
							<td>|----娱乐新闻</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">封面</span></td>
							<td>default-cover.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>9</td>
							<td>|----军事新闻</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">封面</span></td>
							<td>default-cover.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="ids[]"></td>
							<td>10</td>
							<td>|----社会新闻</td>
							<td><i class="fa fa-list"></i></td>
							<td><span class="label label-success">封面</span></td>
							<td>default-cover.blade.php</td>
							<td>
								<a href="" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> 编辑</a>
								<a href="" class="btn btn-danger btn-xs"><i class="fa fa-recycle"></i> 删除</a>
							</td>
						</tr>
					</tbody>
				</table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
  </div>
@endsection

