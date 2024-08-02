<?php if(isset($_POST['addCoffee'])){
	// echo "hey"; 
} ?>

<?php include ('partials/header.php'); ?>
<?php include ('partials/sidebar.php'); ?>
<style type="text/css">
	.selWidth{
    	width: 150px;
    }

    .custominp{
    	height: inherit;
	    line-height: 1.5;
	    border: 1px solid #ededf5 !important;
	    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .badge{
    	font-size: medium!important;
    }
</style>

<div class="main-content app-content">
	<div class="main-container container-fluid">
		<div class="breadcrumb-header justify-content-between">
			<div>
				<h4 class="content-title mb-2" style="text-transform: uppercase;">Coffee</h4>
			</div>
			<div class="d-flex my-auto">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
						<li class="breadcrumb-item active " aria-current="page">Coffee Management </li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row row-sm">
			<div class="col-lg-12">
				<div class="card overflow-hidden">
					<div class="card-header pd-b-0 pd-t-20 bd-b-0 bg-head">
						<div class="d-flex justify-content-between">
							<h3 class="card-title mg-b-10">Coffee Table</h3>
							<div class="dropdown" style="margin-bottom:10px">
								<a href="javascript:void(0)" class="btn btn-sm bg-primary-gradient" title="Add new coffee" data-bs-target="#modaldemo1" data-bs-toggle="modal"><b> + Coffee</b></a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table border-top-0  table-bordered text-nowrap border-bottom" id="responsive-datatable">
								<thead>
									<tr>
										<th class="text-center wd-15p border-bottom-0">S. No.</th>
										<th class="text-center wd-15p border-bottom-0">Coffee Name</th>
										<th class="text-center wd-20p border-bottom-0">Type</th>
										<th class="text-center wd-15p border-bottom-0">Price</th>
										<th class="text-center wd-10p border-bottom-0">Beans Type</th>
										<th class="text-center wd-25p border-bottom-0">Status</th>
										<th class="text-center wd-25p border-bottom-0">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php 
								$query = "SELECT * FROM coffee";
								$result = $conn->query($query);
								$sno = '';
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										$sno++;
								?>
									<tr>
										<td class="text-center"><?php echo $sno; ?></td>
										<td class="text-center"><?php echo $row['coffee_name']; ?></td>
										<td class="text-center"><?php echo $row['type']; ?></td>
										<td class="text-center"><?php echo $row['price']; ?></td>
										<td class="text-center"><?php echo $row['beans_type']; ?></td>
										<td class="text-center">
											<div class="main-toggle main-toggle-success <?php if($row['status'] == 'A'){ ?> on <?php }?>" style="border-radius: 22px;" data-id="<?php echo $row['id']; ?>">
												<span style="border-radius: 22px;"></span>
												<input type="hidden" id="statusId_<?php echo $row['id']; ?>" value="<?php echo $row['status']; ?>">
											</div>
										</td>
										<td class="text-center">
											<a href="javascript:void(0)" class="btn btn-sm bg-info" title="Edit details" data-bs-target="#modaldemo2" data-bs-toggle="modal"><i class="fa fa-edit" ></i></a>
										</td>
									</tr>
								<?php }} ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- modal box to add coffee -->
<div class="modal" id="modaldemo1">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-demo">
			<form id="addCoffeeForm" method="post" enctype="multipart/form-data">
				<div class="modal-header bg-head">
					<h6 class="modal-title text-center">Add New Coffee</h6>
					<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body" style="background-color: #f6f6f6;">
					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Coffee Name</label> 
						<input class="form-control" type="text" id="coffeeNameInp" placeholder="Enter coffee name">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="coffeeNameError">This field can not be empty.</p>
					</div>
										
					<div class="form-group">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Select Type Of Coffee</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<select class="form-control select2-no-search" id="selectTypeOfCoffee">
											<option label="Select Coffee"></option>
											<option value="Single Origin">Single Origin</option>
											<option value="Blend">Blend</option>
										</select>
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="typeOfCoffeeError">Please select type of coffee.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Select Type Of Beans</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<select class="form-control select2-no-search" id="selectTypeOfBeans">
											<option label="Select Beans"></option>
											<option value="Medium Roasted">Medium Roasted</option>
											<option value="Highly Roasted">Highly Roasted</option>
										</select>
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="typeofBeansError">Please select type of beans.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Enter Price</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<input class="form-control" id="priceInp" type="text" placeholder="Enter coffee price">
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="priceError">Enter price</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Upload Image</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<input class="form-control" id="imageInp" type="file">
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="imageError">Upload</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Coffee Description</label> 
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

<!-- modal box to edit coffee -->
<div class="modal" id="modaldemo2">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-demo">
			<form id="addCoffeeForm" method="post" enctype="multipart/form-data">
				<div class="modal-header bg-head">
					<h6 class="modal-title text-center">Edit Coffee Details</h6>
					<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body" style="background-color: #f6f6f6;">
					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Coffee Name</label> 
						<input class="form-control" type="text" name="coffee_name" id="coffeeNameEditInp" placeholder="Enter coffee name">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="coffeeNameEditError">This field can not be empty.</p>
					</div>
										
					<div class="form-group">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Select Type Of Coffee</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<select class="form-control select2-no-search" name="type_of_coffee" id="selectTypeOfCoffeeEdit">
											<option label="Select Coffee"></option>
											<option value="Single Origin">Single Origin</option>
											<option value="Blend">Blend</option>
										</select>
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="typeOfCoffeeEditError">Please select type of coffee.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Select Type Of Beans</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<select class="form-control select2-no-search" name="type_of_beans" id="selectTypeOfBeansEdit">
											<option label="Select Beans"></option>
											<option value="Medium Roasted">Medium Roasted</option>
											<option value="Highly Roasted">Highly Roasted</option>
										</select>
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="typeofBeansEditError">Please select type of beans.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Enter Price</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<input class="form-control" name="price" id="priceEditInp" type="text" placeholder="Enter coffee price">
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="priceEditError">Enter price</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Upload Image</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<input class="form-control" name="image" id="imageEditInp" type="file">
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="imageEditError">Upload</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Coffee Description</label> 
						<textarea class="form-control" name="description" id="descriptionEditInp" placeholder="Enter full description of coffee..."></textarea>
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="descriptionEditError">Please enter coffee description.</p>
					</div>
				</div>
				
				<div class="modal-footer bg-head">
					<input class="form-control" name="coffee_id" id="coffee_id" type="hidden">
					<button type="submit" class="btn btn-primary" name="editCoffee"> Edit</a>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.main-toggle').on('click', function() {
		$(this).toggleClass('on');

		var id = $(this).data('id');

	    var hiddenInput = $('#statusId_' + id);

	    if ($(this).hasClass('on')) {
	        hiddenInput.val(1); 
	        updateStatus(0,id)
	    } else {
	        hiddenInput.val(0); 
	        updateStatus(1,id)
	    }
	})

	function updateStatus(status,id){
		$.ajax({
			type: 'POST',
			url: 'functions/coffee/update_status.php',
			data: {
				status:status,
				id:id
			},
			success: function(result){
				if(result == '1'){
					console.log("status updated");
				}else{
					alert('Something went wrong! Please contact admin.');
				}
			}
	  	});
	}

</script>
<?php include ('partials/footer.php'); ?>
