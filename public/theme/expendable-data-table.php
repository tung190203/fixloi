<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description"
		content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc." />

	<title>Expendable Data Table - Sleek Admin Dashboard Template</title>

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
		rel="stylesheet" />

	<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

	<!-- No Extra plugin used -->

	<link href="assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet" />

	<link href="assets/plugins/data-tables/jquery.datatables.min.css" rel="stylesheet" />

	<!-- SLEEK CSS -->
	<link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

	<!-- FAVICON -->
	<link href="assets/img/favicon.png" rel="shortcut icon" />

	

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
					<div class="breadcrumb-wrapper">
						<h1>Tables</h1>

						<nav aria-label="breadcrumb">
							<ol class="breadcrumb p-0">
								<li class="breadcrumb-item">
									<a href="index.php">
										<span class="mdi mdi-home"></span>
									</a>
								</li>
								<li class="breadcrumb-item">data-tables</li>
								<li class="breadcrumb-item" aria-current="page">
									expendable-data-table
								</li>
							</ol>
						</nav>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom d-flex justify-content-between">
									<h2>Expendable Data Table</h2>

								</div>

								<div class="card-body">
									<div class="expendable-data-table">
										<table id="expendable-data-table" class="table display nowrap"
											style="width: 100%">
											<thead>
												<tr>
													<th></th>
													<th>First name</th>
													<th>Last name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
													<th>Extn.</th>
													<th>E-mail</th>
													
												
												</tr>
											</thead>

											<tbody>
												<tr>
													<td class="details-control"></td>
													<td>Tiger</td>
													<td>Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
													<td>5421</td>
													<td>t.nixon@datatables.net</td>
												</tr>

												<tr>
													<td class="details-control"></td>
													<td>Garrett</td>
													<td>Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>2011/07/25</td>
													<td>$170,750</td>
													<td>8422</td>
													<td>g.winters@datatables.net</td>
												</tr>

												<tr>
													<td class="details-control"></td>
													<td>Ashton</td>
													<td>Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>2009/01/12</td>
													<td>$86,000</td>
													<td>1562</td>
													<td>a.cox@datatables.net</td>
												</tr>

												<tr>
													<td class="details-control"></td>
													<td>Cedric</td>
													<td>Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2012/03/29</td>
													<td>$433,060</td>
													<td>6224</td>
													<td>c.kelly@datatables.net</td>
												</tr>

												<tr>
													<td class="details-control"></td>
													<td>Airi</td>
													<td>Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>2008/11/28</td>
													<td>$162,700</td>
													<td>5407</td>
													<td>a.satou@datatables.net</td>
												</tr>

												<tr>
													<td class="details-control"></td>
													<td>Brielle</td>
													<td>Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td>2012/12/02</td>
													<td>$372,000</td>
													<td>4804</td>
													<td>b.williamson@datatables.net</td>
												</tr>

												<tr>
													<td class="details-control"></td>
													<td>Herrod</td>
													<td>Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
													<td>9608</td>
													<td>h.chandler@datatables.net</td>
												</tr>

												<tr>
													<td class="details-control"></td>
													<td>Rhona</td>
													<td>Davidson</td>
													<td>Integration Specialist</td>
													<td>Tokyo</td>
													<td>55</td>
													<td>2010/10/14</td>
													<td>$327,900</td>
													<td>6200</td>
													<td>r.davidson@datatables.net</td>
												</tr>

												<tr>
													<td class="details-control"></td>
													<td>Colleen</td>
													<td>Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
													<td>2360</td>
													<td>c.hurst@datatables.net</td>
												</tr>
												<tr>
													<td class="details-control"></td>
													<td>Colleen</td>
													<td>Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
													<td>2360</td>
													<td>c.hurst@datatables.net</td>
												</tr>
												<tr>
													<td class="details-control"></td>
													<td>Colleen</td>
													<td>Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
													<td>2360</td>
													<td>c.hurst@datatables.net</td>
												</tr>
												<tr>
													<td class="details-control"></td>
													<td>Colleen</td>
													<td>Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
													<td>2360</td>
													<td>c.hurst@datatables.net</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>		
				</div>
				<!-- End Content -->
			</div>
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

	<script src="assets/plugins/data-tables/jquery.datatables.min.js"></script>
	<script src="assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>

	<script src="assets/js/sleek.js"></script>
	<link href="assets/options/optionswitch.css" rel="stylesheet" />
	<script src="assets/options/optionswitcher.js"></script>
</body>

</html>

<script>
	/* Formatting function for row details - modify as you need */
	function format() {
		return (
			'<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
			"<tr>" +
			"<td>Full name:</td>" +
			"<td>Name...</td>" +
			"</tr>" +
			"<tr>" +
			"<td>Extension number:</td>" +
			"<td>123</td>" +
			"</tr>" +
			"<tr>" +
			"<td>Extra info:</td>" +
			"<td>And any further details here (images etc)...</td>" +
			"</tr>" +
			"</table>"
		);
	}

	$(document).ready(function () {
		var table = $("#expendable-data-table").DataTable({
			className: "details-control",
			order: [[0, "asc"]],
			aLengthMenu: [
				[10,20, 30, 50, 75, -1],
				[10,20, 30, 50, 75, "All"],
			],
			pageLength: 10,
			dom: '<"row align-items-center justify-content-between top-information"lf>rt<"row align-items-center justify-content-between bottom-information"ip><"clear">',
		});

		// Add event listener for opening and closing details
		$("#expendable-data-table tbody").on(
			"click",
			"td.details-control",
			function () {
				var tr = $(this).closest("tr");
				var row = table.row(tr);

				if (row.child.isShown()) {
					// This row is already open - close it
					row.child.hide();
					tr.removeClass("shown");
				} else {
					// Open this row
					row.child(format(row.data())).show();
					tr.addClass("shown");
				}
			}
		);
	});
</script>