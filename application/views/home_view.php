<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Main Page</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets_F/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets_F/css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #285780;">
    <div class="container">
      <a class="navbar-brand" href="#">Home page</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('login'); ?>">Admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <p class="lead">This is a test page.</p>
    </header>

    <!-- Page Features -->
    <div class="row text-center" id="card_Result">
		<?php
		if(is_array($data_line) || is_object($data_line)){
		foreach ($data_line->result() as $result3) { ?>
		<div class="col-lg-6 col-md-6 mb-4">
			<div class="card h-100">
				<img class="card-img-top" src="https://www.worldfoodinnovations.com/userfiles/innovations/WEBKLAAR%20Hoofdfoto%20innovatie%20Wingssprayer-spraying-wheat.jpg" alt="">
				<div class="card-body">
					<h4 class="card-title text-left"><?php echo $result3->machine_title?></h4>
					<p class="card-text text-left">CODE : <?php echo $result3->machine_code?></p>
				</div>
				<ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Quantity
						<span class="badge badge-primary badge-pill"><?php echo $result3->machine_quantity?></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Serial Number
						<span class="badge badge-primary badge-dark"><?php echo $result3->machine_sn?></span>
					</li>

				</ul>
			</div>
		</div><?php } }?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Flori Kodra 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <script type='text/javascript' language='javascript'>
	  $(document).ready(function(){
		  $.ajax({
			  url:"<?php echo base_url();?>home/getdataajax",
			  type: 'POST',
			  dataType: 'JSON',

			  success:function (data) {
				  $('#card_Result').html(data);
			  }
		  });

		  event.preventDefault();
	  });
  </script>


  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url(); ?>assets_F/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets_F/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
