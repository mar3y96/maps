
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>لوحة تحكم المدير</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        {{ Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}

        {{ Html::style('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css') }}
        {{ Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css') }}
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{ Html::style('assets/global/plugins/select2/select2.css') }}
        {{ Html::style('assets/global/plugins/select2/select2-bootstrap.min.css') }}
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        {{ Html::style('assets/global/css/components-rtl.css') }}
        {{ Html::style('assets/global/css/plugins-rtl.min.css') }}
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        {{ Html::style('assets/pages/css/login-rtl.min.css') }}

        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ asset('site/favicon.ico') }}" /> 
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">  
        <style type="text/css">
            *{
                font-family: 'Cairo', sans-serif;
            }
        </style>
</head>

    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
        	{{ Html::image('logo-big.png','logo',['width'=>'250']) }}
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content" style="margin-top: 15px">
            <!-- BEGIN LOGIN FORM -->
            @include('layouts.alert')
            <form class="login-form" action="{{ url('admin/login') }}" method="post">
            	{{ csrf_field() }}
                <h3 class="form-title font-green">بروفايلي  المدير</h3>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">البريد الالكتروني</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text"  placeholder="البريد الالكتروني" name="email" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password"  placeholder="كلمة المرور" name="password" /> 
                </div>
                <div class="form-group col-12">
                    <label style="margin: 0 10px">تذكرني</label>
                    <input type="checkbox" name="remmber_me" />
                </div> 
                <div class="form-actions" style="border-bottom: 0px;padding: 0px 30px;">
                    <button type="submit" class="btn green uppercase">دخول</button>
                    {{--  <a href="{{ route('admin.password.reset') }}" style="float: left;">نسيت كلمة المرور</a>  --}}
                </div>
                
            </form>
            <!-- END LOGIN FORM -->
        </div>
        {{-- <div class="copyright"> . {{ date('Y')}} © Ayadat.com  </div> --}}
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        {{ Html::script('assets/global/plugins/jquery.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
        {{-- {{ Html::script('assets/global/plugins/js.cookie.min.js') }} --}}
        {{ Html::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}
        {{ Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
        {{ Html::script('assets/global/plugins/jquery.blockui.min.js') }}
        {{ Html::script('assets/global/plugins/jquery.blockui.min.js') }}
        {{ Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        {{-- {{ Html::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}

        {{ Html::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}

        {{ Html::script('assets/global/plugins/select2/js/select2.full.min.js') }} --}}
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        {{ Html::script('assets/global/scripts/app.min.js') }}
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        {{ Html::script('assets/pages/scripts/login.min.js') }}
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>