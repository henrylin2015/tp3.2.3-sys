<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">
    <title><?php echo ($title); ?>|用户管理</title>
    <!--common-->
    <link href="/tp3.2.3/Public/admin/css/style.css" rel="stylesheet">
    <link href="/tp3.2.3/Public/admin/css/style-responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/tp3.2.3/Public/admin/js/html5shiv.js"></script>
      <script src="/tp3.2.3/Public/admin/js/respond.min.js"></script>
    <![endif]-->
    <!-- page use css -->
    
  </head>
  <body class="sticky-header">
    <section>
      <!-- left side start-->
      <div class="left-side sticky-left-side">
        <!--logo and iconic logo start-->
        <div class="logo">
          <a href="index.html"><img src="/tp3.2.3/Public/admin/images/logo.png" alt=""></a>
        </div>
        <div class="logo-icon text-center">
          <a href="index.html"><img src="/tp3.2.3/Public/admin/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->
        <div class="left-side-inner">
          <!-- visible to small devices only -->
          <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media logged-user">
              <img alt="" src="/tp3.2.3/Public/admin/images/photos/user-avatar.png" class="media-object">
              <div class="media-body">
                <h4><a href="#">John Doe</a></h4>
                <span>"Hello There..."</span>
              </div>
            </div>
            <h5 class="left-nav-title">Account Information</h5>
            <ul class="nav nav-pills nav-stacked custom-nav">
              <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
          </div>
          <!--sidebar nav start-->
          <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="menu-list"><a href="#"><i class="fa  fa-folder-open"></i> <span>系统功能</span></a>
              <ul class="sub-menu-list">
                <li><a href="<?php echo U('Admin/Config/group');?>"><i class="fa   fa-wrench"></i> 系统设置</a></li>
                <li><a href="<?php echo U('Admin/Nav/index');?>"><i class="fa   fa-folder"></i> 导航管理</a></li>
                <li><a href="leftmenu_collapsed_view.html"><i class="fa   fa-folder"></i> 配置管理</a></li>
                <li><a href="horizontal_menu.html"><i class="fa   fa-upload"></i> 上传管理</a></li>
              </ul>
            </li>
            <li class="menu-list"><a href="#"><i class="fa  fa-folder-open"></i> <span>系统权限</span></a>
              <ul class="sub-menu-list">
                <li><a href="<?php echo U('Admin/User/index');?>"><i class="fa   fa-wrench"></i> 用户管理</a></li>
                <li><a href="<?php echo U('Admin/Access/index');?>"><i class="fa   fa-folder"></i> 管理员管理</a></li>
                <li><a href="leftmenu_collapsed_view.html"><i class="fa   fa-folder"></i> 用户组管理</a></li>
              </ul>
            </li>
            <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>
          </ul>
          <!--sidebar nav end-->

        </div>
      </div>
      <!-- left side end-->
      
      <!-- main content start-->
      <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

          <!--toggle button start-->
          <a class="toggle-btn"><i class="fa fa-bars"></i></a>
          <!--toggle button end-->

          <!--search start-->
          <form class="searchform" action="index.html" method="post">
            <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
          </form>
          <!--search end-->

          <!--notification menu start -->
          <div class="menu-right">
            <ul class="notification-menu">
              <li>
                <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge">5</span>
                </a>
              </li>
              <li>
                <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="badge">4</span>
                </a>
              </li>
              <li>
                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <img src="/tp3.2.3/Public/admin/images/photos/user-avatar.png" alt="" />
                  John Doe
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                  <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                </ul>
              </li>

            </ul>
          </div>
          <!--notification menu end -->

        </div>
        <!-- header section end-->
        <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <!--breadcrumbs start -->
                <ul class="breadcrumb panel">
                    
	<li>系统</li>
	<li>系统权限</li>
	<li>管理员管理</li>

                </ul>
                <!--breadcrumbs end -->
            </div>
        </div>
	  
	<section class="panel">
		<div class="panel-body">
			<div class="row">
				<div class="col-xs-12 col-sm-8">
					<div class="form-group">
                        <a title="新增" class="btn btn-success" href="/lyadmin/admin.php?s=/Admin/User/add.html">新增</a>&nbsp;
                        <a title="启用" target-form="ids" class="btn btn-info" model="User" href="/lyadmin/admin.php?s=/Admin/User/setStatus/status/resume/model/User.html">启用</a>&nbsp;<a title="禁用" target-form="ids" class="btn btn-warning" model="User" href="/lyadmin/admin.php?s=/Admin/User/setStatus/status/forbid/model/User.html">禁用</a>&nbsp;<a title="删除" target-form="ids" class="btn btn-danger" model="User" href="/lyadmin/admin.php?s=/Admin/User/setStatus/status/delete/model/User.html">删除</a>&nbsp;                    </div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<form class="" method="post">
						<div class="input-group m-bot15">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                             <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<table class="table table-bordered">
						<tr>
                            <th><input class="check-all" type="checkbox"></th>
                            <th>ID</th>
                            <th>UID</th>
                            <th>用户名</th>
                            <th>用户组</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        <tr>
							<td><input class="ids" type="checkbox" value="1" name="ids[]"></td>
							<td></td>
							<td>1</td> 
							<td>admin</td>
							<td>超级管理员</td>
							<td><i class="fa fa-check text-success"></i></td>
							<td>
							<a name="edit" title="编辑" class="label label-primary-outline label-pill" href="/lyadmin/admin.php?s=/Admin/Access/edit/id/1.html">编辑</a>
							<a name="forbid" title="禁用" class="label label-warning-outline label-pill ajax-get confirm" href="/lyadmin/admin.php?s=/Admin/Access/setStatus/status/forbid/ids/1/model/Access.html">禁用</a>
							<a name="delete" title="删除" class="label label-danger-outline label-pill ajax-get confirm" model="Access" href="/lyadmin/admin.php?s=/Admin/Access/setStatus/status/delete/ids/1/model/Access.html">删除</a>
							</td>  
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="sticky-footer">
          版权所有 © 2014-2016
        </footer>
        <!--footer section end-->
      </div>
      <!-- main content end-->
    </section>

    <!-- Placed js at the end of the document so the pages load faster -->
    <script src="/tp3.2.3/Public/admin/js/jquery-1.10.2.min.js"></script>
    <script src="/tp3.2.3/Public/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="/tp3.2.3/Public/admin/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/tp3.2.3/Public/admin/js/bootstrap.min.js"></script>
    <script src="/tp3.2.3/Public/admin/js/modernizr.min.js"></script>
    <script src="/tp3.2.3/Public/admin/js/jquery.nicescroll.js"></script>
    <!--common scripts for all pages-->
    <script src="/tp3.2.3/Public/admin/js/scripts.js"></script>
    <!-- page use script -->
    
  </body>
</html>