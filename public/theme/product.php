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
					<li class="breadcrumb-item">Products</li>
					<li class="breadcrumb-item" aria-current="page">
						Products-data-table
					</li>
				</ol>
			</nav>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="card card-default">
					<div class="card-header card-header-border-bottom d-flex justify-content-between">
						<h2>Products-data-table</h2>

					</div>

					<div class="card-body">
						<div class="expendable-data-table">

							<table id="expendable-data-table" class="table display nowrap" style="width: 100%">
								<thead>
									<tr>
										<th></th>
										<th>Product ID</th>
										<th>Product Name</th>
										<th>Images</th>
										<th>Description</th>
										<th>Price</th>

									</tr>
								</thead>

								<tbody>
									<?php
										
									foreach ($result as  $values) {
										extract($values);
										if($Cate_id==1){
											$Cate_id = "Food";
										}elseif($Cate_id==3){
											$Cate_id= "Drinks";
										}
										?>
										<tr>
											<td class="details-control"></td>
											<td><?php echo $Pr_id  ?></td>
											<td><?php echo $Name_pr ?></td>
											<td><?php echo $Image ?></td>
											<td><?php echo $Description ?></td>
											<td><?php echo $Price ?></td>
										</tr>
									<?php
									}
									?>

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

<!-- End Page Wrapper -->
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
			"<td>Categories:</td>" +
			"<td><?php echo $Cate_id ?> </td>" +
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