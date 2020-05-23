<?php
?>

<?php
?>
<!DOCTYPE html>
<html lang="en">

<?php
//HEADER
include_once "header.php";
?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
	<!-- End of Sidebar -->
	<?php include "sidebar.php"; ?>
	<!-- End of Sidebar -->

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<!-- Topbar -->
			<?php include('user_bar.php') ?>
			<!-- SIDEBAR -->
			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">

				<!-- Main Content -->
				<div id="content">

					<!-- Begin Page Content -->
					<div class="container-fluid">


						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Add machine sale</h5>

							</div>
							<div class="modal-body">
								<?php

								if(is_array($other) || is_object($other)){

								foreach($other->result() as $row){ ?>
								<form class="user" method="post" action="<?php echo base_url('machines/addsale'); ?>">
									<div class="form-group">
										<input type="hidden" name="other" value="<?php echo $row->machine_id?>">
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter client name:" name="client">
									</div>
									<div class="form-group">
										<input type="hidden" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter title of machine:" name="title" value="<?php echo $row->machine_title?>">
									</div>
									<div class="form-group">
										<input type="hidden" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter code of machine:" name="code" value="<?php echo $row->machine_code?>">
									</div>
									<div class="form-group">
										<input type="hidden" class="form-control form-control-user" placeholder="Enter Serial Number Of Machine:" name="sn" value="<?php echo $row->machine_sn ?>">
									</div>
									<div class="form-group">
										<input type="hidden" class="form-control form-control-user" placeholder="Enter Quantity Of Machine:" name="quantity" value="<?php echo $row->machine_quantity?>">
									</div>
									<div class="form-group">
										<input type="hidden" name="image" value="<?php echo $row->machine_image?>">
									</div>




							</div>
							<div class="modal-footer">
								<a class="btn btn-secondary" type="button" data-dismiss="modal" href="<?php echo base_url(); ?>/machines">Cancel</a>
								<input type="submit" name="save" class="btn btn-primary" value="Save"/>
							</div></form> <?php }}?>

						</div>




					</div>

				</div>

			</div>
			<!-- Begin Page Content -->


		</div>
		<!-- End of Main Content -->

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



<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>


