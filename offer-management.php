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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<div class="main-content app-content">
	<div class="main-container container-fluid">
		<div class="breadcrumb-header justify-content-between">
			<div>
				<h4 class="content-title mb-2" style="text-transform: uppercase;">Peak Hours</h4>
			</div>
			<div class="d-flex my-auto">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
						<li class="breadcrumb-item active " aria-current="page">Peak Hours Management </li>
					</ol>
				</nav>
			</div>
		</div>
		<div class="row row-sm">
			<div class="col-lg-12">
				<div class="card overflow-hidden">
					<div class="card-header pd-b-0 pd-t-20 bd-b-0 bg-head">
						<div class="d-flex justify-content-between">
							<h3 class="card-title mg-b-10">Offer Table</h3>
							<div class="dropdown" style="margin-bottom:10px">
								<a href="javascript:void(0)" class="btn btn-sm bg-primary-gradient" title="Add new peak hours" data-bs-target="#modaldemo1" data-bs-toggle="modal"><b> + Peak Hours</b></a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table border-top-0  table-bordered text-nowrap border-bottom" id="responsive-datatable">
								<thead>
									<tr>
										<th class="text-center wd-15p border-bottom-0">S. No.</th>
										<th class="text-center wd-15p border-bottom-0">Date</th>
										<th class="text-center wd-15p border-bottom-0">From Time</th>
										<th class="text-center wd-20p border-bottom-0">To Time</th>
										<th class="text-center wd-15p border-bottom-0">Discount</th>
										<th class="text-center wd-25p border-bottom-0">Status</th>
										<th class="text-center wd-25p border-bottom-0">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$fet_users['status'] = 1;
										$fet_users['login_id'] = 3;

									?>
									<tr>
										<td class="text-center">1</td>
										<td class="text-center">20/23/2023</td>
										<td class="text-center">2 pm</td>
										<td class="text-center">4 pm</td>
										<td class="text-center">50%</td>
										<td class="text-center">
											<div class="main-toggle main-toggle-success <?php if($fet_users['status'] == 1){ ?> on <?php }?>" style="border-radius: 22px;" data-id="<?php echo $fet_users['login_id']; ?>">
												<span style="border-radius: 22px;"></span>
												<input type="hidden" id="statusId_<?php echo $fet_users['login_id']; ?>" value="<?php echo $fet_users['status']; ?>">
											</div>
										</td>
										<td class="text-center">
											<a href="javascript:void(0)" class="btn btn-sm bg-info" title="Edit details" data-bs-target="#modaldemo2" data-bs-toggle="modal"><i class="fa fa-edit" ></i></a>
										</td>
									</tr>
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
					<h6 class="modal-title text-center">Add New Offer</h6>
					<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body" style="background-color: #f6f6f6;">
					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Select Date</label> 
						<input class="form-control" type="date" id="dateInp" name="dateInp" placeholder="Enter coffee name">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="dateError">Please select date.</p>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Discount</label> 
						<input class="form-control" type="text" id="discountInp" name="discountInp" placeholder="Enter discount">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="discountError">Please enter discount.</p>
					</div>
										
					<div class="form-group">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">From Time</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<select class="form-control" id="fromTimeInp" name="fromTimeInp">
											<option label="Select from time"></option>
											<option value="12:00 AM">12:00 AM</option>
											<option value="01:00 AM">01:00 AM</option>
											<option value="02:00 AM">02:00 AM</option>
											<option value="03:00 AM">03:00 AM</option>
											<option value="04:00 AM">04:00 AM</option>
											<option value="05:00 AM">05:00 AM</option>
											<option value="06:00 AM">06:00 AM</option>
											<option value="07:00 AM">07:00 AM</option>
											<option value="08:00 AM">08:00 AM</option>
											<option value="09:00 AM">09:00 AM</option>
											<option value="10:00 AM">10:00 AM</option>
											<option value="11:00 AM">11:00 AM</option>
											<option value="12:00 PM">12:00 PM</option>
											<option value="01:00 PM">01:00 PM</option>
											<option value="02:00 PM">02:00 PM</option>
											<option value="03:00 PM">03:00 PM</option>
											<option value="04:00 PM">04:00 PM</option>
											<option value="05:00 PM">05:00 PM</option>
											<option value="06:00 PM">06:00 PM</option>
											<option value="07:00 PM">07:00 PM</option>
											<option value="08:00 PM">08:00 PM</option>
											<option value="09:00 PM">09:00 PM</option>
											<option value="10:00 PM">10:00 PM</option>
											<option value="11:00 PM">11:00 PM</option>
										</select>
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="fromTimeError">Please select from time.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">To Time</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<select class="form-control" id="toTimeInp" name="toTimeInp">
											<option label="Select to time"></option>
											<option value="12:00 AM">12:00 AM</option>
											<option value="01:00 AM">01:00 AM</option>
											<option value="02:00 AM">02:00 AM</option>
											<option value="03:00 AM">03:00 AM</option>
											<option value="04:00 AM">04:00 AM</option>
											<option value="05:00 AM">05:00 AM</option>
											<option value="06:00 AM">06:00 AM</option>
											<option value="07:00 AM">07:00 AM</option>
											<option value="08:00 AM">08:00 AM</option>
											<option value="09:00 AM">09:00 AM</option>
											<option value="10:00 AM">10:00 AM</option>
											<option value="11:00 AM">11:00 AM</option>
											<option value="12:00 PM">12:00 PM</option>
											<option value="01:00 PM">01:00 PM</option>
											<option value="02:00 PM">02:00 PM</option>
											<option value="03:00 PM">03:00 PM</option>
											<option value="04:00 PM">04:00 PM</option>
											<option value="05:00 PM">05:00 PM</option>
											<option value="06:00 PM">06:00 PM</option>
											<option value="07:00 PM">07:00 PM</option>
											<option value="08:00 PM">08:00 PM</option>
											<option value="09:00 PM">09:00 PM</option>
											<option value="10:00 PM">10:00 PM</option>
											<option value="11:00 PM">11:00 PM</option>
										</select>
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="toTimeError">Please select to time.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Offer Description</label> 
						<textarea class="form-control" id="descriptionInp" name="offerDescription" placeholder="Enter full description of offer..."></textarea>
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="descriptionError">Please enter offer description.</p>
					</div>
				</div>
				
				<div class="modal-footer bg-head">
					<a class="btn btn-secondary" onclick="resetForm(event)">Reset </a>
					<button type="submit" class="btn btn-primary" name="addOffer"> + Add</a>
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
					<h6 class="modal-title text-center">Edit Offer</h6>
					<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body" style="background-color: #f6f6f6;">
					<div class="form-group">
						<input class="form-control" type="date" id="editDateInp" name="editDateInp" placeholder="Enter coffee name">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="editDateError">Please select date.</p>
					</div>
					
					<div class="form-group">
						<input class="form-control" type="text" id="editDiscountInp" name="editDiscountInp" placeholder="Enter discount">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="editDiscountError">Please enter discount.</p>
					</div>

					<div class="form-group">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Select Date</label> 
								
							</div>
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">Discount</label> 
								
							</div>
														
						</div>
					</div>

					<div class="form-group">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">From Time</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<select class="form-control" id="editFromTimeInp" name="editFromTimeInp">
											<option label="Select from time"></option>
											<option value="12:00 AM">12:00 AM</option>
											<option value="01:00 AM">01:00 AM</option>
											<option value="02:00 AM">02:00 AM</option>
											<option value="03:00 AM">03:00 AM</option>
											<option value="04:00 AM">04:00 AM</option>
											<option value="05:00 AM">05:00 AM</option>
											<option value="06:00 AM">06:00 AM</option>
											<option value="07:00 AM">07:00 AM</option>
											<option value="08:00 AM">08:00 AM</option>
											<option value="09:00 AM">09:00 AM</option>
											<option value="10:00 AM">10:00 AM</option>
											<option value="11:00 AM">11:00 AM</option>
											<option value="12:00 PM">12:00 PM</option>
											<option value="01:00 PM">01:00 PM</option>
											<option value="02:00 PM">02:00 PM</option>
											<option value="03:00 PM">03:00 PM</option>
											<option value="04:00 PM">04:00 PM</option>
											<option value="05:00 PM">05:00 PM</option>
											<option value="06:00 PM">06:00 PM</option>
											<option value="07:00 PM">07:00 PM</option>
											<option value="08:00 PM">08:00 PM</option>
											<option value="09:00 PM">09:00 PM</option>
											<option value="10:00 PM">10:00 PM</option>
											<option value="11:00 PM">11:00 PM</option>
										</select>
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="editFromTimeError">Please select 'from' time.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label class="main-content-label tx-11 tx-medium">To Time</label>
								<div class="row row-sm">
									<div class="col-sm-12">
										<select class="form-control" id="editToTimeInp" name="editToTimeInp">
											<option label="Select to time"></option>
											<option value="12:00 AM">12:00 AM</option>
											<option value="01:00 AM">01:00 AM</option>
											<option value="02:00 AM">02:00 AM</option>
											<option value="03:00 AM">03:00 AM</option>
											<option value="04:00 AM">04:00 AM</option>
											<option value="05:00 AM">05:00 AM</option>
											<option value="06:00 AM">06:00 AM</option>
											<option value="07:00 AM">07:00 AM</option>
											<option value="08:00 AM">08:00 AM</option>
											<option value="09:00 AM">09:00 AM</option>
											<option value="10:00 AM">10:00 AM</option>
											<option value="11:00 AM">11:00 AM</option>
											<option value="12:00 PM">12:00 PM</option>
											<option value="01:00 PM">01:00 PM</option>
											<option value="02:00 PM">02:00 PM</option>
											<option value="03:00 PM">03:00 PM</option>
											<option value="04:00 PM">04:00 PM</option>
											<option value="05:00 PM">05:00 PM</option>
											<option value="06:00 PM">06:00 PM</option>
											<option value="07:00 PM">07:00 PM</option>
											<option value="08:00 PM">08:00 PM</option>
											<option value="09:00 PM">09:00 PM</option>
											<option value="10:00 PM">10:00 PM</option>
											<option value="11:00 PM">11:00 PM</option>
										</select>
										<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="editToTimeError">Please select 'to' time.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Offer Description</label> 
						<textarea class="form-control" id="descriptionInp" name="editOfferDescription" placeholder="Enter full description of offer..."></textarea>
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="editDescriptionError">Please enter offer description.</p>
					</div>
				</div>
				
				<div class="modal-footer bg-head">
					<input class="form-control" name="offer_id" id="offer_id" type="hidden">
					<button type="submit" class="btn btn-primary" name="editOffer"> Edit</a>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">

	$(document).ready(function(){
	    $('.timepicker').timepicker({
	    	timeFormat: 'h:mm p',
		    interval: 60,
		    minTime: '00',
		    maxTime: '11:00pm',
		    defaultTime: '11',
		    startTime: '10:00',
		    dynamic: true,
		    dropdown: true,
		    scrollbar: true
	    });
	});

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
			url: 'functions/offers/update_status.php',
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
