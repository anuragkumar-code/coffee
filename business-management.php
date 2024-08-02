<?php include ('partials/header.php'); ?>
<?php include ('partials/sidebar.php'); ?>


<div class="main-content app-content">
	<div class="main-container container-fluid">
		<div class="breadcrumb-header justify-content-between">
			<div>
				<h4 class="content-title mb-2" style="text-transform: uppercase;">Business Customers</h4>
			</div>
			<div class="d-flex my-auto">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
						<li class="breadcrumb-item active " aria-current="page">Business Management </li>
					</ol>
				</nav>
			</div>
		</div>

		<div class="row row-sm">
			<div class="col-lg-12">
				<div class="card overflow-hidden">
					<div class="card-header pd-b-0 pd-t-20 bd-b-0 bg-head">
						<div class="d-flex justify-content-between">
							<h3 class="card-title mg-b-10">Business Customers</h3>
							<div class="dropdown" style="margin-bottom:10px">
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


<?php include('partials/footer.php'); ?>