<?php
ini_set('display_errors', 1);?>
<!DOCTYPE html>
<html lang="en">

<?php
//HEADER
include_once "header.php";
?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<?php include "sidebar.php"; ?>
	<!-- End of Sidebar -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<!-- Topbar -->
			<?php include('user_bar.php') ?>
			<!-- End of Topbar -->

			<!-- Begin Page Content -->
			<div class="container-fluid">
				<?php
				$rolesave='';
				foreach($userrole as $role){
					$rolesave=$role->user_role;}
				?>


				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h1 class="m-0 font-weight-bold text-primary">Machines</h1><br>
						<a href="#" class="btn btn-success btn-icon-split" data-target="#addModal" data-toggle="modal"><span class="icon text-white-50"><i class="fas fa-plus-circle"></i></span><span class="text">Add New Machine</span></a>
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
								if($rolesave =="admin"){
								$i=1;
								if(is_array($all_data) || is_object($all_data)){

								foreach($all_data->result() as $row){


									?>

									<tr>
										<td><?php echo $i?></td>
										<td><?php echo $row->machine_title?></td>
										<td><?php echo $row->machine_code?></td>
										<td><?php echo $row->machine_sn ?></td>
										<td><?php echo $row->machine_quantity?></td>
										<td><a href="machines/edit_machine_data/<?php echo $row->machine_id; ?>"  class="btn btn-primary btn-icon-split btn-sm" ><span class="icon text-white-50"><i class="fas fa-pen"></i></span><span class="text">Edit</span></a> <a href="machines/add_machine_sale/<?php echo $row->machine_id; ?>" class="btn btn-warning btn-icon-split btn-sm" ><span class="icon text-white-50"><i class="fas fa-money-bill"></i></span><span class="text">Add sale</span></a></td>




									</tr>


									<?php
								$i++;
								}}}else{
									$i=1;
									if(is_array($all_data_operator) || is_object($all_data_operator)){

										foreach($all_data_operator->result() as $row){


											?>

											<tr>
												<td><?php echo $i?></td>
												<td><?php echo $row->machine_title?></td>
												<td><?php echo $row->machine_code?></td>
												<td><?php echo $row->machine_sn ?></td>
												<td><?php echo $row->machine_quantity?></td>
												<td><a href="machines/edit_machine_data/<?php echo $row->machine_id; ?>" class="btn btn-primary btn-icon-split btn-sm" ><span class="icon text-white-50"><i class="fas fa-pen"></i></span><span class="text">Edit</span></a> <a href="machines/add_machine_sale/<?php echo $row->machine_id; ?>" class="btn btn-warning btn-icon-split btn-sm" ><span class="icon text-white-50"><i class="fas fa-money-bill"></i></span><span class="text">Add sale</span></a></td>



											</tr>
											<?php
											$i++;
										}}}
									?>


								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->


		<!-- ADD Modal-->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">ADD a machine into archive</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="user" method="post" action="<?php echo base_url('machines/insert'); ?>">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter title of machine:" name="title">
							</div>
							<div class="form-group">
								<input type="number" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter code of machine:" name="code">
							</div>
							<div class="form-group">
								<input type="number" class="form-control form-control-user" placeholder="Enter Serial Number Of Machine:" name="sn">
							</div>
							<div class="form-group">
								<input type="number" class="form-control form-control-user" placeholder="Enter Quantity Of Machine:" name="quantity">
							</div>







					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<input type="submit" name="save" class="btn btn-primary" value="Save"/>
					</div></form>
				</div>
			</div>
		</div>




		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Your Website 2019</span>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->

	</div>
	<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>
