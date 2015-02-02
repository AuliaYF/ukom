<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

	<style>
		body{
			padding: 16px;
			background-color: #ccc;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-4 col-md-offset-4 well">
			<?php $this->load->view($main_view); ?>
		</div>
	</div>
</body>
</html>