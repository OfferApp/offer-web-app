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
        <title>OFFERAPP | Offer Edit</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
        <!-- BEGIN HEADER -->
        @include('layouts2.offerAppHeader')
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="{{route('home')}}">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>create offers</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
<<<<<<< Updated upstream
                                    <form class="form-horizontal form-row-seperated" method="post" action="{{route('storeEdit')}}">
                                          {{csrf_field()}}
=======
<<<<<<< refs/remotes/origin/master
                                    <form class="form-horizontal form-row-seperated" action="#">
=======
                                  @if(isset($msg))
                                  <div class="note note-danger">
                                      <p>{{$msg}}</p>
                                  </div>
                                  @endif
                                  @if($errors->has('offername'))
                                  <div class="note note-danger">
                                      <p>{{$errors->first('offername')}}</p>
                                  </div>
                                  @endif
                                  @if($errors->has('offer_description'))
                                  <div class="note note-danger">
                                      <p>{{$errors->first('offer_description')}}</p>
                                  </div>
                                  @endif
                                  @if($errors->has('offer_expire'))
                                  <div class="note note-danger">
                                      <p>{{$errors->first('offer_expire')}}</p>
                                  </div>
                                  @endif
                                  @if($errors->has('offerimages'))
                                  <div class="note note-danger">
                                      <p>{{$errors->first('offerimages')}}</p>
                                  </div>
                                  @endif
                                  @if($errors->has('category'))
                                  <div class="note note-danger">
                                      <p>{{$errors->first('category')}}</p>
                                  </div>
                                  @endif
                                  @if($errors->has('label'))
                                  <div class="note note-danger">
                                      <p>{{$errors->first('label')}}</p>
                                  </div>
                                  @endif

                                    <form class="form-horizontal form-row-seperated" method="post" action="{{route('storeNew')}}">
                                          {{csrf_field()}}
>>>>>>> Final Update done
>>>>>>> Stashed changes
                                        <div class="portlet">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-shopping-cart"></i>Create Offer </div>
                                                <div class="actions btn-set">
                                                    <!-- <button type="button" name="back" class="btn btn-secondary-outline">
                                                        <i class="fa fa-angle-left"></i> Back</button>
                                                    <button class="btn btn-secondary-outline">
                                                        <i class="fa fa-reply"></i> Reset</button>
                                                    <button class="btn btn-success">
<<<<<<< Updated upstream
                                                        <i class="fa fa-check"></i> Save</button> -->
=======
<<<<<<< refs/remotes/origin/master
                                                        <i class="fa fa-check"></i> Save</button>
>>>>>>> Stashed changes
                                                    <button class="btn btn-success">
                                                        <i class="fa fa-check-circle"></i> Save & Continue Edit</button>
                                                    <div class="btn-group">
                                                        <a class="btn btn-success dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                                            <i class="fa fa-share"></i> More
                                                            <i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <div class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;"> Duplicate </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;"> Delete </a>
                                                            </li>
                                                            <li class="dropdown-divider"> </li>
                                                            <li>
                                                                <a href="javascript:;"> Print </a>
                                                            </li>
                                                        </div>
                                                    </div>
=======
                                                        <i class="fa fa-check"></i> Save</button> -->
                                                    <!-- <button class="btn btn-success" type="submit">
                                                        <i class="fa fa-check-circle"></i> Save & Continue Edit</button> -->

>>>>>>> Final Update done
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tabbable-bordered">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_general" data-toggle="tab"> General </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_images" data-toggle="tab"> Images </a>
                                                        </li>

                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab_general">
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Name:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
<<<<<<< Updated upstream
                                                                        <select class="table-group-action-input form-control input-medium" name="offername">
=======
<<<<<<< refs/remotes/origin/master
                                                                        <select class="table-group-action-input form-control input-medium" name="product[tax_class]">
>>>>>>> Stashed changes
                                                                            <option value="">Select...</option>
                                                                            <option value="Buy 1 get 1 Free">Buy 1 get 1 Free</option>
                                                                            <option value="50% off">50% off</option>
                                                                            <option value="1000 CashBack on 6000 and above Purchase">1000 CashBack on 6000 and above Purchase</option>
=======
                                                                        <select class="table-group-action-input form-control input-medium" id="offername" name="offername" required>
                                                                            <option value="1">Buy 1 get 1 Free</option>
                                                                            <option value="2">50% off</option>
                                                                            <option value="3">1000 CashBack on 6000 and above Purchase</option>
>>>>>>> Final Update done
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group" id="buyget">
                                                                  <label class="col-md-2 control-label">Buy
                                                                      <span class="required"> * </span>
                                                                  </label>
                                                                  <div class="col-md-10">
                                                                      <select class="table-group-action-input form-control input-medium" id="buy" name="buy">
                                                                          <option value="1">1</option>
                                                                          <option value="2">2</option>
                                                                          <option value="3">3</option>
                                                                          <option value="4">4</option>
                                                                          <option value="5">5</option>
                                                                          <option value="6">6</option>
                                                                          <option value="7">7</option>
                                                                          <option value="8">8</option>
                                                                          <option value="9">9</option>
                                                                      </select>
                                                                  </div>

                                                                  <label class="col-md-2 control-label">Get
                                                                      <span class="required"> * </span>
                                                                  </label>
                                                                  <div class="col-md-10">
                                                                      <select class="table-group-action-input form-control input-medium" id="get" name="get">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                      </select>
                                                                  </div>
                                                                </div>
                                                                <div class="form-group " style="display:none" id="flat">
                                                                    <label class="col-md-2 control-label">Flat:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-1">
                                                                        <input type="number" class="form-control" name="flat"></input >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group " style="display:none"  id="cashback">
                                                                    <label class="col-md-2 control-label">Cashback:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-1">
                                                                        <input type="number" class="form-control" name="cashback"></input >
                                                                    </div>
                                                                    <label class="col-md-2 control-label">Purchase:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-1">
                                                                        <input type="number" class="form-control" name="purchase"></input >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Description:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <textarea class="form-control" name="offer_description" required></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Categories:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
<<<<<<< refs/remotes/origin/master
                                                                        <div class="form-control height-auto">
                                                                            <div class="scroller" style="height:275px;" data-always-visible="1">
                                                                                <ul class="list-unstyled">
                                                                                    <li>
                                                                                      <label>
                                                                                          <input type="checkbox" name="offer[categories][]" value="footwear">Footwear</label>
                                                                                  </li>
                                                                                  <li>
                                                                                      <label>
                                                                                          <input type="checkbox" name="offer[categories][]" value="clothing">Clothing</label>
                                                                                  </li>
                                                                                  <li>
                                                                                      <label>
                                                                                          <input type="checkbox" name="offer[categories][]" value="electronic">Electronic</label>
                                                                                  </li>
                                                                                  <li>
                                                                                      <label>
                                                                                          <input type="checkbox" name="offer[categories][]" value="hotel">Hotel</label>
                                                                                  </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <span class="help-block"> select one or more categories </span>
=======
                                                                        <select class="table-group-action-input form-control input-medium" name="category">
                                                                          <option value="footwear">Footwear</option>
                                                                          <option value="hotels">Hotels</option>
                                                                          <option value="electronics">Electronics</option>
                                                                          <option value="clothing">Clothing</option>

                                                                        </select>
>>>>>>> Final Update done
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-2 control-label">Valid till Date:
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-10">
                                                                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
<<<<<<< Updated upstream
                                                                            <input type="text" class="form-control" name="offer_expire">
=======
<<<<<<< refs/remotes/origin/master
                                                                            <input type="text" class="form-control" name="product_expire]">
=======
                                                                            <input type="text" class="form-control" name="offer_expire" required>
>>>>>>> Final Update done
>>>>>>> Stashed changes

                                                                        <span class="help-block"> availability date. </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                              <a href="#tab_images" class="btn btn-success" data-toggle="tab"> Next </a>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane" id="tab_images">
<<<<<<< refs/remotes/origin/master
                                                            <!-- <div class="alert alert-success margin-bottom-10">
                                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                                <i class="fa fa-warning fa-lg"></i> Image type and information need to be specified. </div> -->
                                                            <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
                                                                <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn btn-success">
                                                                    <i class="fa fa-plus"></i> Select Files </a>
                                                                <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn btn-primary">
                                                                    <i class="fa fa-share"></i> Upload Files </a>
                                                            </div>
<<<<<<< Updated upstream
                                                            <div class="row">
                                                                <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"></div>
=======
                                                            <table class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr role="row" class="heading">
                                                                        <th width="8%"> Image </th>
                                                                        <th width="25%"> Label </th>
                                                                        <th width="8%"> Sort Order </th>
                                                                        <th width="10%"> Base Image </th>
                                                                        <th width="10%"> Small Image </th>
                                                                        <th width="10%"> Thumbnail </th>
                                                                        <th width="10%"> </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="../assets/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                                <img class="img-responsive" src="../assets/pages/media/works/img1.jpg" alt=""> </a>
                                                                        </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" name="offer[images][1][label]" value="Thumbnail image"> </td>
                                                                        <td>
                                                                            <input type="text" class="form-control" name="offer[images][1][sort_order]" value="1"> </td>
                                                                        <td>
                                                                            <label>
                                                                                <input type="radio" name="offer[images][1][image_type]" value="1"> </label>
                                                                        </td>
                                                                        <td>
                                                                            <label>
                                                                                <input type="radio" name="offer[images][1][image_type]" value="2"> </label>
                                                                        </td>
                                                                        <td>
                                                                            <label>
                                                                                <input type="radio" name="offer[images][1][image_type]" value="3" checked> </label>
                                                                        </td>
=======
                                                            <div class="row">

>>>>>>> Stashed changes
                                                                <table class="table table-bordered table-hover">
                                                                    <thead>
                                                                        <tr role="row" class="heading">
                                                                            <th width="8%"> Image </th>
                                                                            <th width="25%"> Label </th>
                                                                            <th width="5%"> Select </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="../assets/pages/media/works/offer1.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                                    <img class="img-responsive" src="../assets/pages/media/works/offer1.jpg" alt=""> </a>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control" name="label" value="Offer image #1"> </td>
                                                                            <td>
                                                                                <label>
                                                                                    <input type="radio" name="offerimages" value="offer1.jpg" checked> </label>
                                                                            </td>
                                                                        </tr>
<<<<<<< Updated upstream
=======

                                                                        <tr>
                                                                            <td>
                                                                                <a href="../assets/pages/media/works/offer2.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                                    <img class="img-responsive" src="../assets/pages/media/works/offer2.jpg" alt=""> </a>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control" name="label" value="Offer image #6"> </td>
                                                                            <td>
                                                                                <label>
                                                                                    <input type="radio" name="offerimages" value="offer6.jpg"> </label>
                                                                            </td>
                                                                        </tr>
>>>>>>> Final Update done
>>>>>>> Stashed changes

                                                                        <tr>
                                                                            <td>
                                                                                <a href="../assets/pages/media/works/offer2.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                                    <img class="img-responsive" src="../assets/pages/media/works/offer2.jpg" alt=""> </a>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control" name="label" value="Offer image #6"> </td>
                                                                            <td>
                                                                                <label>
                                                                                    <input type="radio" name="offerimages" value="offer6.jpg"> </label>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <a href="../assets/pages/media/works/offer3.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                                    <img class="img-responsive" src="../assets/pages/media/works/offer3.jpg" alt=""> </a>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control" name="label" value="Offer image #3"> </td>
                                                                            <td>
                                                                                <label>
                                                                                    <input type="radio" name="offerimages" value="offer3.jpg"> </label>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>
                                                                                <a href="../assets/pages/media/works/offer4.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                                    <img class="img-responsive" src="../assets/pages/media/works/offer4.jpg" alt=""> </a>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control" name="label" value="Offer image #4"> </td>
                                                                            <td>
                                                                                <label>
                                                                                    <input type="radio" name="offerimages" value="offer4.jpg"> </label>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <a href="../assets/pages/media/works/offer4.jpg" class="fancybox-button" data-rel="fancybox-button">
                                                                                    <img class="img-responsive" src="../assets/pages/media/works/offer7.jpg" alt=""> </a>
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" class="form-control" name="label" value="Offer image #5"> </td>
                                                                            <td>
                                                                                <label>
                                                                                    <input type="radio" name="offerimages" value="offer7.jpg"> </label>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>

<<<<<<< Updated upstream
=======
<<<<<<< refs/remotes/origin/master
                                                                    </tr>
                                                                </tbody>
                                                            </table>
=======
                                                            <div>
                                                              <a href="#tab_general" class="btn btn-success" data-toggle="tab"> Back </a>
                                                              <!-- <button type="button" name="back" class="btn btn-secondary-outline">
                                                                  <i class="fa fa-angle-left"></i> Back</button>
                                                              <button class="btn btn-secondary-outline">
                                                                  <i class="fa fa-reply"></i> Reset</button> -->
                                                              <button class="btn btn-success">
                                                                  <i class="fa fa-check"></i> Save</button>
                                                              <!-- <button class="btn btn-success" type="submit">
                                                                  <i class="fa fa-check-circle"></i> Save & Continue Edit</button> -->
                                                            </div>
>>>>>>> Final Update done
>>>>>>> Stashed changes
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/ecommerce-products-edit.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

    <script>
$(document).ready(function(){
  $("#offername").on("change", function(){
    $offername = $("#offername").val();
      if ($offername == 1) {
        $("#buyget").show();
        $("#flat").hide();
        $("#cashback").hide();
      }
      if($offername == 2) {
        $("#buyget").hide();
        $("#flat").show();
        $("#cashback").hide();
      }
      if ($offername == 3) {
        $("#buyget").hide();
        $("#flat").hide();
        $("#cashback").show();
      }

  });
});
</script>

</html>
