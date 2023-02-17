<div class="content-wrapper">
	<div class="content">
		<div class="breadcrumb-wrapper">
			<h1>Tables</h1>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb p-0">
					<li class="breadcrumb-item">
						<a href="/home-admin">
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
						<div>
							<input type="button" value="Add" class="btn btn-info" data-toggle="modal" data-target="#exampleModalForm">

						</div>
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
										<th>Operation</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $values) :  ?>

										<tr>
											<td class="details-control"></td>
											<td><?= $values->Pr_id ?></td>
											<td><?= $values->Name_pr ?></td>
											<td><?= $values->Image ?></td>
											<td><?= $values->Description ?></td>
											<td><?= $values->Price ?></td>
											<td>
												<a href="<?= ROOT_PATH ?>update-product?Pr_id=<?= $values->Pr_id ?>"><input type="button" value="Update" class="btn btn-primary"></a>
												<a href="<?= ROOT_PATH ?>delete-product?Pr_id=<?= $values->Pr_id ?>"><input type="button" value="Delete" class="btn btn-danger"> </a>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
							<div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalFormTitle">
												Add Product
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="modal-body">
											<form action="<?= ROOT_PATH ?>product-admin" method="POST">
												<input type="hidden" name="Pr_id" value="<?= $values->Pr_id ?>">
												<div class="form-group">
													<label for="exampleInputEmail1">Product Name</label>
													<input type="text" class="form-control" id="exampleInputEmail1" "
                        						placeholder=" Enter Product Name" name="Name_pr" />
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Image</label>
													<input type="file" class="form-control" id="exampleInputEmail1" "
                        						placeholder=" Enter image" name="Image" />
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Description</label>
													<input type="text" class="form-control" id="exampleInputEmail1" "
                        						placeholder=" Enter Description" name="Description" />
												</div>
												<div class="form-group">
													<label for="">Categories</label>
													<select name="" id="" class="form-select">
														<?php foreach ($categories as $value) : ?>
															<option value="<?= $value->Cate_id ?>"><?= $value->Cate_name ?></option>
														<?php endforeach ?>
													</select>
												</div>

												<div class="form-group">
													<label for="exampleInputPassword1">Price</label>
													<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="Price" />
												</div>


												<input type="submit" value="Add" class="btn btn-primary " id="btnsm">
											</form>
										</div>
									</div>
								</div>
							</div>
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

<?php
require_once 'footer.php';
?>
<script>
	/* Formatting function for row details - modify as you need */
	function format() {
		return (

			'<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
			"<tr>" +
			"<td>More Infor:</td>" +
			"<td></td>" +
			"</tr>" +
			"</table>"
		);
	}

	$(document).ready(function() {
		var table = $("#expendable-data-table").DataTable({
			className: "details-control",
			order: [
				[0, "asc"]
			],
			aLengthMenu: [
				[10, 20, 30, 50, 75, -1],
				[10, 20, 30, 50, 75, "All"],
			],
			pageLength: 10,
			dom: '<"row align-items-center justify-content-between top-information"lf>rt<"row align-items-center justify-content-between bottom-information"ip><"clear">',
		});

		// Add event listener for opening and closing details
		$("#expendable-data-table tbody").on(
			"click",
			"td.details-control",
			function() {
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