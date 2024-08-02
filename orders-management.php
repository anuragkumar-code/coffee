<?php include ('partials/header.php'); ?>
<?php include ('partials/sidebar.php'); ?>


<div class="main-content app-content">
	<div class="main-container container-fluid">
		<div class="breadcrumb-header justify-content-between">
			<div>
				<h4 class="content-title mb-2" style="text-transform: uppercase;">Orders Table</h4>
			</div>
			<div class="d-flex my-auto">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
						<li class="breadcrumb-item active " aria-current="page">Orders Management </li>
					</ol>
				</nav>
			</div>
		</div>

		<div class="row row-sm">
			<div class="col-lg-12">
				<div class="card overflow-hidden">
					<div class="card-header pd-b-0 pd-t-20 bd-b-0 bg-head">
						<div class="d-flex justify-content-between">
							<h3 class="card-title mg-b-10">Orders</h3>
							<div class="dropdown d-none" style="margin-bottom:10px">
								<a href="javascript:void(0)" class="btn btn-sm bg-primary-gradient" title="Add new business customer" data-bs-target="#modaldemo1" data-bs-toggle="modal"><b> + Business Customer</b></a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table border-top-0  table-bordered text-nowrap border-bottom" id="responsive-datatable">
								<thead>
									<tr>
										<th class="text-center wd-15p border-bottom-0">S. No.</th>
										<th class="text-center wd-15p border-bottom-0">Order ID</th>
										<th class="text-center wd-20p border-bottom-0">Coffee</th>
										<th class="text-center wd-15p border-bottom-0">Customer Name</th>
										<th class="text-center wd-15p border-bottom-0">Quantity</th>
										<th class="text-center wd-10p border-bottom-0">Price</th>
										<th class="text-center wd-25p border-bottom-0">Status</th>
										<th class="text-center wd-25p border-bottom-0">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php 
								$query = "SELECT orders.*, coffee.coffee_name AS coffee_name, users.name AS user_name FROM orders JOIN coffee ON orders.coffee_id = coffee.id JOIN users ON orders.user_id = users.id";
								$result = $conn->query($query);
								$sno = '';
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$sno++;
								?>
									<tr id="tr_<?php echo $sno; ?>">
										<td class="text-center"><?php echo $sno; ?></td>
										<td class="text-center">
											<a class="badge bg-pill bg-primary-transparent" onclick="loadOrderDetails('<?php echo $row['order_id']; ?>','<?php echo $sno; ?>')" title="Click here to check order status" href="javascript:void(0)"><?php echo $row["order_id"]; ?></a>
										</td>
										<td class="text-center"><?php echo $row["coffee_name"]; ?></td>
										<td class="text-center"><?php echo $row["user_name"]; ?></td>
										<td class="text-center"><?php echo $row["quantity"]; ?></td>
										<td class="text-center"><?php echo $row["price"]; ?></td>
										<td class="text-center">
											<span class="badge bg-primary"><?php echo $row["status"]; ?></span>
										</td>
										<td class="text-center">
											<a href="javascript:void(0)" class="btn btn-sm bg-info" title="Click here to update order status" data-bs-target="#modaldemo1" data-bs-toggle="modal"><i class="fa fa-edit" ></i></a>
										</td>
									</tr>
								<?php } } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- modal box to update order status -->
<div class="modal" id="modaldemo1">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-demo">
			<form id="updateOrderForm" method="post" enctype="multipart/form-data">
				<div class="modal-header bg-head">
					<h6 class="modal-title text-center">Update Status</h6>
					<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body" style="background-color: #f6f6f6;">
					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Order ID</label> 
						<input class="form-control" type="text" name="orderIdInp" id="orderInp" placeholder="Enter coffee name" readonly>
					</div>
										
					<div class="form-group">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Enter Title</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<input class="form-control" type="text" name="titleInp" id="titleInp" placeholder="Enter title">
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="titleError">Please enter title.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Select Status</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<select class="form-control select2-no-search" id="statusInp">
											<option label="Select Status"></option>
											<option value="Accepted">Accepted</option>
											<option value="Preparing">Preparing</option>
											<option value="Shipped">Shipped</option>
											<option value="Delivered">Delivered</option>
										</select>
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="statusError">Please select status.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Upload File</label> 
						<input class="form-control" type="file" name="fileInp" id="fileInp">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="statusError">Please upload file.</p>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Message Description</label> 
						<textarea class="form-control" id="descriptionInp" placeholder="Enter full description of coffee..."></textarea>
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="descriptionError">Please enter coffee description.</p>
					</div>
				</div>
				
				<div class="modal-footer bg-head">
					<a class="btn btn-secondary" onclick="resetForm(event)">Reset </a>
					<button type="submit" class="btn btn-primary" name="addCoffee"> + Add</a>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	function loadOrderDetails(orderid,row){
		$.ajax({
			type: 'POST',
			url: 'functions/orders/load_order_details.php',
			data: {
				orderid:orderid,
				row:row
			},
			success: function(response){
				$('#tr_'+row).after(response);
			}
	  	});
	}
	
</script>
<?php include('partials/footer.php'); ?>