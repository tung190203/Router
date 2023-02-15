<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description"
		content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc." />

	<title>General Widgets - Sleek Admin Dashboard Template</title>

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
		rel="stylesheet" />

	<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

	<!-- No Extra plugin used -->
	<link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />

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
					<!-- First Row  -->
					<div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="media widget-media p-4 bg-white border">
								<div class="icon rounded-circle mr-4 bg-primary">
									<i class="mdi mdi-account-outline text-white"></i>
								</div>

								<div class="media-body align-self-center">
									<h4 class="text-primary mb-2">5300</h4>
									<p>New Users</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="media widget-media p-4 bg-white border">
								<div class="icon rounded-circle bg-warning mr-4">
									<i class="mdi mdi-cart-outline text-white"></i>
								</div>

								<div class="media-body align-self-center">
									<h4 class="text-primary mb-2">1953</h4>
									<p>Order Placed</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="media widget-media p-4 bg-white border">
								<div class="icon rounded-circle mr-4 bg-danger">
									<i class="mdi mdi-cart-outline text-white"></i>
								</div>

								<div class="media-body align-self-center">
									<h4 class="text-primary mb-2">1450</h4>
									<p>Total Sales</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="media widget-media p-4 bg-white border">
								<div class="icon bg-success rounded-circle mr-4">
									<i class="mdi mdi-diamond text-white"></i>
								</div>

								<div class="media-body align-self-center">
									<h4 class="text-primary mb-2">9503</h4>
									<p>Monthly Revenue</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Second Row  -->
					<div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="media widget-media p-4 bg-white border">
								<i class="mdi mdi-account-outline text-blue mr-4"></i>

								<div class="media-body align-self-center">
									<h4 class="text-primary mb-2">5300</h4>
									<p>New Users</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="media widget-media p-4 rounded bg-white border">
								<i class="mdi mdi-cart-outline text-warning mr-4"></i>

								<div class="media-body align-self-center">
									<h4 class="text-primary mb-2">1953</h4>
									<p>Order Placed</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="media widget-media p-4 rounded bg-white border">
								<i class="mdi mdi-cart-outline text-danger mr-4"></i>

								<div class="media-body align-self-center">
									<h4 class="text-primary mb-2">1450</h4>
									<p>Total Sales</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="media widget-media p-4 rounded bg-white border">
								<i class="mdi mdi-diamond text-success mr-4"></i>

								<div class="media-body align-self-center">
									<h4 class="text-primary mb-2">9503</h4>
									<p>Monthly Revenue</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Third Row  -->
					<div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-white border">
								<div class="card-block">
									<i class="mdi mdi-account-outline text-blue mr-4"></i>
									<h4 class="text-primary my-2">5300</h4>
									<p>New Users</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-white border">
								<div class="card-block">
									<i class="mdi mdi-cart-outline text-warning mr-4"></i>
									<h4 class="text-primary my-2">1953</h4>
									<p>Order Placed</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-white border">
								<div class="card-block">
									<i class="mdi mdi-cart-outline text-danger mr-4"></i>
									<h4 class="text-primary my-2">1450</h4>
									<p>Total Sales</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-white border">
								<div class="card-block">
									<i class="mdi mdi-diamond text-success mr-4"></i>
									<h4 class="text-primary my-2">9503</h4>
									<p>Monthly Revenue</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Fourth Row  -->
					<div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-primary border">
								<div class="card-block">
									<i class="mdi mdi-account-outline mr-4 text-white"></i>
									<h4 class="text-white my-2">5300</h4>
									<p>New Users</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-warning border">
								<div class="card-block">
									<i class="mdi mdi-cart-outline mr-4 text-white"></i>
									<h4 class="text-white my-2">1953</h4>
									<p>Order Placed</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-danger border">
								<div class="card-block">
									<i class="mdi mdi-cart-outline mr-4 text-white"></i>
									<h4 class="text-white my-2">1450</h4>
									<p>Total Sales</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-success border">
								<div class="card-block">
									<i class="mdi mdi-diamond t mr-4 text-white"></i>
									<h4 class="text-white my-2">9503</h4>
									<p>Monthly Revenue</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Fifth Row  -->
					<div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-white border">
								<div class="card-block">
									<h4 class="text-primary my-2">90%</h4>
									<p class="pb-3">New Users</p>

									<div class="progress my-2" style="height: 5px">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
											aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-white border">
								<div class="card-block">
									<h4 class="text-primary my-2">50%</h4>
									<p class="pb-3">Order Placed</p>

									<div class="progress my-2" style="height: 5px">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
											aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-white border">
								<div class="card-block">
									<h4 class="text-primary my-2">70%</h4>
									<p class="pb-3">Total Sales</p>

									<div class="progress my-2" style="height: 5px">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 70%"
											aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-white border">
								<div class="card-block">
									<h4 class="text-primary my-2">80%</h4>
									<p class="pb-3">Monthly Revenue</p>

									<div class="progress my-2" style="height: 5px">
										<div class="progress-bar bg-success" role="progressbar" style="width: 80%"
											aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Sixth Row  -->
					<div class="row">
						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-primary border">
								<div class="card-block">
									<h4 class="text-white my-2">90%</h4>
									<p class="pb-3">New Users</p>

									<div class="progress my-2" style="height: 5px">
										<div class="progress-bar bg-white" role="progressbar" style="width: 90%"
											aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-warning border">
								<div class="card-block">
									<h4 class="text-white my-2">50%</h4>
									<p class="pb-3">Order Placed</p>

									<div class="progress my-2" style="height: 5px">
										<div class="progress-bar bg-white" role="progressbar" style="width: 50%"
											aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-danger border">
								<div class="card-block">
									<h4 class="text-white my-2">70%</h4>
									<p class="pb-3">Total Sales</p>

									<div class="progress my-2" style="height: 5px">
										<div class="progress-bar bg-white" role="progressbar" style="width: 70%"
											aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-6 col-xl-3">
							<div class="card widget-block p-4 rounded bg-success border">
								<div class="card-block">
									<h4 class="text-white my-2">80%</h4>
									<p class="pb-3">Monthly Revenue</p>

									<div class="progress my-2" style="height: 5px">
										<div class="progress-bar bg-white" role="progressbar" style="width: 80%"
											aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Seventh Row  -->
					<div class="row">
						<div class="col-xl-6">
							<!-- To Do list -->
							<div class="card card-default todo-table" id="todo">
								<div class="card-header d-block pb-0">
									<div class="todo-single-item mb-0" id="todo-input">
										<form class="todo-form">
											<div class="input-group mb-0">
												<input type="text" class="form-control border-right-0"
													placeholder="Add Todo" required="" autofocus />
												<div class="input-group-append ml-0">
													<button class="input-group-text border-0 btn bg-primary"
														type="submit">
														
														<svg xmlns="http://www.w3.org/2000/svg" height="18"
															viewBox="0 0 448 448" width="18" class="">
															<g>
																<path
																	d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0"
																	data-original="#000000" class="active-path"
																	data-old_color="#000000" fill="#FFFFFF" />
															</g>
														</svg>
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="card-body compact-to-do-list" data-simplebar style="height: 450px">
									<div class="todo-list" id="todo-list">
										<div id="item"
											class="todo-single-item todo-item d-flex flex-row justify-content-between finished alert alert-dismissible fade show"
											role="alert">
											<i class="mdi"></i>
											<span>Finish Dashboard UI Kit update</span>

											<div class="task-content">
												<span data-dismiss="alert" aria-label="Close">
													<svg class="remove-task" id="Capa_1"
														enable-background="new 0 0 515.556 515.556" height="16"
														viewBox="0 0 515.556 515.556" width="16"
														xmlns="http://www.w3.org/2000/svg">
														<path class=""
															d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z" />
														<path
															d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z" />
													</svg>
												</span>
											</div>
										</div>

										<div class="todo-single-item d-flex flex-row justify-content-between current alert alert-dismissible fade show"
											role="alert">
											<i class="mdi"></i>
											<span>Create new prototype for the landing page</span>

											<div class="task-content">
												<span data-dismiss="alert" aria-label="Close">
													<svg class="remove-task" id="Capa_1"
														enable-background="new 0 0 515.556 515.556" height="16"
														viewBox="0 0 515.556 515.556" width="16"
														xmlns="http://www.w3.org/2000/svg">
														<path class=""
															d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z" />
														<path
															d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z" />
													</svg>
												</span>
											</div>
										</div>

										<div class="todo-single-item d-flex flex-row justify-content-between alert alert-dismissible fade show"
											role="alert">
											<i class="mdi"></i>
											<span>Add new Google Analytics code to all main files sed
												auctor lacus in sem interdum, ac gravida tortor
												elementum. Cras magna enim.</span>

											<div class="task-content">
												<span data-dismiss="alert" aria-label="Close">
													<svg class="remove-task" id="Capa_1"
														enable-background="new 0 0 515.556 515.556" height="16"
														viewBox="0 0 515.556 515.556" width="16"
														xmlns="http://www.w3.org/2000/svg">
														<path class=""
															d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z" />
														<path
															d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z" />
													</svg>
												</span>
											</div>
										</div>

										<div class="todo-single-item d-flex flex-row justify-content-between alert alert-dismissible fade show"
											role="alert">
											<i class="mdi"></i>
											<span>Update parallax scroll on team page</span>

											<div class="task-content">
												<span data-dismiss="alert" aria-label="Close">
													<svg class="remove-task" id="Capa_1"
														enable-background="new 0 0 515.556 515.556" height="16"
														viewBox="0 0 515.556 515.556" width="16"
														xmlns="http://www.w3.org/2000/svg">
														<path class=""
															d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z" />
														<path
															d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z" />
													</svg>
												</span>
											</div>
										</div>

										<div class="todo-single-item d-flex flex-row justify-content-between alert alert-dismissible fade show"
											role="alert">
											<i class="mdi"></i>
											<span>Integer et porta odio, pulvinar pretium eros.
												Curabitur vel tellus erat.</span>

											<div class="task-content">
												<span data-dismiss="alert" aria-label="Close">
													<svg class="remove-task" id="Capa_1"
														enable-background="new 0 0 515.556 515.556" height="16"
														viewBox="0 0 515.556 515.556" width="16"
														xmlns="http://www.w3.org/2000/svg">
														<path class=""
															d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z" />
														<path
															d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z" />
													</svg>
												</span>
											</div>
										</div>

										<div class="todo-single-item d-flex flex-row justify-content-between alert alert-dismissible fade show"
											role="alert">
											<i class="mdi"></i>
											<span>Pellentesque blandit ut eros sed vehicula.</span>

											<div class="task-content">
												<span data-dismiss="alert" aria-label="Close">
													<svg class="remove-task" id="Capa_1"
														enable-background="new 0 0 515.556 515.556" height="16"
														viewBox="0 0 515.556 515.556" width="16"
														xmlns="http://www.w3.org/2000/svg">
														<path class=""
															d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z" />
														<path
															d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z" />
													</svg>
												</span>
											</div>
										</div>

										<div class="todo-single-item d-flex flex-row justify-content-between alert alert-dismissible fade show"
											role="alert">
											<i class="mdi"></i>
											<span>Lorem ipsum dolor sit amet, consectetur adipiscing
												elit. Donec felis ligula, fringilla in volutpat sit
												amet, viverra nec mi. Donec at dui dolor.</span>

											<div class="task-content">
												<span data-dismiss="alert" aria-label="Close">
													<svg class="remove-task" id="Capa_1"
														enable-background="new 0 0 515.556 515.556" height="16"
														viewBox="0 0 515.556 515.556" width="16"
														xmlns="http://www.w3.org/2000/svg">
														<path class=""
															d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z" />
														<path
															d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z" />
													</svg>
												</span>
											</div>
										</div>

										<div class="todo-single-item d-flex flex-row justify-content-between mb-1 alert alert-dismissible fade show"
											role="alert">
											<i class="mdi"></i>
											<span>Update parallax scroll on team page</span>

											<div class="task-content">
												<span data-dismiss="alert" aria-label="Close">
													<svg class="remove-task" id="Capa_1"
														enable-background="new 0 0 515.556 515.556" height="16"
														viewBox="0 0 515.556 515.556" width="16"
														xmlns="http://www.w3.org/2000/svg">
														<path class=""
															d="m64.444 451.111c0 35.526 28.902 64.444 64.444 64.444h257.778c35.542 0 64.444-28.918 64.444-64.444v-322.222h-386.666z" />
														<path
															d="m322.222 32.222v-32.222h-128.889v32.222h-161.111v64.444h451.111v-64.444z" />
													</svg>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="mt-3"></div>
							</div>
						</div>

						<div class="col-sm-12 col-xl-6">
							<!-- area chart -->
							<div class="card card-default">
								<div class="card-header d-block d-md-flex justify-content-between">
									<h2>World Wide Customer</h2>
									<div class="dropdown show d-inline-block widget-dropdown ml-auto">
										<a class="dropdown-toggle" href="#" role="button" id="world-dropdown"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											data-display="static">
											World Wide
										</a>
										<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="world-dropdown">
											<li class="dropdown-item">
												<a href="#">Continetal chart</a>
											</li>
											<li class="dropdown-item">
												<a href="#">Sub-continental</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-body vector-map-world">
									<div id="world" style="height: 100%; width: 100%"></div>
								</div>
								<div class="card-footer d-flex flex-wrap bg-white p-0">
									<div class="col-6">
										<div class="p-4">
											<ul class="d-flex flex-column justify-content-between">
												<li class="mb-2">
													<i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #29cc97"></i>America <span
														class="float-right">5k</span>
												</li>
												<li>
													<i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #4c84ff"></i>Australia <span
														class="float-right">3k</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-6">
										<div class="p-4 border-left">
											<ul class="d-flex flex-column justify-content-between">
												<li class="mb-2">
													<i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #ffa128"></i>Europe <span
														class="float-right">4k</span>
												</li>
												<li>
													<i class="mdi mdi-checkbox-blank-circle-outline mr-2"
														style="color: #fe5461"></i>Africa <span
														class="float-right">2k</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Eighth Row  -->
					<div class="row">
						<div class="col-sm-12 col-lg-6 col-xl-4">
							<div class="card card-table-border-none">
								<div class="card-header justify-content-between">
									<h2 class="d-inline-block">New Customers</h2>
									<div>
										<button class="text-black-50 mr-2 font-size-20">
											<i class="mdi mdi-cached"></i>
										</button>

										<div class="dropdown show d-inline-block widget-dropdown">
											<a class="dropdown-toggle icon-burger-mini" href="#" role="button"
												id="dropdown-customar" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false" data-display="static">
											</a>

											<ul class="dropdown-menu dropdown-menu-right"
												aria-labelledby="dropdown-customar">
												<li class="dropdown-item"><a href="#">Action</a></li>
												<li class="dropdown-item">
													<a href="#">Another action</a>
												</li>
												<li class="dropdown-item">
													<a href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="card-body pt-0" data-simplebar style="height: 437px">
									<table class="table">
										<tbody>
											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.phpindex.php"><img class="rounded-circle w-45"
																	src="assets/img/user/u1.jpg"
																	alt="customer image" /></a>
														</div>

														<div class="media-body align-self-center">
															<a href="profile.phpindex.php">
																<h6 class="mt-0 text-dark font-weight-medium">
																	Selena Wagner
																</h6>
															</a>
															<small>@selena.oi</small>
														</div>
													</div>
												</td>
												<td>2 Orders</td>
												<td class="text-dark d-none d-md-block">$150</td>
											</tr>

											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.phpindex.php"><img class="rounded-circle w-45"
																	src="assets/img/user/u2.jpg"
																	alt="customer image" /></a>
														</div>

														<div class="media-body align-self-center">
															<a href="profile.phpindex.php">
																<h6 class="mt-0 text-dark font-weight-medium">
																	Walter Reuter
																</h6>
															</a>
															<small>@walter.me</small>
														</div>
													</div>
												</td>
												<td>5 Orders</td>
												<td class="text-dark d-none d-md-block">$200</td>
											</tr>

											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.phpindex.php"><img class="rounded-circle w-45"
																	src="assets/img/user/u3.jpg"
																	alt="customer image" /></a>
														</div>

														<div class="media-body align-self-center">
															<a href="profile.phpindex.php">
																<h6 class="mt-0 text-dark font-weight-medium">
																	Larissa Gebhardt
																</h6>
															</a>
															<small>@larissa.gb</small>
														</div>
													</div>
												</td>
												<td>1 Order</td>
												<td class="text-dark d-none d-md-block">$50</td>
											</tr>

											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.phpindex.php"><img class="rounded-circle w-45"
																	src="assets/img/user/u4.jpg"
																	alt="customer image" /></a>
														</div>

														<div class="media-body align-self-center">
															<a href="profile.phpindex.php">
																<h6 class="mt-0 text-dark font-weight-medium">
																	Albrecht Straub
																</h6>
															</a>
															<small>@albrech.as</small>
														</div>
													</div>
												</td>
												<td>2 Orders</td>
												<td class="text-dark d-none d-md-block">$100</td>
											</tr>

											<tr>
												<td>
													<div class="media">
														<div class="media-image mr-3 rounded-circle">
															<a href="profile.phpindex.php"><img class="rounded-circle w-45"
																	src="assets/img/user/u5.jpg"
																	alt="customer image" /></a>
														</div>

														<div class="media-body align-self-center">
															<a href="profile.phpindex.php">
																<h6 class="mt-0 text-dark font-weight-medium">
																	Leopold Ebert
																</h6>
															</a>
															<small>@leopold.et</small>
														</div>
													</div>
												</td>
												<td>1 Order</td>
												<td class="text-dark d-none d-md-block">$60</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-lg-6 col-xl-4">
							<div class="card card-default">
								<div class="card-header justify-content-between align-items-center">
									<h2>Latest Notifications</h2>
									<div>
										<button class="text-black-50 mr-2 font-size-20">
											<i class="mdi mdi-cached"></i>
										</button>

										<div class="dropdown show d-inline-block widget-dropdown">
											<a class="dropdown-toggle icon-burger-mini" href="#" role="button"
												id="dropdown-notification" data-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false" data-display="static"></a>
											<ul class="dropdown-menu dropdown-menu-right"
												aria-labelledby="dropdown-notification">
												<li class="dropdown-item"><a href="#">Action</a></li>
												<li class="dropdown-item">
													<a href="#">Another action</a>
												</li>
												<li class="dropdown-item">
													<a href="#">Something else here</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="card-body" data-simplebar style="height: 421px">
									<div class="media py-3 align-items-center justify-content-between">
										<div
											class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
											<i class="mdi mdi-cart-outline font-size-20"></i>
										</div>

										<div class="media-body pr-3">
											<a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Order</a>
											<p>Selena has placed an new order</p>
										</div>

										<span class="font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
											10 AM</span>
									</div>

									<div class="media py-3 align-items-center justify-content-between">
										<div
											class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
											<i class="mdi mdi-email-outline font-size-20"></i>
										</div>

										<div class="media-body pr-3">
											<a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
											<p>Phileine has placed an new order</p>
										</div>
										<span class="font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
											9 AM</span>
									</div>

									<div class="media py-3 align-items-center justify-content-between">
										<div
											class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
											<i class="mdi mdi-stack-exchange font-size-20"></i>
										</div>

										<div class="media-body pr-3">
											<a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
											<p>Emma has placed an new order</p>
										</div>
										<span class="font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
											10 AM</span>
									</div>

									<div class="media py-3 align-items-center justify-content-between">
										<div
											class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
											<i class="mdi mdi-cart-outline font-size-20"></i>
										</div>

										<div class="media-body pr-3">
											<a class="mt-0 mb-1 font-size-15 text-dark" href="#">New order</a>
											<p>Ryan has placed an new order</p>
										</div>

										<span class="font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
											10 AM</span>
									</div>

									<div class="media py-3 align-items-center justify-content-between">
										<div
											class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
											<i class="mdi mdi-calendar-blank font-size-20"></i>
										</div>

										<div class="media-body pr-3">
											<a class="mt-0 mb-1 font-size-15 text-dark" href="">Comapny Meetup</a>
											<p>Phileine has placed an new order</p>
										</div>

										<span class="font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
											10 AM</span>
									</div>

									<div class="media py-3 align-items-center justify-content-between">
										<div
											class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
											<i class="mdi mdi-stack-exchange font-size-20"></i>
										</div>

										<div class="media-body pr-3">
											<a class="mt-0 mb-1 font-size-15 text-dark" href="#">Support Ticket</a>
											<p>Emma has placed an new order</p>
										</div>
										<span class="font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
											10 AM</span>
									</div>

									<div class="media py-3 align-items-center justify-content-between">
										<div
											class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
											<i class="mdi mdi-email-outline font-size-20"></i>
										</div>

										<div class="media-body pr-3">
											<a class="mt-0 mb-1 font-size-15 text-dark" href="#">New Enquiry</a>
											<p>Phileine has placed an new order</p>
										</div>

										<span class="font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i>
											9 AM</span>
									</div>
								</div>

								<div class="mt-3"></div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-12 col-xl-4">
							<div class="card card-default" Profile-data-height>
								<div class="card-header">
									<h2>Profile</h2>
								</div>

								<div class="card-body text-center">
									<img class="rounded-circle d-flex mx-auto" src="assets/img/user/u6.jpg"
										alt="user image" />
									<h4 class="py-2 text-dark">Albrecht Straub</h4>
									<p>Albrecht.straub@gmail.com</p>
									<a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
								</div>

								<div class="d-flex justify-content-between px-5 pb-4">
									<div class="text-center pb-4">
										<h6 class="text-dark pb-2">1503</h6>
										<p>Friends</p>
									</div>

									<div class="text-center pb-4">
										<h6 class="text-dark pb-2">2905</h6>
										<p>Followers</p>
									</div>

									<div class="text-center pb-4">
										<h6 class="text-dark pb-2">1200</h6>
										<p>Following</p>
									</div>
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

	<!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

	<!-- Javascript -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>

	<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
	<script src="assets/js/vector-map.js"></script>

	<script src="assets/js/sleek.js"></script>
	<link href="assets/options/optionswitch.css" rel="stylesheet" />
	<script src="assets/options/optionswitcher.js"></script>
</body>

</html>