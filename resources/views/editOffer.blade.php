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
                                <div class="col-md-12">
                                    <div class="note note-danger">
                                        <p> NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only. </p>
                                    </div>
                                    <!-- Begin: life time stats -->
                                    <div class="portlet light">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-shopping-cart"></i>Offer Listing </div>
                                            <div class="actions">
                                                <a href="javascript:;" class="btn btn-circle btn-info">
                                                    <i class="fa fa-plus"></i>
                                                    <span class="hidden-xs"> New Offer </span>
                                                </a>
                                                <div class="btn-group">
                                                    <a class="btn btn-circle btn-default dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                                        <i class="fa fa-share"></i>
                                                        <span class="hidden-xs"> Tools </span>
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> Export to Excel </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Export to CSV </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Export to XML </a>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <a href="javascript:;"> Print Invoices </a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                            {{csrf_field()}}
                                                        <tr role="row" class="filter">
                                                            <td> </td>
                                                            <td>
                                                                <input type="text" class="form-control form-filter input-sm" name="product_id"> </td>
                                                            <td>
                                                                <input type="text" class="form-control form-filter input-sm" name="product_name"> </td>
                                                            <td>
                                                                <select name="product_category" class="form-control form-filter input-sm">
                                                                    <option value="">Select...</option>
                                                                    <option value="1">Footwear</option>
                                                                    <option value="2">Clothing</option>
                                                                    <option value="3">Accessories</option>
                                                                    <option value="4">Food</option>
                                                                </select>
                                                            </td>

                                                            <td>
                                                              <div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
                                                                  <input type="text" class="form-control form-filter input-sm" readonly name="product_created_from" placeholder="From">
                                                                  <span class="input-group-btn">
                                                                      <button class="btn btn-sm default" type="button">
                                                                          <i class="fa fa-calendar"></i>
                                                                      </button>
                                                                  </span>
                                                              </div>
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
                                            </div>
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
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/ecommerce-products.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
