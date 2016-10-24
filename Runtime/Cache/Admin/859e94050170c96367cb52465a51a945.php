<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">
    <title><?php echo ($title); ?>|后台管理</title>
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
                <li><a href="boxed_view.html"><i class="fa   fa-folder"></i> 导航管理</a></li>
                <li><a href="leftmenu_collapsed_view.html"><i class="fa   fa-folder"></i> 配置管理</a></li>
                <li><a href="horizontal_menu.html"><i class="fa   fa-upload"></i> 上传管理</a></li>
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

        <!-- page heading start-->
        <div class="page-heading">
          <ul class="breadcrumb">
	    
  <li>首页</li>

          </ul>
        </div>
        <!-- page heading end-->
        <!--body wrapper start-->
        <div class="wrapper">
	  
  <div class="row">
    <div class="col-md-6">
      <div class="panel">
	<div class="panel-heading">
	  <span class="fa fa-gear (alias)">系统信息</span>
	</div>
	<div class="panel-body">
	  <table class="table">
	    <tbody>
              <tr>
                <td>lyadmin版本</td>
                <td>
		  <?php echo C('PRODUCT_NAME');?>版本
                </td>
              </tr>
              <tr>
                <td>产品型号</td>
                <td>xxxx</td>
              </tr>
              <tr>
                <td>ThinkPHP版本</td>
                <td>3.2.3</td>
              </tr>
              <tr>
                <td>服务器操作系统</td>
                <td>Darwin</td>
              </tr>
              <tr>
                <td>运行环境</td>
                <td>Apache</td>
              </tr>
              <tr>
                <td>PHP版本</td>
                <td>5.6.2</td>
              </tr>
              <tr>
                <td>MYSQL版本</td>
                <td>5.6.27</td>
              </tr>
              <tr>
                <td>上传限制</td>
                <td>32M</td>
              </tr>
            </tbody>
	  </table>
	</div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel">
	<div class="panel-heading"><span class="fa  fa-group (alias)">产品团队</span></div>
	<div class="panel-body">
	  <table class="table">
	    <tbody>
              <tr>
                <td>网站标题</td>
                <td>lyadmin</td>
              </tr>
              <tr>
                <td>项目开发</td>
                <td>南京科斯克网络科技有限公司</td>
              </tr>
              <tr>
                <td>官方网址</td>
                <td><a href="http://lyadmin.lyunweb.com">http://lyadmin.lyunweb.com</a></td>
              </tr>
              <tr>
                <td>公司地址</td>
                <td>南京市鼓楼区广东路38号</td>
              </tr>
              <tr>
                <td>核心团队</td>
                <td>江如意、赵瀚卿、张玥、潘美红、赵川...</td>
              </tr>
              <tr>
                <td>官方QQ群</td>
                <td>
                  <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=9e5c6b98cf3bb4265bd6031b25f236cc4c7e596c31612b50d98b5e099cc3d246"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="lyadmin通用后台" title="lyadmin通用后台"></a>
                </td>
              </tr>
              <tr>
                <td>联系我们</td>
                <td>admin@lingyun.net</td>
              </tr>
            </tbody>
	  </table>
	</div>
      </div>
    </div>
  </div>

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