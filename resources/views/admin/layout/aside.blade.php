<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      {{--<div class="user-panel">--}}
        {{--<div class="pull-left image">--}}
          {{--<img src="{{asset('vendor/AdminLTE/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">--}}
        {{--</div>--}}
        {{--<div class="pull-left info">--}}
          {{--<p>Alexander Pierce</p>--}}
          {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
        {{--</div>--}}
      {{--</div>--}}
      <!-- search form -->
      {{--<form action="#" method="get" class="sidebar-form">--}}
        {{--<div class="input-group">--}}
          {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
          {{--<span class="input-group-btn">--}}
                {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
                {{--</button>--}}
              {{--</span>--}}
        {{--</div>--}}
      {{--</form>--}}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="@if (Route::currentRouteName() == 'adminIndex')  active @endif">
          <a href="{{route('adminIndex')}}">
            <i class="fa fa-dashboard"></i> <span>面板</span>
          </a>
        </li>
        <li class="@if (isContent(Route::currentRouteName())) active @endif  treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>内容管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="@if (isCategory(Route::currentRouteName())) active @endif"><a href="{{route('adminCategoryIndex')}}"><i class="fa fa-circle-o"></i> 分类</a></li>
            <li class="@if (isArticle(Route::currentRouteName())) active @endif"><a href="{{route('adminArticleIndex')}}"><i class="fa fa-circle-o"></i> 文章</a></li>
            <li class="@if (isTag(Route::currentRouteName())) active @endif"><a href="{{route('adminTagIndex')}}"><i class="fa fa-circle-o"></i> 标签</a></li>
            <li class="@if (isComment(Route::currentRouteName())) active @endif" ><a href="{{route('adminCommentIndex')}}"><i class="fa fa-circle-o"></i> 评论</a></li>
            <li class="@if (isAdvert(Route::currentRouteName())) active @endif" ><a href="{{route('adminAdvertIndex')}}"><i class="fa fa-circle-o"></i> 广告</a></li>
            <li class="@if (isMotto(Route::currentRouteName())) active @endif" ><a href="{{route('adminMottoIndex')}}"><i class="fa fa-circle-o"></i> 格言</a></li>
            <li class="@if (isMedia(Route::currentRouteName())) active @endif" ><a href="{{route('adminMediaIndex')}}"><i class="fa fa-circle-o"></i> 媒体</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>用户权限</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> 用户</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> 权限</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> 角色</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>网站设置</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ui_general.html"><i class="fa fa-circle-o"></i> 网站设置</a></li>
            <li><a href="ui_icons.html"><i class="fa fa-circle-o"></i> 日志</a></li>
            <li><a href="ui_buttons.html"><i class="fa fa-circle-o"></i> 备份&恢复</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
