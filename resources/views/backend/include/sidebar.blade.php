@php

$currentRoute = Route::current()->getName();
@endphp
<!-- BEGIN SIDEBAR -->
 <div class="page-sidebar-wrapper">
   
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            
            <li class="nav-item start {{ $currentRoute == "admin-dashboard" ? "active": ""}}  open">
            <a href="{{ route('admin-dashboard') }}" class="nav-link ">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    @if($currentRoute == "admin-dashboard")
                        <span class="selected"></span>
                    @endif
                    
                </a>
            </li>

            <li class="nav-item start {{ $currentRoute == "extra-facilities" ? "active": ""}} {{ $currentRoute == "add-extra-facilities" ? "active": ""}} {{ $currentRoute == "edit-extra-facilities" ? "active": ""}}">
                <a href="{{ route('extra-facilities') }}" class="nav-link ">
                    <i class="fa fa-archive" aria-hidden="true"></i>
                        <span class="title">Extra Facailies</span>
                        @if($currentRoute == "extra-facilities" || $currentRoute == "add-extra-facilities")
                            <span class="selected"></span>
                        @endif
                </a>
            </li>


            <li class="nav-item start  {{ $currentRoute == "admin-view-blog" ? "active": ""}} {{ $currentRoute == "admin-blog" ? "active": ""}} {{ $currentRoute == "view-blog" ? "active": ""}} {{ $currentRoute == "admin-add-blog" ? "active": ""}} {{ $currentRoute == "admin-edit-blog" ? "active": ""}} {{ $currentRoute == "blog-category" ? "active": ""}}  {{ $currentRoute == "add-blog-category" ? "active": ""}} {{ $currentRoute == "edit-blog-category" ? "active": ""}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">Blog</span>
                    <span class="arrow"></span>
                    @if($currentRoute == "blog-category" || $currentRoute == "add-blog-category" || $currentRoute == "edit-blog-category")
                            <span class="selected"></span>
                    @endif
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ $currentRoute == "blog-category" ? "active": ""}} {{ $currentRoute == "add-blog-category" ? "active": ""}} {{ $currentRoute == "edit-blog-category" ? "active": ""}}">
                        <a href="{{ route('blog-category') }}" class="nav-link ">
                            <i class="fa fa-hand-o-right"></i>
                            <span class="title">Blog Category</span>
                        </a>
                    </li>
                    <li class="nav-item start {{ $currentRoute == "admin-view-blog" ? "active": ""}} {{ $currentRoute == "admin-blog" ? "active": ""}} {{ $currentRoute == "view-blog" ? "active": ""}} {{ $currentRoute == "admin-add-blog" ? "active": ""}} {{ $currentRoute == "admin-edit-blog" ? "active": ""}}">
                        <a href="{{ route('admin-blog') }}" class="nav-link ">                            
                            <i class="fa fa-hand-o-right"></i>
                            <span class="title">Blog</span>
                        </a>
                    </li>
                    
                </ul>
            </li>


            <li class="nav-item start  {{ $currentRoute == "admin-plan-details" ? "active": ""}} {{ $currentRoute == "admin-add-plan-details" ? "active": ""}} {{ $currentRoute == "admin-edit-plan-details" ? "active": ""}} {{ $currentRoute == "admin-view-plan-details" ? "active": ""}} {{ $currentRoute == "admin-edit-blog" ? "active": ""}} {{ $currentRoute == "admin-plan" ? "active": ""}} {{ $currentRoute == "admin-add-plan" ? "active": ""}} {{ $currentRoute == "admin-view-plan" ? "active": ""}} {{ $currentRoute == "admin-edit-plan" ? "active": ""}}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-paper-plane-o"></i>
                    <span class="title">Plan</span>
                    <span class="arrow"></span>
                    @if($currentRoute == "admin-plan" || $currentRoute == "admin-add-plan" || $currentRoute == "admin-edit-plan" || $currentRoute == "admin-view-plan")
                            <span class="selected"></span>
                    @endif
                </a>
                <ul class="sub-menu">

                    <li class="nav-item start {{ $currentRoute == "admin-plan" ? "active": ""}} {{ $currentRoute == "admin-add-plan" ? "active": ""}} {{ $currentRoute == "admin-view-plan" ? "active": ""}} {{ $currentRoute == "admin-edit-plan" ? "active": ""}}">
                        <a href="{{ route('admin-plan') }}" class="nav-link ">
                            <i class="fa fa-hand-o-right"></i>
                            <span class="title">Plan</span>
                        </a>
                    </li>


                    <li class="nav-item start {{ $currentRoute == "admin-plan-details" ? "active": ""}} {{ $currentRoute == "admin-add-plan-details" ? "active": ""}} {{ $currentRoute == "admin-edit-plan-details" ? "active": ""}} {{ $currentRoute == "admin-view-plan-details" ? "active": ""}} {{ $currentRoute == "admin-edit-blog" ? "active": ""}}">
                        <a href="{{ route('admin-plan-details') }}" class="nav-link ">                            
                            <i class="fa fa-hand-o-right"></i>
                            <span class="title">Plan Details</span>
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li class="nav-item start {{ $currentRoute == "admin-terms-condition" ? "active": ""}} ">
                <a href="{{ route('admin-terms-condition') }}" class="nav-link ">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <span class="title">Terms & Conditions</span>
                        @if($currentRoute == "admin-terms-condition" || $currentRoute == "admin-terms-condition")
                            <span class="selected"></span>
                        @endif
                </a>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->