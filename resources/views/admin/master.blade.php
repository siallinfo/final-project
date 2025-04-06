<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8" />
    <title>Grahokshop - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.png">
    <link href="{{asset('/')}}admin/assets/libs/simple-datatables/style.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/main.css" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Try different Summernote versions -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.js"></script>

</head>

<body id="body">
<!-- leftbar-tab-menu -->
<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="{{route('admin.dashboard')}}" class="logo d-block text-center">
                    <span>
                        <img src="{{asset('/')}}admin/assets/images/logo....png" alt="logo-small" height="60">
                    </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    </li><!--end nav-item-->
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                        <a href="#GrahokApps" id="apps-tab" class="nav-link">
                            <i data-feather="home" class="icon-dual"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->
        <div class="pro-metrica-end">
            <a href="#" class="profile">
                <img src="{{asset('/')}}admin/assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle thumb-sm">
            </a>
        </div><!--end pro-metrica-end-->
    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{route('admin.dashboard')}}" class="align-items-center">
                        <span>
                            <img src="{{asset('/')}}admin/assets/images/logo....png" alt="logo-large" class="logo-lg logo-dark" height="170">
                        </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->
        <div class="menu-body navbar-vertical tab-content" data-simplebar>

            <div id="GrahokApps" class="main-icon-menu-pane tab-pane" role="tabpanel"
                 aria-labelledby="apps-tab">
                <div class="title-box">
                    <h4 class="menu-title">Dashboard</h4>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#category" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Category Module
                            </a>
                            <div class="collapse " id="category">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('category.create')}}">Add</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('category.index')}}">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#subCategory" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Sub-Category Module
                            </a>
                            <div class="collapse " id="subCategory">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('sub-category.create')}}">Add</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('sub-category.index')}}">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#brand" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Brand Module
                            </a>
                            <div class="collapse " id="brand">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('brand.create')}}">Add</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('brand.index')}}">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#unit" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Unit Module
                            </a>
                            <div class="collapse " id="unit">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('unit.create')}}">Add</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('unit.index')}}">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#product" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Product Module
                            </a>
                            <div class="collapse " id="product">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('product.create')}}">Add</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('product.index')}}">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#banner" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Banner Module
                            </a>
                            <div class="collapse " id="banner">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('banner.create')}}">Add</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('banner.index')}}">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#countdownbanner" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Countdown Banner
                            </a>
                            <div class="collapse " id="countdownbanner">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('countdown-banner.create')}}">Add</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('countdown-banner.index')}}">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#order" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Order Module
                            </a>
                            <div class="collapse " id="order">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin.all-order')}}">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#courier" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Courier Module
                            </a>
                            <div class="collapse " id="courier">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('courier.create')}}">Add</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('courier.index')}}">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#user" data-bs-toggle="collapse" role="button"
                               aria-expanded="false" aria-controls="sidebarEcommerce">
                                Users Module
                            </a>
                            <div class="collapse " id="user">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Add</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class="nav-link" href="ecommerce-product-list.html">Manage</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarEcommerce-->
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div>
        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
<!-- end leftbar-tab-menu-->

<!-- Top Bar Start -->
<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom" id="navbar-custom">
        <ul class="list-unstyled topbar-nav float-end mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('/')}}admin/assets/images/flags/us_flag.jpg" alt="" class="thumb-xxs rounded-circle">
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><img src="{{asset('/')}}admin/assets/images/flags/us_flag.jpg" alt="" height="15" class="me-2">English</a>
                    <a class="dropdown-item" href="#"><img src="{{asset('/')}}admin/assets/images/flags/spain_flag.jpg" alt="" height="15" class="me-2">Spanish</a>
                    <a class="dropdown-item" href="#"><img src="{{asset('/')}}admin/assets/images/flags/germany_flag.jpg" alt="" height="15" class="me-2">German</a>
                    <a class="dropdown-item" href="#"><img src="{{asset('/')}}admin/assets/images/flags/french_flag.jpg" alt="" height="15" class="me-2">French</a>
                </div>
            </li><!--end topbar-language-->

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-mail"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Emails <span class="badge bg-soft-primary badge-pill">3</span>
                    </h6>
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="{{asset('/')}}admin/assets/images/users/user-1.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="{{asset('/')}}admin/assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="{{asset('/')}}admin/assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="{{asset('/')}}admin/assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <img src="{{asset('/')}}admin/assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle">
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="ti ti-bell"></i>
                    <span class="alert-badge"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                    <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                        Notifications <span class="badge bg-soft-primary badge-pill">2</span>
                    </h6>
                    <div class="notification-menu" data-simplebar>
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-chart-arcs"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">10 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-device-computer-camera"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">40 min ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-diamond"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">1 hr ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-drone"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                    <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                        <!-- item-->
                        <a href="#" class="dropdown-item py-3">
                            <small class="float-end text-muted ps-2">2 hrs ago</small>
                            <div class="media">
                                <div class="avatar-md bg-soft-primary">
                                    <i class="ti ti-users"></i>
                                </div>
                                <div class="media-body align-self-center ms-2 text-truncate">
                                    <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                    <small class="text-muted mb-0">Dummy text of the printing.</small>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a><!--end-item-->
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('/')}}admin/assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                        <div>
                            <small class="d-none d-md-block font-11">Admin</small>
                            <span class="d-none d-md-block fw-semibold font-12">Saiful Islam<i
                                    class="mdi mdi-chevron-down"></i></span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                    <div class="dropdown-divider mb-0"></div>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(), document.getElementById('logoutForm').submit();">
                        <i class="ti ti-power font-16 me-1 align-text-bottom"></i>
                        Logout
                    </a>
                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                        @csrf
                    </form>
                </div>
            </li><!--end topbar-profile-->
            <li class="notification-list">
                <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                    <i class="ti ti-settings ti-spin"></i>
                </a>
            </li>
        </ul><!--end topbar-nav-->

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                    <i class="ti ti-menu-2"></i>
                </button>
            </li>
            <li class="hide-phone app-search">
                <form role="search" action="#" method="get">
                    <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                    <button type="submit"><i class="ti ti-search"></i></button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
<!-- Top Bar End -->

<div class="page-wrapper">

    @yield('body')

</div>
<!-- end page-wrapper -->

<!-- Javascript  -->
<!-- vendor js -->

<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/feather-icons/feather.min.js"></script>

<script src="{{asset('/')}}admin/assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/pages/analytics-index.init.js"></script>
<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>

<!-- Datatable js -->

<script src="{{asset('/')}}admin/assets/libs/simple-datatables/umd/simple-datatables.js"></script>
<script src="{{asset('/')}}admin/assets/js/pages/datatable.init.js"></script>

<script>
    function getSubCategoryByCategory($categoryId) {
        $.ajax({
            type: "GET",
            url: "{{route('get-sub-category-by-category')}}",
            data: {'id' : $categoryId},
            DataType: "JSON",
            success: function (response) {
                var options = '';
                options += '<option value=""> -- Select Sub Category -- </option>';
                $.each (response, function (key, value) {
                    options += '<option value="'+value.id+'"> '+value.name+' </option>';
                });
                $('#subCategory1').empty().append(options);
            }
        });
    }
</script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,  // Set the height of the editor
            placeholder: 'Enter Long Description',
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>

</body>
<!--end body-->

</html>
