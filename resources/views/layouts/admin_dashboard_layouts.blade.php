<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.bootstrapdash.com/demo/corona/jquery/template/modern-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jan 2022 02:36:28 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plimarks Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin_assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin_assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/admin_assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/admin_assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/admin_assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/admin_assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/admin_assets/css/modern-vertical/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/admin_assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        {{-- <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
                    <div class="ps-lg-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-admin-template/?utm_source=navbar&amp;utm_medium=productdemo&amp;utm_campaign=getpro"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-admin-template/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html"><img class="img-fluid"
                        src="/admin_assets/images/plimarks2.jpg"
                        alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html">
                    <img class="img-fluid"
                        src="/admin_assets/images/plimarks2.jpg"
                        alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="/admin_assets/images/faces/face15.jpg"
                                    alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                                <span>Welcome Onboard</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="index.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{route('all.users')}}">
                        <span class="menu-icon">
                            <i class="mdi mdi-texture"></i>
                        </span>
                        <span class="menu-title">All Users</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="{{ route('product_category') }}"aria-expanded="false"
                        aria-controls="page-layouts">
                        <span class="menu-icon">
                            <i class="mdi mdi-view-list"></i>
                        </span>
                        <span class="menu-title">Product Categories</span>
                        {{-- <i class="menu-arrow"></i> --}}
                    </a>
                    {{-- <div class="collapse" id="page-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/layout/boxed-layout.html">Boxed</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/layout/rtl-layout.html">RTL</a>
                            </li>
                        </ul>
                    </div> --}}
                {{-- </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                        aria-controls="sidebar-layouts">
                        <span class="menu-icon">
                            <i class="mdi mdi-crosshairs-gps"></i>
                        </span>
                        <span class="menu-title">Sidebar Layouts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sidebar-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact
                                    menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon
                                    menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar
                                    Hidden</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar
                                    Fixed</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon">
                            <i class="mdi mdi-laptop"></i>
                        </span>
                        <span class="menu-title">Basic UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/accordions.html">Accordions</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress
                                    bar</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/pagination.html">Pagination</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                        aria-controls="ui-advanced">
                        <span class="menu-icon">
                            <i class="mdi mdi-settings"></i>
                        </span>
                        <span class="menu-title">Advanced Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/dragula.html">Dragula</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/clipboard.html">Clipboard</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/context-menu.html">Context menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Slider</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/loaders.html">Loaders</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/colcade.html">Colcade</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/carousel.html">Carousel</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/ui-features/tooltips.html">Tooltips</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                        aria-controls="form-elements">
                        <span class="menu-icon">
                            <i class="mdi mdi-playlist-play"></i>
                        </span>
                        <span class="menu-title">Form Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/forms/basic_elements.html">Basic
                                    Form</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/forms/advanced_elements.html">Advanced Form</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/forms/validation.html">Validation</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false"
                        aria-controls="tables">
                        <span class="menu-icon">
                            <i class="mdi mdi-table-large"></i>
                        </span>
                        <span class="menu-title">Tables</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic
                                    table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data
                                    table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="pages/tables/sortable-table.html">Sortable table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#editors" aria-expanded="false"
                        aria-controls="editors">
                        <span class="menu-icon">
                            <i class="mdi mdi-format-text"></i>
                        </span>
                        <span class="menu-title">Editors</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="editors">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/forms/text_editor.html">Text
                                    editors</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/forms/code_editor.html">Code
                                    Editor</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false"
                        aria-controls="charts">
                        <span class="menu-icon">
                            <i class="mdi mdi-chart-bar"></i>
                        </span>
                        <span class="menu-title">Charts</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google
                                    charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline
                                    js</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false"
                        aria-controls="maps">
                        <span class="menu-icon">
                            <i class="mdi mdi-map-marker-radius"></i>
                        </span>
                        <span class="menu-title">Maps</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google
                                    Maps</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapeal</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector
                                    map</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/ui-features/notifications.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-bell-ring"></i>
                        </span>
                        <span class="menu-title">Notifications</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false"
                        aria-controls="icons">
                        <span class="menu-icon">
                            <i class="mdi mdi-contacts"></i>
                        </span>
                        <span class="menu-title">Icons</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag
                                    icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font
                                    Awesome</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple
                                    line icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify
                                    icons</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">More</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/ui-features/popups.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-forum"></i>
                        </span>
                        <span class="menu-title">Popups</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                        aria-controls="auth">
                        <span class="menu-icon">
                            <i class="mdi mdi-security"></i>
                        </span>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register
                                </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register
                                    2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html">
                                    Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
                        aria-controls="general-pages">
                        <span class="menu-icon">
                            <i class="mdi mdi-earth"></i>
                        </span>
                        <span class="menu-title">General Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="general-pages">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank
                                    Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio
                                </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html">
                                    Search Results </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid
                                </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline
                                </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false"
                        aria-controls="error">
                        <span class="menu-icon">
                            <i class="mdi mdi-lock"></i>
                        </span>
                        <span class="menu-title">Error pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="error">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false"
                        aria-controls="e-commerce">
                        <span class="menu-icon">
                            <i class="mdi mdi-medical-bag"></i>
                        </span>
                        <span class="menu-title">E-commerce</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="e-commerce">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html">
                                    Pricing Table </a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/apps/calendar.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-calendar-today"></i>
                        </span>
                        <span class="menu-title">Calendar</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/apps/todo.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-bulletin-board"></i>
                        </span>
                        <span class="menu-title">Todo list</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/apps/email.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-email"></i>
                        </span>
                        <span class="menu-title">E-mail</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/apps/gallery.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-image-filter-center-focus-weak"></i>
                        </span>
                        <span class="menu-title">Gallery</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link"
                        href="http://www.bootstrapdash.com/demo/corona/jquery/documentation/documentation.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">Documentation</span>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img
                            src="https://www.bootstrapdash.com/demo/corona/jquery/template/admin_assets/images/logo-mini.svg"
                            alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New
                                Project</a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="createbuttonDropdown">
                                <h6 class="p-3 mb-0">Projects</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-file-outline text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-web text-info"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">UI Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-layers text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all projects</p>
                            </div>
                        </li>
                        <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="/admin_assets/images/faces/face4.jpg" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                        <p class="text-muted mb-0"> 1 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="/admin_assets/images/faces/face2.jpg" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                        <p class="text-muted mb-0"> 15 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="/admin_assets/images/faces/face3.jpg" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                        <p class="text-muted mb-0"> 18 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">4 new messages</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown"
                                href="#" data-bs-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <h6 class="p-3 mb-0">Notifications</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-calendar text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Event today</p>
                                        <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event
                                            today </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                        <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-link-variant text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Launch Admin</p>
                                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="/admin_assets/images/faces/face15.jpg"
                                        alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name"> {{ Auth::user()->name }}</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }} " method="post">@csrf
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <button class="btn btn-primary px-3"><i class="text-white" data-feather="log-in">
                                        </i>Logout</button>
                                    </div>
                                </a>
                                </form>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                @yield('content')


                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023
                            <a href="https://www.bootstrapdash.com/" target="_blank">Plimarks.com</a>. All rights
                            reserved.</span>
                        <span
                            class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted
                            & made with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/admin_assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/admin_assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin_assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/admin_assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/admin_assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin_assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="/admin_assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/admin_assets/js/off-canvas.js"></script>
    <script src="/admin_assets/js/hoverable-collapse.js"></script>
    <script src="/admin_assets/js/misc.js"></script>
    <script src="/admin_assets/js/settings.js"></script>
    <script src="/admin_assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/admin_assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

<!-- Mirrored from www.bootstrapdash.com/demo/corona/jquery/template/modern-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jan 2022 02:37:27 GMT -->

</html>
