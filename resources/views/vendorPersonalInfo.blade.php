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
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>OFFER APP | New Vendor Profile | Account</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/dropzone/basic.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
       </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid login">
        <!-- BEGIN HEADER -->
        @include('layouts2.offerAppHeader')
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Vendor Profile | Account
                                <small>Vendor PersonalInfo</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        @include('layouts2.offerAppPageToolbar')
                        <!-- END PAGE TOOLBAR -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PROFILE SIDEBAR -->
                                    <div class="profile-sidebar">
                                        <!-- PORTLET MAIN -->
                                        <div class="portlet light profile-sidebar-portlet ">
                                            <!-- SIDEBAR USERPIC -->
                                            <div class="profile-userpic">
                                                <img src="{{App\Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first()->vendorLogo}}" class="img-responsive" alt=""> </div>
                                            <!-- END SIDEBAR USERPIC -->
                                            <!-- SIDEBAR USER TITLE -->
                                            <div class="profile-usertitle">
                                                <div class="profile-usertitle-name"> {{Auth::guard('web_vendor')->user()->username}} </div>
                                                <div class="profile-usertitle-job"> Vendor </div>
                                            </div>
                                        </div>
                                        <!-- END PORTLET MAIN -->
                                        <!-- PORTLET MAIN -->
                                        <div class="portlet light ">
                                            <div>
                                                <h4 class="profile-desc-title">About </h4>
                                                <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-globe"></i>
                                                    <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                                                </div>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-twitter"></i>
                                                    <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                                                </div>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-facebook"></i>
                                                    <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END PORTLET MAIN -->
                                    </div>
                                    <!-- END BEGIN PROFILE SIDEBAR -->
                                    <!-- BEGIN PROFILE CONTENT -->
                                    <div class="profile-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet light ">
                                                    <div class="portlet-title tabbable-line">
                                                        <div class="caption caption-md">
                                                            <i class="icon-globe theme-font hide"></i>
                                                            <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                        </div>
                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="portlet-body">
                                                      <form class="profile-form" action="{{route('setPersonalInfo')}}" method="post" enctype="multipart/form-data" role="form">
                                                            {{ csrf_field() }}
                                                        <div class="tab-content">

                                                            <!-- PERSONAL INFO TAB -->
                                                            <div class="tab-pane active" id="tab_1_1 ">

                                                              <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}" id="firstName">
                                                                <label >Vendor Name</label>
                                                                  <div class="input-icon">
                                                                    <i class="fa fa-font"></i>
                                                                      <input class="form-control placeholder-no-fix" type="text" placeholder="Full Name"
                                                                      value="{{App\Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first()->fullName}}" name="firstName">

                                                                      @if ($errors->has('firstName'))
                                                                        <span class="help-block alert-danger">
                                                                          <strong>{{ $errors->first('firstName') }}</strong>
                                                                        </span>
                                                                      @endif
                                                                  </div>
                                                              </div>
                                                              <div class="form-group{{ $errors->has('shopName') ? ' has-error' : '' }}" id="shopName">
                                                                <label >Shop Name</label>
                                                                  <div class="input-icon">
                                                                    <i class="fa fa-font"></i>
                                                                      <input class="form-control placeholder-no-fix" type="text" placeholder="Shop Name"
                                                                      value="{{App\Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first()->shopName}}" name="shopName"  />
                                                                      @if ($errors->has('shopName'))
                                                                        <span class="help-block alert-danger">
                                                                          <strong>{{ $errors->first('shopName') }}</strong>
                                                                        </span>
                                                                      @endif
                                                                  </div>
                                                              </div>
                                                              <div class="form-group{{ $errors->has('mobileNo') ? ' has-error' : '' }}" id="mobileNo">
                                                                <label >Mobile No</label>
                                                                  <div class="input-icon">
                                                                    <i class="fa fa-font"></i>
                                                                      <input class="form-control placeholder-no-fix" type="text" placeholder="+91 1234567890"
                                                                      value="{{App\Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first()->shopContactNo}}" name="mobileNo"  />
                                                                      @if ($errors->has('mobileNo'))
                                                                        <span class="help-block alert-danger">
                                                                          <strong>{{ $errors->first('mobileNo') }}</strong>
                                                                        </span>
                                                                      @endif
                                                                  </div>
                                                              </div>
                                                              <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}" id="address">
                                                                <label >Shop Address</label>
                                                                  <div class="input-icon">
                                                                    <i class="fa fa-font"></i>
                                                                      <input class="form-control placeholder-no-fix" type="text" placeholder="Address"
                                                                      value="{{App\Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first()->shopAddress}}" name="address" />
                                                                      @if ($errors->has('address'))
                                                                        <span class="help-block alert-danger">
                                                                          <strong>{{ $errors->first('address') }}</strong>
                                                                        </span>
                                                                      @endif
                                                                  </div>
                                                              </div>
                                                              <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}" id="zipcode">
                                                                <label >Zip Code</label>
                                                                  <div class="input-icon">
                                                                    <i class="fa fa-font"></i>
                                                                      <input class="form-control placeholder-no-fix" type="text" placeholder="000 000"
                                                                      value="{{App\Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first()->zipCode}}" name="zipcode"  />
                                                                      @if ($errors->has('zipcode'))
                                                                        <span class="help-block alert-danger">
                                                                          <strong>{{ $errors->first('zipcode') }}</strong>
                                                                        </span>
                                                                      @endif
                                                                  </div>
                                                              </div>
                                                              <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}" id="website">
                                                                <label >Website</label>
                                                                  <div class="input-icon">
                                                                    <i class="fa fa-globe"></i>
                                                                      <input class="form-control placeholder-no-fix" type="text" placeholder="http://www.mywebsite.com"
                                                                      value="{{App\Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first()->website}}" name="website"  />
                                                                      @if ($errors->has('website'))
                                                                        <span class="help-block alert-danger">
                                                                          <strong>{{ $errors->first('website') }}</strong>
                                                                        </span>
                                                                      @endif
                                                                  </div>
                                                              </div>

                                                              <div class="form-actions">
                                                                  <button type="submit" class="btn red btn-outline"> Save & continue </button>
                                                              </div>

                                                            </div>
                                                            <!-- END PERSONAL INFO TAB -->
                                                    </div>
                                                  </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PROFILE CONTENT -->
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            @include('layouts2.offerAppQuickSidebar')
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <!-- BEGIN PRE-FOOTER -->
        @include('layouts2.offerAppFooter')
        <!-- END PRE-FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <!-- END INNER FOOTER -->
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../js/profile.js" type="text/javascript"></script>

        </script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
        <script src="../js/dropzone.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtqWsq5Ai3GYv6dSa6311tZiYKlbYT4mw" type="text/javascript"></script> -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
    </body>

</html>
