<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1"/>
  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">
  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <!--The Page Keywords-->
  <meta name="keywords" content="keywords">
  <!--The Page description-->
  <meta name="description" content="About....">
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('vendor/Ionicons/css/ionicons.min.css')}}">
  <!-- Pace style -->
  <link rel="stylesheet" href="{{asset('vendor/pace/pace.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('vendor/AdminLTE/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('vendor/AdminLTE/css/skins/_all-skins.min.css')}}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="{{asset('vendor/html5/html5shiv.min.js')}}"></script>
  <script src="{{asset('vendor/html5/respond.min.js')}}"></script>
  <![endif]-->
  @section("style")
  @show
  <link rel="stylesheet" href="{{asset('assets/css/backend.css?0.5')}}">
  <title>Blog后台管理 | @yield('title')</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  @include('admin.layout.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layout.aside')
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  @include('admin.layout.footer')
  <!-- Control Sidebar -->
  @include('admin.layout.setting')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!--[if lt IE 9]>
<script src="{{asset('vendor/jquery/query-1.12.4.min.js')}}"></script>
<![endif]-->
<!--[if (gte IE 9)!(IE)]><!-->
<script src="{{asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<!--<![endif]-->
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('vendor/fastclick/lib/fastclick.js')}}"></script>
<!--Slimscroll -->
<script src="{{asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('vendor/AdminLTE/js/adminlte.min.js')}}"></script>
<script>
    $(document).ready(function () {
      $('.sidebar-menu').tree()
        var AdminLTEOptions = {
        //启用迷你侧边栏并固定
        //如果固定布局和迷你侧边栏启用，
        //则此选项被强制为真
        sidebarExpandOnHover: true,
        //BoxRefresh 插件
        enableBoxRefresh: true,
        //Bootstrap.js 提示工具
        enableBSToppltip: true
        };
    })
</script>
@section('script')
@show
</body>
</html>
