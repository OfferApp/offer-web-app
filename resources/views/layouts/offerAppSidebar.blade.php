<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
      <br>
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                    <span></span>
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="nav-item start   active open">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Home</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="{{ route('setAccount') }}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">DashBoard</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="icon-wallet"></i> Account
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class=" ">
                        <a href="ecommerce_index.html" class="nav-link ">
                            <i class="icon-user"></i> Vendor </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="icon-docs"></i> Offers
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class=" ">
                        <a href="ecommerce_orders.html" class="nav-link ">
                            <i class="icon-basket"></i> Offers </a>
                    </li>
                    <li class=" ">
                        <a href="ecommerce_orders_view.html" class="nav-link ">
                            <i class="icon-tag"></i> Offer View </a>
                    </li>
                    <li class=" ">
                        <a href="ecommerce_products_edit.html" class="nav-link ">
                            <i class="icon-graph"></i> Offer Edit </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;"><i class="icon-info"></i> About Us</a>
            </li>
            <li class="nav-item ">
                <a href="javascript:;">
                  <i class="icon-call-end"></i> Contact Us
                </a>
            </li>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
