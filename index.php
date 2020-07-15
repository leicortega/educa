<?php

require ('assets/php/validaciones/secure_login.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- ion Range Slider -->
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">


    <!-- Flatpickr -->
    <link type="text/css" href="assets/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">



</head>

<body class="layout-default">











    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">

            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                <!-- Header -->

                <div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall" data-retarget-mouse-scroll="false">
                    <div class="mdk-header__content">

                        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar" data-primary>
                            <div class="container-fluid page__container pr-0">

                                <!-- Navbar toggler -->
                                <button class="navbar-toggler navbar-toggler-custom  d-lg-none d-flex mr-navbar" type="button" data-toggle="sidebar">
                                    <span class="material-icons icon-14pt">menu</span>
                                </button>




                                <div class="navbar-collapse collapse" id="navbarsExample03">
                                    <ul class="nav navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">UI Components</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="ui-buttons.html">Buttons</a>
                                                <a class="dropdown-item" href="ui-alerts.html">Alerts</a>
                                                <a class="dropdown-item" href="ui-avatars.html">Avatars</a>
                                                <a class="dropdown-item" href="ui-modals.html">Modals</a>
                                                <a class="dropdown-item" href="ui-icons.html">Icons</a>
                                                <a class="dropdown-item" href="ui-range-sliders.html">Range Sliders</a>
                                                <a class="dropdown-item" href="ui-datetime.html">Time &amp; Date</a>
                                                <a class="dropdown-item" href="ui-tables.html">Tables</a>
                                                <a class="dropdown-item" href="ui-loaders.html">Loaders</a>
                                                <a class="dropdown-item" href="ui-drag.html">Drag &amp; Drop</a>
                                                <a class="dropdown-item" href="ui-pagination.html">Pagination</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="ui-forms.html">Forms</a>
                                                <a class="dropdown-item" href="ui-charts.html">Charts</a>
                                                <div class="dropdown-divider"></div>
                                                <div class="dropdown-header">Extras</div>
                                                <a class="dropdown-item" href="fullcalendar.html">Calendar</a>
                                                <a class="dropdown-item" href="ui-vector-maps.html">Vector Maps</a>

                                            </div>
                                        </li>
                                        <!-- <li class="nav-item ">
    <a class="nav-link" href="ui-forms.html">Forms</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link" href="ui-charts.html">Charts</a>
  </li> -->
                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layouts</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item active" href="index.html">Default</a>
                                                <!-- <a class="dropdown-item" href="fluid-index.html">Full Width Navs</a> -->
                                                <a class="dropdown-item" href="fixed-index.html">Fixed Navs</a>
                                                <a class="dropdown-item" href="mini-index.html">Mini Sidebar + Navs</a>
                                            </div>
                                        </li>
                                        <li>

                                    </ul>
                                </div>



                                <form class="ml-auto search-form search-form--light d-none d-sm-flex flex" action="index.html">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                                </form>


                                <ul class="nav navbar-nav d-none d-md-flex">
                                    <li class="nav-item dropdown">
                                        <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                            <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                        </a>
                                        <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                            <div class="dropdown-item d-flex align-items-center py-2">
                                                <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                                <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                            </div>
                                            <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                                <div class="py-2">

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#events-drawer" data-toggle="sidebar" class="nav-link d-flex align-items-center">
                                            <i class="material-icons nav-icon">event_note</i>
                                        </a>
                                    </li>
                                    <li class="nav-item nav-item-circle">
                                        <a href="#" class="nav-link d-flex align-items-center navbar-circle-link">
                                            <span class="rounded-circle">
                                                <span class="material-icons text-primary">flag</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="dropdown">
                                    <a href="#" data-toggle="dropdown" data-caret="false" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar">
                                        <span class="material-icons">laptop</span> My Dashboard
                                    </a>
                                    <div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                        <div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">

                                            <span class="mr-3">
                                                <img src="assets/images/frontted-logo-blue.svg" width="43" height="43" alt="avatar">
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="h5 m-0">Adrian D.</strong>
                                                <small class="text-muted text-uppercase">STUDENT</small>
                                            </span>

                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item d-flex align-items-center py-2" href="edit-account.html">
                                            <span class="material-icons mr-2">account_circle</span> Edit Account
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                            <span class="material-icons mr-2">settings</span> Settings
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center py-2" href="login.html">
                                            <span class="material-icons mr-2">exit_to_app</span> Logout
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- // END Header -->

                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">





                    <div class="page__heading">
                        <div class="container-fluid page__container">
                            <h1 class="mb-0">Dashboard</h1>
                        </div>
                    </div>
                    <div class="bg-white border-bottom mb-3">
                        <div class="container-fluid nav nav-tabs" role="tablist">
                            <a href="#activity_all" class="active" data-toggle="tab" role="tab" aria-controls="activity_all" aria-selected="true">Overview</a>
                            <a href="#activity_purchases" data-toggle="tab" role="tab" aria-selected="false">Pricing</a>
                        </div>
                    </div>
                    <div class="container-fluid page__container">
                        <div class="tab-content">
                            <div class="tab-pane active show fade" id="activity_all">
                                <!-- FIRST TAB CONTENT -->
                                <div class="row card-group-row">
                                    <div class="col-lg-4 col-md-6 card-group-row__col">
                                        <div class="card card-group-row__card">
                                            <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                                                <div class="flex">
                                                    <div class="card-header__title text-muted mb-2 d-flex">Current Month <span class="badge badge-warning ml-2">391</span></div>
                                                    <span class="h4 m-0">&dollar;24,000 <small class="text-muted"> / &dollar;50,000</small> </span>
                                                </div>
                                                <div><i class="material-icons icon-muted icon-40pt ml-3">monetization_on</i></div>
                                            </div>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 card-group-row__col">
                                        <div class="card card-group-row__card">
                                            <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                                                <div class="flex">
                                                    <div class="card-header__title text-muted d-flex mb-2">Current Year <span class="badge badge-primary ml-2">2019</span></div>
                                                    <span class="h4 m-0">&dollar;48,229 </span>
                                                </div>
                                                <div><i class="material-icons icon-muted icon-40pt ml-3">gps_fixed</i></div>
                                            </div>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 card-group-row__col">
                                        <div class="card card-group-row__card">
                                            <div class="card-body-x-lg card-body d-flex flex-row align-items-center">
                                                <div class="flex">
                                                    <div class="card-header__title text-muted mb-2">Top Grossing</div>

                                                    <div class="d-flex align-items-center">
                                                        <div class="h4 m-0">&dollar;13,531 </div>
                                                        <div class="progress ml-1" style="width:100%;height: 3px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div><i class="material-icons icon-muted icon-40pt ml-3">contacts</i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header card-header-large bg-light d-flex align-items-center">
                                                <div class="flex">
                                                    <h4 class="card-header__title">Earnings</h4>
                                                    <div class="card-subtitle text-muted">Your recent courses</div>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="author-earnings.html" class="btn btn-light">Browse All</a>
                                                </div>
                                            </div>

                                            <div class="card-body">

                                                <div class="chart" style="height: 295px;">
                                                    <canvas id="viewsChart">
                                                        <span style="font-size: 1rem;"><strong>Views</strong> area chart goes here.</span>
                                                    </canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">

                                        <div class="card">
                                            <div class="card-header card-header-large bg-light d-flex align-items-center">
                                                <div class="flex">
                                                    <h4 class="card-header__title">Rankings</h4>
                                                    <div class="card-subtitle text-muted">Current Month Earnings</div>
                                                </div>

                                                <div class="dropdown ml-auto">
                                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Go to Report</a>
                                                        <a class="dropdown-item" href="#">Other Statistics</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Archive</a>
                                                    </div>
                                                </div>

                                            </div>


                                            <ul class="list-group list-rankings">

                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <span class="mr-2">1.</span>
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                                        <div class="media-body">
                                                            <a href="#">Tara Knows</a>
                                                        </div>
                                                        <div>&dollar;29,021</div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <span class="mr-2">2.</span>
                                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                                        <div class="media-body">
                                                            <a href="#">Karen Smith</a>
                                                        </div>
                                                        <div>&dollar;25,250</div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <span class="mr-2">3.</span>
                                                        <img src="assets/images/256_michael-dam-258165-unsplash.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                                        <div class="media-body">
                                                            <a href="#">Mark Ups</a>
                                                        </div>
                                                        <div>&dollar;21,330</div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <span class="mr-2">4.</span>
                                                        <img src="assets/images/256_s-a-r-a-h-s-h-a-r-p-764291-unsplash.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                                        <div class="media-body">
                                                            <a href="#">Steven Short</a>
                                                        </div>
                                                        <div>&dollar;17,740</div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="media align-items-center">
                                                        <span class="mr-2">5.</span>
                                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg" class="img-fluid rounded-circle mr-2" width="30" alt="...">
                                                        <div class="media-body">
                                                            <a href="#">John Mix</a>
                                                        </div>
                                                        <div>&dollar;13,120</div>
                                                    </div>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <!-- END FIRST TAB CONTENT -->
                            </div>
                            <div class="tab-pane fade" id="activity_purchases">
                                <!-- SECOND TAB CONTENT -->



                                <div class="row card-group-row  pt-2">

                                    <div class="col-md-6 col-lg-4 card-group-row__col">
                                        <div class="card card-group-row__card pricing__card">

                                            <div class="card-body d-flex flex-column">
                                                <div class="text-center">
                                                    <h4 class="pricing__title mb-0">Personal</h4>
                                                    <div class="d-flex align-items-center justify-content-center border-bottom-2 flex pb-3">
                                                        <span class="pricing__amount headings-color">29</span>
                                                        <span class="d-flex flex-column">
                                                            <span class="pricing__currency text-dark-gray text-left">USD</span>
                                                            <span class="pricing__duration text-dark-gray">*monthly</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card-body d-flex flex-column">

                                                    <ul class="list-unstyled pricing__features">

                                                        <li>HTML/SCSS/JS</li>

                                                        <li>6 Months Support</li>

                                                    </ul>

                                                    <a href="https://www.frontted.com/admins/educate-learning-app-theme" class="btn btn-secondary mt-auto">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4 card-group-row__col">
                                        <div class="card card-group-row__card pricing__card pricing__card--popular">

                                            <span class="pricing__card-badge">most popular</span>

                                            <div class="card-body d-flex flex-column">
                                                <div class="text-center">
                                                    <h4 class="pricing__title mb-0">Developers</h4>
                                                    <div class="d-flex align-items-center justify-content-center border-bottom-2 flex pb-3">
                                                        <span class="pricing__amount headings-color">59</span>
                                                        <span class="d-flex flex-column">
                                                            <span class="pricing__currency text-dark-gray text-left">USD</span>
                                                            <span class="pricing__duration text-dark-gray">*monthly</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card-body d-flex flex-column">

                                                    <ul class="list-unstyled pricing__features">

                                                        <li>HTML/SCSS/JS</li>

                                                        <li>6 Months Support</li>

                                                        <li>HTML/SCSS/JS</li>

                                                        <li>6 Months Support</li>

                                                    </ul>

                                                    <a href="https://www.frontted.com/admins/educate-learning-app-theme" class="btn btn-primary mt-auto">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4 card-group-row__col">
                                        <div class="card card-group-row__card pricing__card">

                                            <div class="card-body d-flex flex-column">
                                                <div class="text-center">
                                                    <h4 class="pricing__title mb-0">Personal</h4>
                                                    <div class="d-flex align-items-center justify-content-center border-bottom-2 flex pb-3">
                                                        <span class="pricing__amount headings-color">199</span>
                                                        <span class="d-flex flex-column">
                                                            <span class="pricing__currency text-dark-gray text-left">USD</span>
                                                            <span class="pricing__duration text-dark-gray">*monthly</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card-body d-flex flex-column">

                                                    <ul class="list-unstyled pricing__features">

                                                        <li>HTML/SCSS/JS</li>

                                                        <li>6 Months Support</li>

                                                        <li>HTML/SCSS/JS</li>

                                                        <li>6 Months Support</li>

                                                        <li>HTML/SCSS/JS</li>

                                                        <li>6 Months Support</li>

                                                    </ul>

                                                    <a href="https://www.frontted.com/admins/educate-learning-app-theme" class="btn btn-secondary mt-auto">Purchase Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- END SECOND TAB -->
                            </div>
                            <div class="tab-pane fade" id="activity_emails">
                                Ducimus aperiam aut corporis, facere nobis id quos dignissimos, ut corrupti asperiores reprehenderit culpa praesentium exercitationem, officia commodi.
                            </div>
                            <div class="tab-pane fade" id="activity_quotes">
                                Odit consectetur dolore maxime similique qui officia deserunt fugiat quo tempore consequuntur dicta ratione sint commodi eum eligendi, magnam aliquid expedita quas accusantium, sed nobis tenetur illum mollitia. Quis ipsum tenetur distinctio tempore vitae atque quam.
                            </div>
                        </div>
                    </div>


                </div>
                <!-- // END header-layout__content -->

            </div>
            <!-- // END header-layout -->

        </div>
        <!-- // END drawer-layout__content -->

        <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark sidebar-left bg-dark-gray" data-perfect-scrollbar>

                    <div class="d-flex align-items-center sidebar-p-a sidebar-account flex-shrink-0">
                        <a href="index.html" class="flex d-flex align-items-center text-underline-0">
                            <span class="mr-3">
                                <!-- LOGO -->
                                <svg width="30px" viewBox="0 0 27 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="drawer-logo-wrapper" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                        <path d="M21.9257604,14.9506975 C20.582703,15.0217165 19.3145795,14.3502722 18.6558508,13.2193504 C18.5961377,13.1299507 18.488013,13.0821416 18.3788008,13.0968482 C18.2695887,13.1115549 18.1791809,13.1860986 18.1471473,13.287853 L16.3403333,18.8266167 C16.0783106,19.5012544 15.4036423,19.9432488 14.6567374,19.9295884 C13.9098324,19.915928 13.2530282,19.4495818 13.0177202,18.7658483 L10.3561926,9.20532122 C10.3224612,9.0828362 10.2066255,8.99820016 10.075223,9.00002907 C9.94382048,9.00185799 9.83056595,9.0896826 9.8005142,9.21305538 C9.53809432,10.6490488 9.07561673,12.0442508 8.42563983,13.3607751 C7.81040896,14.4321066 6.59978897,15.0547797 5.33446397,14.9506975 L0.286383595,14.9506975 C0.200836429,14.9508269 0.119789989,14.987678 0.0652579686,15.0512416 C0.0105052402,15.1148427 -0.011403821,15.1989481 0.00568007946,15.2799517 C1.26517458,21.5063521 6.92177656,26 13.500072,26 C20.0783674,26 25.7349694,21.5063521 26.9944639,15.2799517 C27.0112295,15.1987308 26.9894777,15.1145345 26.935158,15.050392 C26.8808383,14.9862496 26.7996356,14.9488738 26.7137603,14.9484877 C23.5217604,14.9499609 21.9257604,14.9506975 21.9257604,14.9506975 Z" opacity="0.539999962"></path>
                                        <path d="M5.48262697,13.1162874 C6.53570764,13.1162874 6.62233928,13.1162874 7.63604194,9.25361392 C7.86780969,8.37139838 8.14008055,7.33311522 8.48548201,6.11058557 C8.7087856,5.42413873 9.37946641,4.96506482 10.1258577,4.98776578 C10.8742462,4.96784002 11.5440567,5.43246093 11.761733,6.1225074 L14.4619398,15.7986995 C14.4940991,15.9151627 14.6022445,15.9971672 14.7273152,15.9999282 C14.8523859,16.0026893 14.9643174,15.9255432 15.0019812,15.8106214 L16.5152221,11.1654422 C16.7421482,10.5403405 17.3447552,10.1140124 18.0318383,10.0924774 C18.6964712,10.0434044 19.3301356,10.3708193 19.6553377,10.9313408 C19.7678463,11.1405147 19.8803549,11.3453535 19.9759873,11.5426056 C20.6296623,12.8128226 20.8198019,13.1119522 21.7761252,13.1119522 L26.7186288,13.1119522 C26.7943575,13.1119652 26.8669186,13.0826781 26.9200192,13.030667 C26.9730799,12.97881 27.0019231,12.9083695 26.9999003,12.8355824 C26.9032945,5.71885474 20.8862135,-0.00118613704 13.4977698,1.84496545e-07 C6.10932623,0.00118650603 0.0942250201,5.72315932 8.19668591e-05,12.8399177 C-0.00175692205,12.9131783 0.0274115935,12.9840093 0.080884445,13.0361333 C0.134357296,13.0882573 0.207535985,13.1171917 0.283603687,13.1162874 L5.48262697,13.1162874 Z" id="Shape"></path>
                                    </g>
                                </svg>
                            </span>
                            <span class="flex d-flex flex-column">
                                <span class="sidebar-brand">Edusta</span>
                                <small>Next Generation</small>
                            </span>
                        </a>
                    </div>


                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="index.html">

                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">photo_filter</i>
                                <span class="sidebar-menu-text">Overview</span>
                            </a>
                        </li>
                    </ul>

                    <div class="sidebar-heading">Student</div>
                    <div class="sidebar-block p-0">
                        <ul class="sidebar-menu mt-0">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-dashboard.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">star_half</i>
                                    <span class="sidebar-menu-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-courses.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">queue_play_next</i>
                                    <span class="sidebar-menu-text">Courses</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-course-purchase.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">shopping_cart</i>
                                    <span class="sidebar-menu-text">Purchase Course</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-lessons.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                                    <span class="sidebar-menu-text">Browse Lessons</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-quiz.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i>
                                    <span class="sidebar-menu-text">Take Quiz</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-discussions.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">forum</i>
                                    <span class="sidebar-menu-text">Discussions</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="edit-account.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">settings</i>
                                    <span class="sidebar-menu-text">Edit Account</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="student-billing.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">monetization_on</i>
                                    <span class="sidebar-menu-text">Billing</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="login.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">exit_to_app</i>
                                    <span class="sidebar-menu-text">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="sidebar-heading">Author</div>
                    <div class="sidebar-block p-0">
                        <ul class="sidebar-menu mt-0">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="author-dashboard.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                    <span class="sidebar-menu-text">Dashboard</span>
                                    <span class="badge badge-warning rounded-circle badge-notifications ml-auto">8</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="author-courses.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">layers</i>
                                    <span class="sidebar-menu-text">Courses</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="author-quiz-manager.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">assignment</i>
                                    <span class="sidebar-menu-text">Quiz Manager</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="author-earnings.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">local_atm</i>
                                    <span class="sidebar-menu-text">Earnings</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="author-reports.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart</i>
                                    <span class="sidebar-menu-text">Reports</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="author-payout.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">credit_card</i>
                                    <span class="sidebar-menu-text">Payout</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="login.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">exit_to_app</i>
                                    <span class="sidebar-menu-text">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-heading">Admin</div>
                    <div class="sidebar-block p-0">
                        <ul class="sidebar-menu mt-0">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="admin-dashboard.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                    <span class="sidebar-menu-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="admin-emails.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">email</i>
                                    <span class="sidebar-menu-text">Emails</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="admin-chat.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">comment</i>
                                    <span class="sidebar-menu-text">Chat</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="admin-tickets.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">local_offer</i>
                                    <span class="sidebar-menu-text">Tickets</span>
                                    <span class="badge badge-warning badge-notifications ml-auto">NEW</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="admin-trello.html">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">touch_app</i>
                                    <span class="sidebar-menu-text">Trello</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- // END drawer-layout -->

    <div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar>




                <small class="text-dark-gray px-3 py-1">
                    <strong>Thursday, 28 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Marketing Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Wednesday, 27 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>07:48 PM</small>
                                <small class="text-dark-gray">30 min</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Alex</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>



                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Tuesday, 26 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>03:13 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Design Team Meeting</strong></a>

                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                </div>
                                <div class="avatar-group mt-2">

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <small class="text-dark-gray px-3 py-1">
                    <strong>Monday, 25 Feb</strong>
                </small>

                <div class="list-group list-group-flush">

                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column">
                                <small>12:30 PM</small>
                                <small class="text-dark-gray">2 hrs</small>
                            </div>
                            <div class="col d-flex">
                                <div class="d-flex flex-column flex">
                                    <a href="#" class="text-body"><strong class="text-15pt">Call Wendy</strong></a>


                                    <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                </div>


                                <div class="avatar avatar-xs">
                                    <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-index.html',
      'fluid': 'fluid-index.html',
      'mini': 'mini-index.html'
    }"></app-settings>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="assets/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>


    <!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>

    <!-- Moment.js -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/moment-range.js"></script>


    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- App Charts JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/charts.js"></script>

    <!-- Chart Samples -->
    <script src="assets/js/page.analytics.js"></script>


</body>

</html>