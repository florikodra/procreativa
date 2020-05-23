<?php
?>
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	</div>

	<!-- Content Row -->
	<div class="row">

		<?php
		$rolesave='';
		foreach($userrole as $role){
			$rolesave=$role->user_role;}
		?>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-6 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Registred Machines</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php if($rolesave=="admin"){ echo $countrowsmachines; } else{ echo $countrowsmachines-$countrowsstock;}?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-plug fa-4x text-gray-600"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-6 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sales Made</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $countrowssales; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-money-bill fa-4x text-gray-600"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if($rolesave=="admin"){ ?>
		<div class="col-xl-12 col-md-6 mb-4">
			<div class="card border-bottom-danger shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xl font-weight-bold text-danger text-uppercase mb-1">Out of Stock Machines</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $countrowsstock; ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-plug fa-4x text-gray-600"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php } ?>



		</div>
	<div class="row">
		<!-- DataTales Example -->
		<?php if($rolesave=="admin"){ ?>
		<div class="card shadow mb-4 col-xl-12">
			<div class="card-header py-3">
				<h1 class="m-0 font-weight-bold text-danger">Machines out of stock</h1><br>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
						<tr>
							<th>Order</th>
							<th>Title</th>
							<th>Code</th>
							<th>Serial Number</th>
							<th>Quantity</th>
							<th>Actions</th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th>Order</th>
							<th>Title</th>
							<th>Code</th>
							<th>Serial Number</th>
							<th>Quantity</th>
							<th>Actions</th>
						</tr>
						</tfoot>
						<tbody>

						<?php
						$i=1;
						if(is_array($all_data) || is_object($all_data)){
							foreach($all_data->result() as $row)
							{?>
								<tr>
									<td><?php echo $i?></td>
									<td><?php echo $row->machine_title?></td>
									<td><?php echo $row->machine_code?></td>
									<td><?php echo $row->machine_sn ?></td>
									<td><?php echo $row->machine_quantity?></td>

									<td><a href="machines/edit_machine_data/<?php echo $row->machine_id; ?>" class="btn btn-primary btn-icon-split btn-sm"><span class="icon text-white-50"><i class="fas fa-pen"></i></span><span class="text">Edit</span></a></td>
								</tr>










								<?php
								$i++;
							}}
						?>
						</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div><?php } ?>




	</div>


	</div>
	<!-- /.container-fluid -->
