<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin
      Dashboard Template and UI Kit. It is very powerful bootstrap admin
      dashboard, which allows you to build products like admin panels, content
      management systems and CRMs etc." />

  <!-- theme meta -->
  <meta name="theme-name" content="sleek" />

  <title>Klassy -Cafe Admin Dashboard</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
    rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets_admin/plugins/simplebar/simplebar.css" rel="stylesheet" />
  <link href="assets_admin/plugins/nprogress/nprogress.css" rel="stylesheet" />

  <!-- No Extra plugin used -->
  <link href="assets_admin/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets_admin/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  <link href="assets_admin/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet" />

<link href="assets_admin/plugins/data-tables/jquery.datatables.min.css" rel="stylesheet" />
  <link href="assets_admin/plugins/toastr/toastr.min.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets_admin/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets_admin/img/favicon.png" rel="shortcut icon" />
  <script src="assets_admin/plugins/nprogress/nprogress.js"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  <div class="wrapper">
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <div class="app-brand">
          <a href="/home-admin" title="Sleek Dashboard">
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
                    <a class="sidenav-item-link" href="<?= ROOT_PATH?>home">
                      <span class="nav-text">Home</span>
                    </a>
                  </li>
                </div>
                <div class="sub-menu">
                  <li class="active">
                    <a class="sidenav-item-link" href="<?= ROOT_PATH?>home-admin">
                      <span class="nav-text">Statistic</span>
                    </a>
                  </li>
                </div>
               
              </ul>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                aria-expanded="false" aria-controls="components">
                <i class="mdi mdi-folder-multiple-outline"></i>
                <span class="nav-text">Synthetic</span> <b class="caret"></b>
              </a>

              <ul class="collapse" id="components" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="<?= ROOT_PATH?>product-admin">
                      <span class="nav-text">Products</span>
                    </a>
                  </li>
                  <li class="">
                    <a class="sidenav-item-link" href="<?= ROOT_PATH?>categories-admin">
                      <span class="nav-text">Categories</span>
                    </a>
                  </li>
                  <li class="">
                    <a class="sidenav-item-link" href="<?= ROOT_PATH?>user-admin">
                      <span class="nav-text">User</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tables"
                aria-expanded="false" aria-controls="tables">
                <i class="mdi mdi-table"></i>
                <span class="nav-text">Table</span> <b class="caret"></b>
              </a>

              <ul class="collapse" id="tables" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="<?= ROOT_PATH?>table-admin">
                      <span class="nav-text">Table</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            <!-- <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                aria-expanded="false" aria-controls="pages">
                <i class="mdi mdi-settings"></i>
                <span class="nav-text">Settings</span> <b class="caret"></b>
              </a>

              <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                <div class="sub-menu">
                  <li class="">
                    <a class="sidenav-item-link" href="user-profile.php">
                      <span class="nav-text">Profile</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li> -->
          </ul>
        </div>
        <div class="sidebar-footer">
          <hr class="separator mb-0" />
        </div>
      </div>
    </aside>
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
                  <img src="assets_admin/img/user/user.png" class="user-image" alt="User Image" />
                  <span class="d-none d-lg-inline-block">Nguyễn Thanh Tùng</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->
                  <li class="dropdown-header">
                    <img src="assets_admin/img/user/user.png" class="img-circle" alt="User Image" />
                    <div class="d-inline-block">
                      Nguyễn Thanh Tùng
                      <small class="pt-1">Tungntph19820@fpt.edu.vn</small>
                    </div>
                  </li>
                  <li>
                    <a href="/user-profile">
                      <i class="mdi mdi-account"></i> My Profile
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>