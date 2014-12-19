<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8" />
<title>Menu 2</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="/futures/Public/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/futures/Public/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
<link href="/futures/Public/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/futures/Public/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
<link href="/futures/Public/media/css/style.css" rel="stylesheet" type="text/css"/>
<link href="/futures/Public/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="/futures/Public/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="/futures/Public/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<link rel="shortcut icon" href="/futures/Public/media/image/favicon.ico" />
<script>
var IMAGE = '/futures/Public/media/image';
var CSS = '/futures/Public/media/css';
var IMAGE = '/futures/Public/media/image';
</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-full-width">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="container-fluid">
      <!-- BEGIN LOGO -->
      <a class="brand" href="index.html"> <img src="/futures/Public/media/image/logo.png" alt="logo" /> </a>
      <!-- END LOGO -->
      <!-- BEGIN HORIZANTAL MENU -->
      <div class="navbar hor-menu hidden-phone hidden-tablet">
        <div class="navbar-inner">
          <ul class="nav">
            <li class="visible-phone visible-tablet">
              <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
              <form class="sidebar-search">
                <div class="input-box"> <a href="javascript:;" class="remove"></a>
                  <input type="text" placeholder="Search..." />
                  <input type="button" class="submit" value=" " />
                </div>
              </form>
              <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li> <a href="index.html"> Dashboard </a> </li>
            <li  class="active"> <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;"> <span class="selected"></span> Layouts <span class="arrow"></span> </a>
              <ul class="dropdown-menu">
                <li > <a href="layout_horizontal_sidebar_menu.html"> Horzontal & Sidebar Menu </a> </li>
                <li > <a href="layout_horizontal_menu1.html"> Horzontal Menu 1 </a> </li>
                <li class="active"> <a href="layout_horizontal_menu2.html"> Horzontal Menu 2 </a> </li>
                <li > <a href="layout_promo.html"> Promo Page </a> </li>
                <li > <a href="layout_email.html"> Email Templates </a> </li>
                <li > <a href="layout_ajax.html"> Content Loading via Ajax</a> </li>
                <li > <a href="layout_sidebar_closed.html"> Sidebar Closed Page </a> </li>
                <li > <a href="layout_blank_page.html"> Blank Page </a> </li>
                <li > <a href="layout_boxed_page.html">Boxed Page</a> </li>
                <li > <a href="layout_boxed_not_responsive.html"> Non-Responsive Boxed Layout </a> </li>
                <li class="dropdown-submenu"> <a tabindex="-1" href="javascript:;"> More options <span class="arrow"></span> </a>
                  <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="#">Second level link</a></li>
                    <li class="dropdown-submenu"> <a tabindex="-1" href="javascript:;">More options<span class="arrow"></span></a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="index.html">Third level link</a></li>
                        <li><a tabindex="-1" href="index.html">Third level link</a></li>
                        <li><a tabindex="-1" href="index.html">Third level link</a></li>
                        <li><a tabindex="-1" href="index.html">Third level link</a></li>
                        <li><a tabindex="-1" href="index.html">Third level link</a></li>
                      </ul>
                    </li>
                    <li><a tabindex="-1" href="index.html">Second level link</a></li>
                    <li><a tabindex="-1" href="index.html">Second level link</a></li>
                    <li><a tabindex="-1" href="index.html">Second level link</a></li>
                  </ul>
                </li>
              </ul>
              <b class="caret-out"></b> </li>
            <li> <a href="">Tables</a> </li>
            <li> <a data-toggle="dropdown" class="dropdown-toggle" href="">Extra <span class="arrow"></span> </a>
              <ul class="dropdown-menu">
                <li><a href="index.html">About Us</a></li>
                <li><a href="index.html">Services</a></li>
                <li><a href="index.html">Pricing</a></li>
                <li><a href="index.html">FAQs</a></li>
                <li><a href="index.html">Gallery</a></li>
                <li><a href="index.html">Registration</a></li>
                <li><a href="index.html">2 Columns (Left)</a></li>
                <li><a href="index.html">2 Columns (Right)</a></li>
              </ul>
              <b class="caret-out"></b> </li>
            <li> <span class="hor-menu-search-form-toggler">&nbsp;</span>
              <div class="search-form hidden-phone hidden-tablet">
                <form class="form-search">
                  <div class="input-append">
                    <input type="text" placeholder="Search..." class="m-wrap">
                    <button type="button" class="btn"></button>
                  </div>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- END HORIZANTAL MENU -->
      <!-- BEGIN RESPONSIVE MENU TOGGLER -->
      <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"> <img src="/futures/Public/media/image/menu-toggler.png" alt="" /> </a>
      <!-- END RESPONSIVE MENU TOGGLER -->
      <!-- BEGIN TOP NAVIGATION MENU -->
      <ul class="nav pull-right">
        <!-- BEGIN NOTIFICATION DROPDOWN -->
        <li class="dropdown" id="header_notification_bar"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-warning-sign"></i> <span class="badge">6</span> </a>
          <ul class="dropdown-menu extended notification">
            <li>
              <p>You have 14 new notifications</p>
            </li>
            <li> <a href="#">
            <span class="label label-success"><i class="icon-plus"></i></span> 
            New user registered. 
            <span class="time">Just now</span> </a>
            </li>

          </ul>
        </li>
        <!-- END NOTIFICATION DROPDOWN -->

        <!-- BEGIN USER LOGIN DROPDOWN -->
        <li class="dropdown user"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img alt="" src="/futures/Public/media/image/avatar1_small.jpg" /> <span class="username">Bob Nilson</span> <i class="icon-angle-down"></i> </a>
          <ul class="dropdown-menu">
            <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
            <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
            <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>
            <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
            <li class="divider"></li>
            <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>
            <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
          </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
      </ul>
      <!-- END TOP NAVIGATION MENU -->
    </div>
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->

<!-- BEGIN PAGE -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN EMPTY PAGE SIDEBAR -->
  <div class="page-sidebar nav-collapse collapse visible-phone visible-tablet">
    <ul class="page-sidebar-menu">
      <li class="visible-phone visible-tablet">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search">
          <div class="input-box"> <a href="javascript:;" class="remove"></a>
            <input type="text" placeholder="Search..." />
            <input type="button" class="submit" value=" " />
          </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
      </li>
      <li> <a class="active" href="index.html"> Dashboard </a> </li>
      <li  class="active"> <a href="javascript:;"> Layouts <span class="arrow open"></span> <span class="selected"></span> </a>
        <ul class="sub-menu">
          <li > <a href="layout_horizontal_sidebar_menu.html"> Horzontal & Sidebar Menu </a> </li>
          <li > <a href="layout_horizontal_menu1.html"> Horzontal Menu 1 </a> </li>
          <li class="active"> <a href="layout_horizontal_menu2.html"> Horzontal Menu 2 </a> </li>
          <li > <a href="layout_promo.html"> Promo Page </a> </li>
          <li > <a href="layout_email.html"> Email Templates </a> </li>
          <li > <a href="layout_ajax.html"> Content Loading via Ajax</a> </li>
          <li > <a href="layout_sidebar_closed.html"> Sidebar Closed Page </a> </li>
          <li > <a href="layout_blank_page.html"> Blank Page </a> </li>
          <li > <a href="layout_boxed_page.html">Boxed Page</a> </li>
          <li > <a href="layout_boxed_not_responsive.html"> Non-Responsive Boxed Layout </a> </li>
          <li> <a href="javascript:;"> More options <span class="arrow"></span> </a>
            <ul class="sub-menu">
              <li><a href="#">Second level link</a></li>
              <li> <a href="javascript:;">More options<span class="arrow"></span></a>
                <ul class="sub-menu">
                  <li><a href="index.html">Third level link</a></li>
                  <li><a href="index.html">Third level link</a></li>
                  <li><a href="index.html">Third level link</a></li>
                  <li><a href="index.html">Third level link</a></li>
                  <li><a href="index.html">Third level link</a></li>
                </ul>
              </li>
              <li><a href="index.html">Second level link</a></li>
              <li><a href="index.html">Second level link</a></li>
              <li><a href="index.html">Second level link</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li> <a href="">Tables</a> </li>
      <li> <a href="">Extra <span class="arrow"></span> </a>
        <ul class="sub-menu">
          <li><a href="index.html">About Us</a></li>
          <li><a href="index.html">Services</a></li>
          <li><a href="index.html">Pricing</a></li>
          <li><a href="index.html">FAQs</a></li>
          <li><a href="index.html">Gallery</a></li>
          <li><a href="index.html">Registration</a></li>
          <li><a href="index.html">2 Columns (Left)</a></li>
          <li><a href="index.html">2 Columns (Right)</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <!-- END EMPTY PAGE SIDEBAR -->
  <!-- BEGIN PAGE -->
  <div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>portlet Settings</h3>
      </div>
      <div class="modal-body">
        <p>Here will be a configuration form</p>
      </div>
    </div>
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3 sidebar-content ">
          <ul class="ver-inline-menu tabbable margin-bottom-25">
            <li class="active"> <a href="#tab_1" data-toggle="tab"> <i class="icon-briefcase"></i> General Questions </a> <span class="after"></span> </li>
            <li><a href="#tab_2" data-toggle="tab"><i class="icon-group"></i> Membership</a></li>
            <li><a href="#tab_3" data-toggle="tab"><i class="icon-leaf"></i> Terms Of Service</a></li>
            <li><a href="#tab_1" data-toggle="tab"><i class="icon-info-sign"></i> License Terms</a></li>
            <li><a href="#tab_2" data-toggle="tab"><i class="icon-tint"></i> Payment Rules</a></li>
            <li><a href="#tab_3" data-toggle="tab"><i class="icon-plus"></i> Other Questions</a></li>
            <li><a href="#tab_3" data-toggle="tab"><i class="icon-tasks"></i> Taks & Resources</a></li>
            <li><a href="#tab_3" data-toggle="tab"><i class="icon-user"></i> User Management</a></li>
          </ul>
          <!-- BEGIN PORTLET-->
          <div class="portlet box green">
            <div class="portlet-title line">
              <div class="caption"><i class="icon-comments"></i>Quick Form</div>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#portlet-config" data-toggle="modal" class="config"></a> </div>
            </div>
            <div class="portlet-body">
              <h4>Create Record</h4>
              <form action="#">
                <div class="input-icon left"> <i class="icon-envelope"></i>
                  <input type="text" class="m-wrap span12" placeholder="Title" />
                </div>
                <div class="input-icon left"> <i class="icon-envelope"></i>
                  <input type="password" class="m-wrap span12" placeholder="Email" />
                </div>
                <div class="input-icon left"> <i class="icon-lock"></i>
                  <input type="password" class="m-wrap span12" placeholder="Remarks" />
                </div>
                <label class="checkbox">
                  <input type="checkbox" />
                  Notify admin </label>
                <button type="submit" class="btn purple">Submit</button>
              </form>
            </div>
          </div>
          <!-- END PORTLET-->
        </div>
        <div class="span9 ">
          <!-- BEGIN PAGE HEADER-->
          <div class="row-fluid">
            <div class="span12">
              <!-- BEGIN PAGE TITLE & BREADCRUMB-->
              <h3 class="page-title"> Horzontal Menu 2 <small>horizontal menu layout with sidebar tools</small> </h3>
              <ul class="breadcrumb">
                <li> <i class="icon-home"></i> <a href="index.html">Home</a> <i class="icon-angle-right"></i> </li>
                <li> <a href="#">Layouts</a> <i class="icon-angle-right"></i> </li>
                <li><a href="#">Horzontal Menu 2</a></li>
              </ul>
              <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
          </div>
          <!-- END PAGE HEADER-->
          <!-- BEGIN PAGE CONTENT-->
          <div class="row-fluid margin-bottom-20">
            <div class="span12">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span6">
              <!-- BEGIN SAMPLE TABLE PORTLET-->
              <div class="portlet box red">
                <div class="portlet-title">
                  <div class="caption"><i class="icon-cogs"></i>Simple Table</div>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#portlet-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="portlet-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th class="hidden-480">Username</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td class="hidden-480">makr124</td>
                        <td><span class="label label-success">Approved</span></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Nilson</td>
                        <td class="hidden-480">jac123</td>
                        <td><span class="label label-info">Pending</span></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>Cooper</td>
                        <td class="hidden-480">lar</td>
                        <td><span class="label label-warning">Suspended</span></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sandy</td>
                        <td>Lim</td>
                        <td class="hidden-480">sanlim</td>
                        <td><span class="label label-danger">Blocked</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END SAMPLE TABLE PORTLET-->
            </div>
            <div class="span6">
              <!-- BEGIN BORDERED TABLE PORTLET-->
              <div class="portlet box yellow">
                <div class="portlet-title">
                  <div class="caption"><i class="icon-coffee"></i>Bordered Table</div>
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#portlet-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <div class="portlet-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th class="hidden-480">Username</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td class="hidden-480">makr124</td>
                        <td><span class="label label-success">Approved</span></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Nilson</td>
                        <td class="hidden-480">jac123</td>
                        <td><span class="label label-info">Pending</span></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Larry</td>
                        <td>Cooper</td>
                        <td class="hidden-480">lar</td>
                        <td><span class="label label-warning">Suspended</span></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sandy</td>
                        <td>Lim</td>
                        <td class="hidden-480">sanlim</td>
                        <td><span class="label label-danger">Blocked</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- END BORDERED TABLE PORTLET-->
            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
  </div>
  <!-- END PAGE -->
</div>
<!-- END CONTAINER -->
<!-- END PAGE -->

<!-- BEGIN FOOTER -->
<div class="footer">
  <div class="footer-inner"> 2013 &copy; Metronic by keenthemes.Collect from <a href="http://www.cssmoban.com/" title="网站模板" target="_blank">网站模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> </div>
  <div class="footer-tools"> <span class="go-top"> <i class="icon-angle-up"></i> </span> </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="/futures/Public/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/futures/Public/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/futures/Public/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/futures/Public/media/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>

	<script src="/futures/Public/media/js/excanvas.min.js"></script>

	<script src="/futures/Public/media/js/respond.min.js"></script>  

	<![endif]-->
<script src="/futures/Public/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/futures/Public/media/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/futures/Public/media/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/futures/Public/media/js/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<script src="/futures/Public/media/js/app.js"></script>
<script>

		jQuery(document).ready(function() {    

		   App.init();

		});

	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>