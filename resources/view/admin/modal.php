<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description"
    content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc." />

  <title>Modal - Sleek Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
    rel="stylesheet" />

  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

  <!-- No Extra plugin used -->

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

  <!-- ====================================
    ——— WRAPPER
    ===================================== -->
  <div class="wrapper">
    <!-- Github Link -->

    <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <div class="app-brand">
          <a href="index.php" title="Sleek Dashboard">
            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
              height="33" viewBox="0 0 30 33">
              <g fill="none" fill-rule="evenodd">
                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8
                    4V0zM22 4v25l8 4V0z" />
                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8
                      4V0z" />
              </g>
            </svg>
            <span class="brand-name text-truncate">KC - ADMIN</span>
          </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%">
          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">
            <li class="has-sub active expand">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-view-dashboard-outline"></i>
                <span class="nav-text">Dashboard</span> <b class="caret"></b>
              </a>

              <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="active">
                    <a class="sidenav-item-link" href="index.php">
                      <span class="nav-text">Ecommerce</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                aria-expanded="false" aria-controls="components">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">Components</span> <b class="caret"></b>
              </a>

              <ul class="collapse" id="components" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="modal.php">
                      <span class="nav-text">Modal</span>
                    </a>
                  </li>
                  <li class="">
                    <a class="sidenav-item-link" href="switcher.php">
                      <span class="nav-text">Switcher</span>
                    </a>
                  </li>

                  <li class="">
                    <a class="sidenav-item-link" href="tab.php">
                      <span class="nav-text">Tab</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                aria-expanded="false" aria-controls="icons">
                <i class="mdi mdi-diamond-stone"></i>
                <span class="nav-text">Icons</span> <b class="caret"></b>
              </a>

              <ul class="collapse" id="icons" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="material-icon.php">
                      <span class="nav-text">Material Icon</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>

            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                aria-expanded="false" aria-controls="forms">
                <i class="mdi mdi-email-mark-as-unread"></i>
                <span class="nav-text">Forms</span> <b class="caret"></b>
              </a>

              <ul class="collapse" id="forms" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="basic-input.php">
                      <span class="nav-text">Basic Input</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>

            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tables"
                aria-expanded="false" aria-controls="tables">
                <i class="mdi mdi-table"></i>
                <span class="nav-text">Tables</span> <b class="caret"></b>
              </a>

              <ul class="collapse" id="tables" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                      data-target="#data-tables" aria-expanded="false" aria-controls="data-tables">
                      <span class="nav-text">Data Tables</span>
                      <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="data-tables">
                      <div class="sub-menu">
                        <li class="">
                          <a href="responsive-data-table.php">Responsive Data Table</a>
                        </li>
                        <li class="">
                          <a href="expendable-data-table.php">Expendable Data Table</a>
                        </li>
                      </div>
                    </ul>
                  </li>
                </div>
              </ul>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-pie"></i>
                <span class="nav-text">Charts</span> <b class="caret"></b>
              </a>

              <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="">
                      <span class="nav-text">Chart</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                aria-expanded="false" aria-controls="pages">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">Pages</span> <b class="caret"></b>
              </a>

              <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="user-profile.php">
                      <span class="nav-text">User Profile</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>
        <div class="sidebar-footer">
          <hr class="separator mb-0" />
        </div>
      </div>
    </aside>
    <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
    <div class="page-wrapper">
      <!-- Header -->
      <header class="main-header" id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- search form -->
          <div class="search-form d-none d-lg-inline-block">
            <div class="input-group">
              <button type="button" name="search" id="search-btn" class="btn btn-flat">
                <i class="mdi mdi-magnify"></i>
              </button>
              <input type="text" name="query" id="search-input" class="form-control"
                placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
            </div>
            <div id="search-results-container">
              <ul id="search-results"></ul>
            </div>
          </div>

          <div class="navbar-right">
            <ul class="nav navbar-nav">
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                  <span class="d-none d-lg-inline-block">Abdus Salam</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->
                  <li class="dropdown-header">
                    <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                    <div class="d-inline-block">
                      Abdus Salam
                      <small class="pt-1">iamabdus@gmail.com</small>
                    </div>
                  </li>

                  <li>
                    <a href="user-profile.phpindex.php">
                      <i class="mdi mdi-account"></i> My Profile
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
      <div class="content-wrapper">
        <div class="content">
          <div class="breadcrumb-wrapper">
            <h1>Modal</h1>

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb p-0">
                <li class="breadcrumb-item">
                  <a href="index.php">
                    <span class="mdi mdi-home"></span>
                  </a>
                </li>
                <li class="breadcrumb-item">components</li>
                <li class="breadcrumb-item" aria-current="page">modal</li>
              </ol>
            </nav>
          </div>

          <div class="row">
            <div class="col-lg-6 col-xl-4">
              <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                  <h2>Default Modal</h2>
                </div>

                <div class="card-body">
                  <p class="mb-5">
                    Use Bootstrap’s JavaScript modal plugin to add dialogs to
                    your site. Read bootstrap documentaion for<a
                      href="https://getbootstrap.com/docs/4.6/components/modal/#modal-components" target="_blank">
                      more details.</a>
                  </p>

                  <button type="button" class="btn btn-primary btn-pill" data-toggle="modal"
                    data-target="#exampleModal">
                    Launch Demo Modal
                  </button>
                </div>
              </div>
            </div>

          


            </div>
            <div class="col-lg-6 col-xl-4">
              <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                  <h2>Form Modal Content</h2>
                </div>

                <div class="card-body">
                  <p class="mb-5">
                    You can use form structure in your modal. Read bootstrap
                    documentaion for<a href="https://getbootstrap.com/docs/4.6/components/modal/#varying-modal-content"
                      target="_blank">
                      more details.
                    </a>
                  </p>

                  <button type="button" class="btn btn-info btn-pill" data-toggle="modal"
                    data-target="#exampleModalForm">
                    Launch Demo Modal
                  </button>
                </div>
              </div>
            </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">
                    Modal Title
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">Modal body text goes here.</div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn btn-primary btn-pill">
                    Save Changes
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Long Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">
                    Modal Title
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  Cras mattis consectetur purus sit amet fermentum. Cras justo
                  odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                  risus, porta ac consectetur ac, vestibulum at eros. Praesent
                  commodo cursus magna, vel scelerisque nisl consectetur et.
                  Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                  dolor auctor. Aenean lacinia bibendum nulla sed consectetur.
                  Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla
                  non metus auctor fringilla. Cras mattis consectetur purus
                  sit amet fermentum. Cras justo odio, dapibus ac facilisis
                  in, egestas eget quam. Morbi leo risus, porta ac consectetur
                  ac, vestibulum at eros. Praesent commodo cursus magna, vel
                  scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                  augue laoreet rutrum faucibus dolor auctor. Aenean lacinia
                  bibendum nulla sed consectetur. Praesent commodo cursus
                  magna, vel scelerisque nisl consectetur et. Donec sed odio
                  dui. Donec ullamcorper nulla non metus auctor fringilla.
                  Cras mattis consectetur purus sit amet fermentum. Cras justo
                  odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                  risus, porta ac consectetur ac, vestibulum at eros. Praesent
                  commodo cursus magna, vel scelerisque nisl consectetur et.
                  Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                  dolor auctor. Aenean lacinia bibendum nulla sed consectetur.
                  Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla
                  non metus auctor fringilla. Cras mattis consectetur purus
                  sit amet fermentum. Cras justo odio, dapibus ac facilisis
                  in, egestas eget quam. Morbi leo risus, porta ac consectetur
                  ac, vestibulum at eros. Praesent commodo cursus magna, vel
                  scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                  augue laoreet rutrum faucibus dolor auctor. Aenean lacinia
                  bibendum nulla sed consectetur. Praesent commodo cursus
                  magna, vel scelerisque nisl consectetur et. Donec sed odio
                  dui. Donec ullamcorper nulla non metus auctor fringilla.
                  Cras mattis consectetur purus sit amet fermentum. Cras justo
                  odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                  risus, porta ac consectetur ac, vestibulum at eros. Praesent
                  commodo cursus magna, vel scelerisque nisl consectetur et.
                  Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                  dolor auctor. Aenean lacinia bibendum nulla sed consectetur.
                  Praesent commodo cursus magna, vel scelerisque nisl
                  consectetur et. Donec sed odio dui. Donec ullamcorper nulla
                  non metus auctor fringilla. Cras mattis consectetur purus
                  sit amet fermentum. Cras justo odio, dapibus ac facilisis
                  in, egestas eget quam. Morbi leo risus, porta ac consectetur
                  ac, vestibulum at eros. Praesent commodo cursus magna, vel
                  scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                  augue laoreet rutrum faucibus dolor auctor. Aenean lacinia
                  bibendum nulla sed consectetur. Praesent commodo cursus
                  magna, vel scelerisque nisl consectetur et. Donec sed odio
                  dui. Donec ullamcorper nulla non metus auctor fringilla.
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn btn-primary btn-pill">
                    Save Changes
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Tooltip Modal -->
          <div class="modal fade" id="exampleModalTooltip" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalTooltip" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle2">
                    Modal Title
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <h5>Popover in a modal</h5>
                  <p>
                    This
                    <a href="#" role="button" class="btn btn-secondary popover-test" data-toggle="popover"
                      title="Popover title" data-content="Popover body content is set in this attribute.">button</a>
                    triggers a popover on click.
                  </p>
                  <hr />
                  <h5>Tooltips in a modal</h5>
                  <p>
                    <a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">This link</a>
                    and
                    <a href="#" class="tooltip-test" data-toggle="tooltip" title="Tooltip">that link</a>
                    have tooltips on hover.
                  </p>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn btn-primary btn-pill">
                    Save Changes
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Grid Modal -->
          <div class="modal fade" id="exampleModalGrid" tabindex="-1" role="dialog" aria-labelledby="exampleModalGrid"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalGridTitle">
                    Modal Title
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-4">.col-md-4</div>
                        <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                      </div>

                      <div class="row">
                        <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                        <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                      </div>

                      <div class="row">
                        <div class="col-sm-9">
                          Level 1: .col-sm-9
                          <div class="row">
                            <div class="col-8 col-sm-6">
                              Level 2: .col-8 .col-sm-6
                            </div>
                            <div class="col-4 col-sm-6">
                              Level 2: .col-4 .col-sm-6
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn btn-primary btn-pill">
                    Save Changes
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Form Modal -->
          <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalFormTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalFormTitle">
                    Modal Title
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" />
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                    </div>

                    <div class="form-check pl-0">
                      <label class="control control-checkbox">Check me out
                        <input type="checkbox" checked="checked" />
                        <div class="control-indicator"></div>
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                  </form>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn btn-primary btn-pill">
                    Save Changes
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Large Modal -->
          <div class="modal fade" id="exampleModallarge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLarge"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLarge">
                    Modal Title
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">Modal body text goes here.</div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn btn-primary btn-pill">
                    Save Changes
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Small Modal -->
          <div class="modal fade" id="exampleModalsmall" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalSmallTitle" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalSmallTitle">
                    Modal Title
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">Modal body text goes here.</div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn btn-primary btn-pill">
                    Save Changes
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Content -->
      </div>
      <!-- End Content Wrapper -->

      <!-- Footer -->
      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            Copyright &copy; <span id="copy-year"></span> a template by
            <a class="text-primary" href="https://themefisher.com" target="_blank">Themefisher</a>.
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>
    </div>
    <!-- End Page Wrapper -->
  </div>
  <!-- End Wrapper -->

  <!-- Javascript -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/simplebar/simplebar.min.js"></script>

  <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet" />
  <script src="assets/options/optionswitcher.js"></script>
</body>

</html>