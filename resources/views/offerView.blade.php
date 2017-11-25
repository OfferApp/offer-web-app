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
        <title>OFFER APP | OFFER GALLERY</title>
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
        <link href="../assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/portfolio.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
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
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Vendor
                                <small>Offer Gallery</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="portfolio-content portfolio-1">
                                <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
                                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"> All
                                        <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".identity" class="cbp-filter-item btn dark btn-outline uppercase"> Clothing
                                        <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".web-design" class="cbp-filter-item btn dark btn-outline uppercase"> FooterWear
                                        <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".graphic" class="cbp-filter-item btn dark btn-outline uppercase"> Electronics
                                        <div class="cbp-filter-counter"></div>
                                    </div>
                                    <div data-filter=".logos" class="cbp-filter-item btn dark btn-outline uppercase"> Hotels
                                        <div class="cbp-filter-counter"></div>
                                    </div>
                                 <div id="js-grid-juicy-projects" class="cbp">

                                   @foreach($offers as $offer)
                                        @if ($offer->category == 'clothing')

<<<<<<< HEAD
<<<<<<< master
<<<<<<< master
<<<<<<< Updated upstream
                                        <div class="cbp-item graphic">
=======
                                        <div class="cbp-item identity">
>>>>>>> Stashed changes
=======
                                        <div class="cbp-item identity">
>>>>>>> Finale Update done
=======
                                        <div class="cbp-item identity">
>>>>>>> Final Update done
=======
                                        <div class="cbp-item identity">
>>>>>>> gui
                                            <div class="cbp-caption">
                                                <div class="cbp-caption-defaultWrap">
                                                    <img src="/assets/pages/media/works/{{$offer->offerPic}}" alt=""> </div>
                                                <div class="cbp-caption-activeWrap">
                                                    <div class="cbp-l-caption-alignCenter">
                                                        <div class="cbp-l-caption-body">
                                                            <a href="{{route('vendorProfile')}}" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                            <a href="/assets/pages/media/works/{{$offer->offerPic}}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="{{$offer->offerName}}">view larger</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">{{$offer->offerName}}</div>
                                            <div class="cbp-l-grid-projects-desc uppercase text-center uppercase text-center">{{$offer->offerDescription}}</div>
                                        </div>
                                        @elseif ($offer->category == 'footwear')
                                        <div class="cbp-item web-design ">
                                            <div class="cbp-caption">
                                                <div class="cbp-caption-defaultWrap">
                                                    <img src="/assets/pages/media/works/{{$offer->offerPic}}" alt=""> </div>
                                                <div class="cbp-caption-activeWrap">
                                                    <div class="cbp-l-caption-alignCenter">
                                                        <div class="cbp-l-caption-body">
                                                            <a href="{{route('vendorProfile')}}" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                            <a href="/assets/pages/media/works/{{$offer->offerPic}}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="{{$offer->offerName}}">view larger</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-l-grid-projects-title uppercase text-center">{{$offer->offerName}}</div>
                                            <div class="cbp-l-grid-projects-desc uppercase text-center">{{$offer->offerDescription}}</div>
                                        </div>
                                        @elseif ($offer->category == 'hotel')
                                        <div class="cbp-item logos">
                                            <div class="cbp-caption">
                                                <div class="cbp-caption-defaultWrap">
                                                    <img src="/assets/pages/media/works/{{$offer->offerPic}}" alt=""> </div>
                                                <div class="cbp-caption-activeWrap">
                                                    <div class="cbp-l-caption-alignCenter">
                                                        <div class="cbp-l-caption-body">
                                                            <a href="{{route('vendorProfile')}}" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                            <a href="/assets/pages/media/works/{{$offer->offerPic}}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="{{$offer->offerName}}">view larger</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-l-grid-projects-title uppercase text-center">{{$offer->offerName}}</div>
                                            <div class="cbp-l-grid-projects-desc uppercase text-center">{{$offer->offerDescription}}</div>
                                        </div>
                                        @elseif ($offer->category == 'electronic')
<<<<<<< HEAD
<<<<<<< master
<<<<<<< master
<<<<<<< Updated upstream
                                        <div class="cbp-item identity">
=======
                                        <div class="cbp-item graphic">
>>>>>>> Stashed changes
=======
                                        <div class="cbp-item graphic">
>>>>>>> Finale Update done
=======
                                        <div class="cbp-item graphic">
>>>>>>> Final Update done
=======
                                        <div class="cbp-item graphic">
>>>>>>> gui
                                            <div class="cbp-caption">
                                                <div class="cbp-caption-defaultWrap">
                                                    <img src="/assets/pages/media/works/{{$offer->offerPic}}" alt=""> </div>
                                                <div class="cbp-caption-activeWrap">
                                                    <div class="cbp-l-caption-alignCenter">
                                                        <div class="cbp-l-caption-body">
                                                            <a href="{{route('vendorProfile')}}" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                            <a href="/assets/pages/media/works/{{$offer->offerPic}}" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="{{$offer->offerName}}">view larger</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-l-grid-projects-title uppercase text-center">{{$offer->offerName}}</div>
                                            <div class="cbp-l-grid-projects-desc uppercase text-center">{{$offer->offerDescription}}</div>
                                        </div>
                                        @endif
                                        <hr>
                                        <br>
                                   @endforeach
                                <!-- <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
                                    <a href="../assets/global/plugins/cubeportfolio/ajax/loadMore.html" class="cbp-l-loadMore-link btn grey-mint btn-outline" rel="nofollow">
                                        <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                                        <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                                        <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                                    </a>
                                </div> -->
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
        <!-- BEGIN INNER FOOTER -->
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
        <script src="../assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/portfolio-1.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
