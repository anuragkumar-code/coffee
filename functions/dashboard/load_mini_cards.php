<?php 


$all_orders = 43;
$packed = 43;
$shipped = 43;
$delivered = 43;



?>


<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
	<div class="card">
		<div class="card-body">
			<div class="float-end bg-primary shadow-primary stamp stamp-lg">
				<i class="bx bx-user tx-24"></i>
			</div>
			<div class="text-muted">
				<h5>All Orders</h5>
			</div>
			<span class="mb-1 tx-26 font-weight-semibold"><?php echo $all_orders; ?></span>
		</div>
	</div>
</div>

<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
	<div class="card">
		<div class="card-body">
			<div class="float-end bg-primary shadow-primary stamp stamp-lg">
				<i class="bx bx-user tx-24"></i>
			</div>
			<div class="text-muted">
				<h5>Packed</h5>
			</div>
			<span class="mb-1 tx-26 font-weight-semibold"><?php echo $packed; ?></span>
		</div>
	</div>
</div>

<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
	<div class="card">
		<div class="card-body">
			<div class="float-end bg-primary shadow-primary stamp stamp-lg">
				<i class="bx bx-user tx-24"></i>
			</div>
			<div class="text-muted">
				<h5>Shipped</h5>
			</div>
			<span class="mb-1 tx-26 font-weight-semibold"><?php echo $shipped; ?></span>
		</div>
	</div>
</div>

<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
	<div class="card">
		<div class="card-body">
			<div class="float-end bg-primary shadow-primary stamp stamp-lg">
				<i class="bx bx-user tx-24"></i>
			</div>
			<div class="text-muted">
				<h5>Delivered</h5>
			</div>
			<span class="mb-1 tx-26 font-weight-semibold"><?php echo $delivered; ?></span>
		</div>
	</div>
</div>
