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
        <title>OFFER APP | Offers</title>
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

        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
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
                                <a href="{{route('editOffer')}}">Edit Offer</a>
                                <i class="fa fa-circle"></i>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
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
<<<<<<< HEAD
<<<<<<< master
=======
>>>>>>> gui
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
<<<<<<< HEAD
                                    <div class="note note-danger">
                                        <p>{{$errors->first('label')}}</p>
                                    </div>
                                    @endif
=======
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
>>>>>>> Final Update done
=======
                                    <div class="note note-danger">
                                        <p>{{$errors->first('label')}}</p>
                                    </div>
                                    @endif
>>>>>>> gui


                                    <!-- Begin: life time stats -->
                                        <div class="portlet-body">
                                            <div class="table-container">
                                                <div class="table-actions-wrapper">
                                                    <span> </span>
                                                    <select class="table-group-action-input form-control input-inline input-small input-sm">
                                                        <option value="">Select...</option>
                                                        <option value="publish">Publish</option>
                                                        <option value="unpublished">Un-publish</option>
                                                        <option value="delete">Delete</option>
                                                    </select>
                                                    <button class="btn btn-sm btn-success table-group-action-submit">
                                                        <i class="fa fa-check"></i> Submit</button>
                                                </div>
<<<<<<< HEAD
<<<<<<< master
<<<<<<< master
<<<<<<< refs/remotes/origin/master
                                                <table class="table table-striped table-bordered table-hover table-checkable" id="datatable_products">
                                                    <thead>
                                                        <tr role="row" class="heading">
                                                            <th width="1%">
                                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                                    <input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th width="10%"> ID </th>
                                                            <th width="15%"> Offer&nbsp;Name </th>
                                                            <th width="15%"> Category </th>
                                                            <th width="15%"> Date&nbsp;Created </th>
                                                            <th width="20%"> Description </th>
                                                            <th width="20%">Status </th>
                                                            <th width="10%"> Actions </th>
                                                        </tr>
                                                      <form  action="{{route('storeEdit')}}" method="post">
=======
                                                <form  class="form-horizontal form-row-seperated" method="post" enctype="multipart/form-data" action="{{route('storeNew')}}">
>>>>>>> Finale Update done
=======
                                                <form  class="form-horizontal form-row-seperated" method="post" enctype="multipart/form-data" action="{{route('storeNew')}}">
>>>>>>> Final Update done
=======
                                                <form  class="form-horizontal form-row-seperated" method="post" enctype="multipart/form-data" action="{{route('storeNew')}}">
>>>>>>> gui
                                                            {{csrf_field()}}
                                                  <div class="portlet light portlet-fit ">
                                                      <div class="portlet-title">
                                                          <div class="caption">
                                                              <i class="fa fa-cart-plus font-red"></i>
                                                              <span class="caption-subject font-red sbold uppercase">Edit Offer</span>
                                                          </div>
                                                          <div class="actions">
                                                              <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                  <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                                                      <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                                  <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                                                      <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                              </div>
<<<<<<< HEAD
<<<<<<< master
<<<<<<< master
                                                                <td>
                                                                    <input type="text" class="form-control form-filter input-sm" name="product_description"> </td>
                                                            <td>
                                                                <select name="product_status" class="form-control form-filter input-sm">
                                                                    <option value="">Select...</option>
                                                                    <option value="published">Published</option>
                                                                    <option value="notpublished">Not Published</option>
                                                                    <option value="deleted">Deleted</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <div class="margin-bottom-5">

                                                                </div>
                                                                <button class="btn btn-sm btn-default filter-cancel">
                                                                    <i class="fa fa-times"></i> Reset</button>
                                                            </td>
                                                        </tr>
                                                        <button type="submit" class="btn green pull-right"> Edit </button>
                                                      </form>
                                                    </thead>
                                                    <tbody> </tbody>
                                                </table>
=======
                                                <form  class="form-horizontal form-row-seperated" method="post" enctype="multipart/form-data" action="{{route('storeNew')}}">
                                                            {{csrf_field()}}
                                                  <div class="portlet light portlet-fit ">
                                                      <div class="portlet-title">
                                                          <div class="caption">
                                                              <i class="fa fa-cart-plus font-red"></i>
                                                              <span class="caption-subject font-red sbold uppercase">Edit Offer</span>
                                                          </div>
                                                          <div class="actions">
                                                              <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                                  <label class="btn btn-transparent red btn-outline btn-circle btn-sm active">
                                                                      <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                                  <label class="btn btn-transparent red btn-outline btn-circle btn-sm">
                                                                      <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                                              </div>
=======
>>>>>>> Finale Update done
=======
>>>>>>> Final Update done
=======
>>>>>>> gui
                                                          </div>
                                                      </div>
                                                      <div class="portlet-body">
                                                          <div class="table-toolbar">
                                                              <div class="row">
                                                                  <div class="col-md-6">
                                                                      <div class="btn-group">
                                                                          <button id="sample_editable_1_new" class="btn green"> Add New
                                                                              <i class="fa fa-plus"></i>
                                                                          </button>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                      <div class="btn-group pull-right">
                                                                          <button class="btn green btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                                              <i class="fa fa-angle-down"></i>
                                                                          </button>
                                                                          <ul class="dropdown-menu pull-right">
                                                                              <li>
                                                                                  <a href="javascript:;"> Print </a>
                                                                              </li>
                                                                              <li>
                                                                                  <a href="javascript:;"> Save as PDF </a>
                                                                              </li>
                                                                              <li>
                                                                                  <a href="javascript:;"> Export to Excel </a>
                                                                              </li>
                                                                          </ul>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <table class="table table-striped table-hover  table-bordered"  id="sample_editable_1">
                                                              <thead>
                                                                  <tr>
                                                                      <th class="col-md-1"> Id </th>
                                                                      <th class="col-md-1"> Name </th>
                                                                      <th class="col-md-1"> Category </th>
                                                                      <th class="col-md-1"> Picture </th>
                                                                      <th class="col-md-1"> Description </th>
                                                                      <th class="col-md-1"> Expiry </th>
                                                                      <th class="col-md-1" > Rating </th>
                                                                      <th class="col-md-1"> label </th>
                                                                      <th class="col-md-1"> Edit </th>
                                                                      <th class="col-md-1"> Delete </th>
                                                                  </tr>
                                                              </thead>
                                                              <tbody>
                                                                @foreach($offers as $offer)
                                                                  <tr>
                                                                      <td width="5%"> {{$offer->id}} </td>
                                                                      <td width="15%"> {{$offer->offerName}} </td>
                                                                      <td width="15%"> {{$offer->category}} </td>
                                                                      <td width="10%">
                                                                          <a href="../assets/pages/media/works/{{$offer->offerPic}}" class="fancybox-button" data-rel="fancybox-button">
                                                                              <img class="img-responsive" src="../assets/pages/media/works/{{$offer->offerPic}}" alt=""> </a>
                                                                      </td>
                                                                      <td width="15%" > {{$offer->offerDescription}} </td>
                                                                      <td width="10%"> {{$offer->offerExpiry}} </td>
                                                                      <td width="10%"> {{$offer->offerRating}} </td>
                                                                      <td width="10%"> {{$offer->offerLabel}} </td>
                                                                      <td width="5%">
                                                                          <button class="edit btn btn-sm btn-success "><i class="fa fa-edit"></i> Edit </button>
                                                                      </td>
                                                                      <td width="5%">
                                                                        <a class=" btn btn-sm btn-danger " href="{{route('offerDelete', ['id' => $offer->id])}}"> Delete </a>
                                                                      </td>
                                                                @endforeach
                                                              </tbody>
                                                          </table>
                                                      </div>
                                                  </div>
                                                </form>
<<<<<<< HEAD
<<<<<<< master
<<<<<<< master
>>>>>>> Final Update done
=======
>>>>>>> Finale Update done
=======
>>>>>>> Final Update done
=======
>>>>>>> gui
                                            </div>
                                        </div>
                                    <!-- End: life time stats -->
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
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
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
        <script src="../assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/table-datatables-editable.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/ecommerce-products.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
