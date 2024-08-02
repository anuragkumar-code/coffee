<?php include ('partials/header.php'); ?>
<?php include ('partials/sidebar.php'); ?>

<div class="main-content app-content">
	<div class="main-container container-fluid">
		<div class="breadcrumb-header justify-content-between">
			<div>
				<h4 class="content-title mb-2" style="text-transform: uppercase;">Admins</h4>
			</div>
			<div class="d-flex my-auto">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
						<li class="breadcrumb-item active " aria-current="page">Admin Management </li>
					</ol>
				</nav>
			</div>
		</div>

		<div class="row row-sm">
			<div class="col-lg-12">
				<div class="card overflow-hidden">
					<div class="card-header pd-b-0 pd-t-20 bd-b-0 bg-head">
						<div class="d-flex justify-content-between">
							<h3 class="card-title mg-b-10">Admins Table</h3>
							<div class="dropdown" style="margin-bottom:10px">
								<a href="javascript:void(0)" class="btn btn-sm bg-primary-gradient" title="Add new business customer" data-bs-target="#modaldemo1" data-bs-toggle="modal"><b> + Admin</b></a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table border-top-0  table-bordered text-nowrap border-bottom" id="responsive-datatable">
								<thead>
									<tr>
										<th class="text-center wd-15p border-bottom-0">S. No.</th>
										<th class="text-center wd-15p border-bottom-0">Name</th>
										<th class="text-center wd-20p border-bottom-0">Email</th>
										<th class="text-center wd-15p border-bottom-0">Phone</th>
										<th class="text-center wd-15p border-bottom-0">EIN</th>
										<th class="text-center wd-10p border-bottom-0">Status</th>
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
										<td class="text-center">Kunal</td>
										<td class="text-center">kunal@abc.com</td>
										<td class="text-center">2387469</td>
										<td class="text-center">097789</td>
										<td class="text-center">
											<div class="main-toggle main-toggle-success <?php if($fet_users['status'] == 1){ ?> on <?php }?>" style="border-radius: 22px;" data-id="<?php echo $fet_users['login_id']; ?>">
												<span style="border-radius: 22px;"></span>
												<input type="hidden" id="statusId_<?php echo $fet_users['login_id']; ?>" value="<?php echo $fet_users['status']; ?>">
											</div>
										</td>
										<td class="text-center">
											<a href="javascript:void(0)" class="btn btn-sm bg-info" title="Edit details" onclick="openEditPopup(1)"><i class="fa fa-edit" ></i></a>
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
			<form id="addAdminForm" method="post">
				<div class="modal-header bg-head">
					<h6 class="modal-title text-center">Add New Admin</h6>
					<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body" style="background-color: #f6f6f6;">
					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Admin Name</label> 
						<input class="form-control" type="text" id="adminNameInp" name="adminNameInp" placeholder="Enter admin name">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="adminNameError">This field can not be empty.</p>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Admin Email</label> 
						<input class="form-control" type="text" id="adminEmailInp" name="adminEmailInp" placeholder="Enter admin email" onkeyup="chkAvailability(this.value)">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="adminEmailError">This field can not be empty.</p>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter New Password</label> 
						<div class="d-flex">
							<input class="form-control" type="text" id="adminPasswordInp" name="adminPasswordInp" placeholder="Enter admin new password">
							<a href="javascript:void(0)" onclick="generateRandomPassword()" title="Click here to generate password" class="btn btn-info"><i class="fas fa-key"></i></a>
							<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="adminPasswordError">This field can not be empty.</p>
						</div>
					</div>
										
					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Select Admin Roles</label> 
						<div class="row row-sm">
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="coffeemanagement"><span><b>Coffee Management</b></span></label>
							</div>
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="customermanagement"><span><b>Customer Management</b></span></label>
							</div>
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="businessmanagement"><span><b>Business Management</b></span></label>
							</div>
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="ordermanagement"><span><b>Order Management</b></span></label>
							</div>
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="offermanagement"><span><b>Offer Management</b></span></label>
							</div>
						</div>
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="adminRoleError">Please select atleast one role for admin.</p>
					</div>

				</div>
				
				<div class="modal-footer bg-head">
					<a class="btn btn-secondary" onclick="resetForm(event)">Reset </a>
					<a class="btn btn-primary" onclick="addAdmin()" > + Add</a>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- modal box to add coffee -->
<div class="modal" id="modaldemo2">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-content-demo">
			<form id="addAdminForm" method="post">
				<div class="modal-header bg-head">
					<h6 class="modal-title text-center">Edit Admin</h6>
					<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
				</div>

				<div class="modal-body" id="modelBodyId" style="background-color: #f6f6f6;">
					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Admin Name</label> 
						<input class="form-control" type="text" id="adminNameInp" name="adminNameInp" placeholder="Enter admin name">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="adminNameError">This field can not be empty.</p>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter Admin Email</label> 
						<input class="form-control" type="text" id="adminEmailInp" name="adminEmailInp" placeholder="Enter admin email" onkeyup="chkAvailability(this.value)">
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="adminEmailError">This field can not be empty.</p>
					</div>

					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Enter New Password</label> 
						<div class="d-flex">
							<input class="form-control" type="text" id="adminPasswordInp" name="adminPasswordInp" placeholder="Enter admin new password">
							<a href="javascript:void(0)" onclick="generateRandomPassword()" title="Click here to generate password" class="btn btn-info"><i class="fas fa-key"></i></a>
							<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="adminPasswordError">This field can not be empty.</p>
						</div>
					</div>
										
					<div class="form-group">
						<label class="main-content-label tx-11 tx-medium">Select Admin Roles</label> 
						<div class="row row-sm">
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="coffeemanagement"><span><b>Coffee Management</b></span></label>
							</div>
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="customermanagement"><span><b>Customer Management</b></span></label>
							</div>
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="businessmanagement"><span><b>Business Management</b></span></label>
							</div>
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="ordermanagement"><span><b>Order Management</b></span></label>
							</div>
							<div class="col-md-6" style="margin-bottom:10px">
								<label class="ckbox"><input type="checkbox" name="roles[]" value="offermanagement"><span><b>Offer Management</b></span></label>
							</div>
						</div>
						<p class="tx-13 text-muted mb-2 text-danger mt-2 d-none" id="adminRoleError">Please select atleast one role for admin.</p>
					</div>

				</div>
				
				<div class="modal-footer bg-head">
					<a class="btn btn-secondary" onclick="resetForm(event)">Reset </a>
					<a class="btn btn-primary" onclick="editAdmin()" > Edit</a>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">

	//to generate random password
  	function generateRandomPassword() {
	    var length = 8;
	    var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    var password = "";
	    for (var i = 0; i < length; i++) {
	        var randomIndex = Math.floor(Math.random() * charset.length);
	        password += charset[randomIndex];
	    }

	    $('#adminPasswordInp').val(password);
	}

	//function to check username availability
	function chkAvailability(email){
		$.ajax({
			type: 'POST',
			url: 'functions/admin/check_email.php',
			data: {
				email:email,
			},
			success: function(result){
				if(result == 0){
					$('#adminEmailError').html('This email id is already in use.');
					$('#adminEmailError').removeClass('d-none')
				}else{
					$('#adminEmailError').addClass('d-none')
				}
			}
	  	});
	}

	//function to add users
	function addAdmin(){
		var name = $('#adminNameInp').val();
		var email = $('#adminEmailInp').val();
		var password = $('#adminPasswordInp').val();
		var roles = [];

		$('input[name="roles[]"]:checked').each(function() {
	        roles.push($(this).val());
	    });

		if(name == ''){
			$('#adminNameError').removeClass('d-none');
			$('#adminNameInp').focus();
			return;
		}else{
			$('#adminNameError').addClass('d-none');
		}

		var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

		if(email == ''){
			$('#adminEmailError').html('This field can not be empty.');
	        $('#adminEmailError').removeClass('d-none');
			$('#adminEmailInp').focus();
			return;
		} else if (!emailRegex.test(email)) {
	        $('#adminEmailError').html('Invalid email format.');
	        $('#adminEmailError').removeClass('d-none');
			$('#adminEmailInp').focus();

	        return;
	    } else {
	        $('#adminEmailError').addClass('d-none');
	    }

		if(password == ''){
			$('#adminPasswordError').removeClass('d-none');
			$('#adminEmailInp').focus();
			return;
		}else{
			$('#adminPasswordError').addClass('d-none');
		}

		if (roles.length == 0) {
	        $('#adminRoleError').removeClass('d-none');
	        return;
	    } else {
	        $('#adminRoleError').addClass('d-none');
	    }

	    console.log(roles);
	    return;

		$.ajax({
			type: 'POST',
			url: 'functions/admins/add_admin.php',
			data: {
				name:name,
				password:password,
				email:email,
				roles: roles.join(',')
			},
			success: function(result){
				if(result == '1'){
					resetForm(event);
					location.reload();
					$('#modaldemo1').modal('hide');
				}else{
					alert('Something went wrong! Please contact admin.');
				}
			}
	  	});
	}

	function resetForm(e){
		$('#adminNameError').addClass('d-none');
		$('#adminEmailError').addClass('d-none');
		$('#adminPasswordError').addClass('d-none');
		$('#adminRoleError').addClass('d-none');
		$('#addButton').removeClass('disabled');

  		e.preventDefault();
  		var form = document.getElementById("addAdminForm");
	    form.reset();
  	}

  	function openEditPopup(id){
  		$.ajax({
			type: 'POST',
			url: 'functions/admins/edit_admin.php',
			data: {
				id:id,
			},
			success: function(result){
				
			}
	  	});
  	}


</script>
<?php include('partials/footer.php'); ?>