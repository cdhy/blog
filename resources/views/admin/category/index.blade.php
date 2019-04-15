@extends('admin.layout.main')
@section('title','分类列表')
@section('style')
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      {{--<h1>--}}
       	{{--分类--}}
        {{--<small>分类列表</small>--}}
      {{--</h1>--}}
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
              {{--<h3 class="box-title">所有分类</h3>--}}
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
							<th> 排序</th>
							<th>ID</th>
							<th>分类名</th>
							<th>样式</th>
							<th>封面</th>
							<th>类型</th>
							<th>模板</th>
							<th>查看次数</th>
							<th>操作</th>
						</tr>
						@foreach($data as $category)
						<tr>
							<td><input type="text" name="order" value="{{$category->order}}"  onchange="changeorder(this)" data-id="{{$category->id}}" style="width:40px;text-align:center"></td>
							<td>{{$category->id}}</td>
							<td>{{$category->_name}}</td>
							<td>{{$category->class}}</td>
							<td>{{$category->cover}}</td>
							<td>
								{{--{{$category->type}}--}}
								@if ($category->type == 'category')
									<span class="label label-default">分类</span>
								@elseif  ($category->type == 'cover')
									<span class="label label-info">封面</span>
								@elseif ($category->type == 'special')
									<span class="label label-success">专题</span>
								@endif
							</td>
							<td>{{$category->template}}</td>
							<td>{{$category->view}}</td>
							<td>
								<a href="" title="编辑"><i class="fa fa-pencil"></i></a>
								<a href=""  title="删除" ><i class="fa fa-recycle"></i></a>
							</td>
						</tr>
						@endforeach

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
@section('script')
    <script>
        function changeorder(obj){
            var reg =  /^([1-9]\d*|[0]{1,1})$/;
            var order = $(obj).val();
            var id = $(obj).data('id');
            if (!reg.test(order)){
                alert("请输入有效数字");
                return false;
            }
            var data= {
                'id':id,
                'order':order,
                '_token':'{{csrf_token()}}'
            };
            $.post('{{route('adminCategoryChangeOrder')}}',data,function(d){
                if (d.error){
                    window.location.href = '{{Request::getUri()}}';
                }
            });
        }
    </script>
@endsection
