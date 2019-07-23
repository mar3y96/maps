<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>@yield('title')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
{{ Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}
{{ Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}
{{ Html::style('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}
{{ Html::style('assets/global/plugins/uniform/css/uniform.default.css')}}
{{ Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
{{ Html::style('assets/global/plugins/select2/select2.css')}}
{{ Html::style('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap-rtl.css')}}
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
{{ Html::style('assets/global/css/components-md-rtl.css')}}
{{ Html::style('assets/global/css/plugins-md-rtl.css')}}
{{ Html::style('assets/admin/layout4/css/layout-rtl.css')}}
{{ Html::style('assets/admin/layout4/css/themes/light-rtl.css')}}
{{ Html::style('assets/admin/layout4/css/custom-rtl.css')}}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{ asset('site/favicon.ico') }}"/>
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">  
<style type="text/css">
    *{
        font-family: 'Cairo', sans-serif;
    }
</style>
@yield('style')

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
            <img src="{{ asset('assets/admin/layout4/img/logo-light.png') }}" alt="logo" class="logo-default">
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        
        <div class="page-top">
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <span class="username username-hide-on-mobile">
                        {{-- {{ auth()->guard('admin')->user()->name}}  --}}
                    </span>
                        <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                        <img alt="" class="img-circle" src="{{ asset('assets/admin/layout4/img/avatar.png') }}">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                {{-- <a href="{{ url('admin/profile') }}"> --}}
                                <i class="icon-user"></i> إعدادات </a>
                            </li>
                            
                            <li class="divider">
                            </li>
                           
                            <li>
                              {{--   <a href="{{ url('/admin/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="icon-key"></i>  نسجيل الخروج  </a>
                                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form> --}}
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
               <li class="nav-item start {{-- {{ Menu::active('admin/home') }} --}}">
                    <a href="{{-- {{ url('admin/home') }} --}}" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">لوحة التحكم</span>
                        
                    </a>
                </li>
                
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE HEAD -->
            @yield('content')
            <!-- END PAGE BREADCRUMB -->
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            
            
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
         2014 © Metronic by keenthemes.
    </div>
    <div class="scroll-to-top" style="display: none;">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{{ Html::script('assets/global/plugins/respond.min.js')}}
{{ Html::script('assets/global/plugins/excanvas.min.js')}} 
<![endif]-->
{{ Html::script('assets/global/plugins/jquery.min.js')}}
{{ Html::script('assets/global/plugins/jquery-migrate.min.js')}}
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{{ Html::script('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}
{{ Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}
{{ Html::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}
{{ Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
{{ Html::script('assets/global/plugins/jquery.blockui.min.js')}}
{{ Html::script('assets/global/plugins/jquery.cokie.min.js')}}
{{ Html::script('assets/global/plugins/uniform/jquery.uniform.min.js')}}
{{ Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@if(!Request::is('admin/settings/main-settings'))

{{ Html::script('assets/global/plugins/select2/select2.min.js')}}
@endif
{{ Html::script('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}
{{ Html::script('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ Html::script('assets/global/scripts/metronic.js')}}
{{ Html::script('assets/admin/layout4/scripts/layout.js')}}
{{ Html::script('assets/admin/layout4/scripts/demo.js')}}
{{ Html::script('assets/admin/pages/scripts/table-managed.js')}}
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   TableManaged.init();
});
</script>
@yield('script')


<!-- END BODY -->
<span role="status" aria-live="polite" class="select2-hidden-accessible"></span><span role="status" aria-live="polite" class="select2-hidden-accessible"></span></body>
<!-- END BODY -->
</html>