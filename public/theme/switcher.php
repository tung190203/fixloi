<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description"
		content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc." />

	<title>Switcher - Sleek Admin Dashboard Template</title>

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
						<h1>Switcher</h1>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb p-0">
								<li class="breadcrumb-item">
									<a href="index.php">
										<span class="mdi mdi-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">components</li>
								<li class="breadcrumb-item" aria-current="page">switcher</li>
							</ol>
						</nav>
					</div>

					<div class="row">
		
						<div class="col-lg-6">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Switch Default Pills</h2>
								</div>

								<div class="card-body">
									<p class="mb-5">
										For switch pills Add class
										<code> .switch-pill switch-* </code> to
										<code> &lt;label class="switch"&gt; </code>
									</p>

									<label class="switch switch-primary switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-secondary switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-success switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-info switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-warning switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-danger switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label"></span>
										<span class="switch-handle"></span>
									</label>
								</div>
							</div>
						</div>

				
						
					
				
					
						<div class="col-lg-6">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Switch with Text Pills</h2>
								</div>

								<div class="card-body">
									<p class="mb-5">
										For switch with text pill Add class
										<code> .switch-pill .switch-text .switch-* </code> to
										<code> &lt;label class="switch"&gt; </code>
									</p>

									<label class="switch switch-text switch-primary switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label" data-on="On" data-off="Off"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-text switch-secondary switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label" data-on="On" data-off="Off"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-text switch-success switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label" data-on="On" data-off="Off"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-text switch-info switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label" data-on="On" data-off="Off"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-text switch-warning switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label" data-on="On" data-off="Off"></span>
										<span class="switch-handle"></span>
									</label>

									<label class="switch switch-text switch-danger switch-pill form-control-label">
										<input type="checkbox" class="switch-input form-check-input" value="on"
											checked />
										<span class="switch-label" data-on="On" data-off="Off"></span>
										<span class="switch-handle"></span>
									</label>
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

	<script src="assets/js/sleek.js"></script>
	<link href="assets/options/optionswitch.css" rel="stylesheet" />
	<script src="assets/options/optionswitcher.js"></script>
</body>

</html>