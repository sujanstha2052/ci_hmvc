<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		CIHMVC |
		<?php
		if (isset($page_title)) {
			echo $page_title;
		}
		?>
	</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet"
		  href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skins/_all-skins.min.css">

	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

	<?php $this->load->view("templates/partials/admin_header"); ?>
	<?php $this->load->view("templates/partials/admin_sidebar"); ?>

	<div class="content-wrapper">
		<section class="content">

			<?php
			if (isset($view_file)) {

				$this->load->view($view_module . "/" . $view_file);
			}
			?>


		</section>
	</div>


	<?php $this->load->view("templates/partials/admin_footer"); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/js/adminlte.js"></script>
<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree()
	})
</script>
</body>
</html>
