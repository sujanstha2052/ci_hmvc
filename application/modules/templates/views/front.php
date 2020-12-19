<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<title><?= $page_title ?> | Authentication</title>

	<link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
	<script src="<?= base_url() ?>public/js/jquery.js"></script>
</head>
<body>
	<?php $this->load->view("templates/partials/navbar"); ?>
	<?php
	$section_1 = $this->uri->segment(1);
	?>
	<?php if ($section_1 != ""): ?>
		<section class="container">
		<?php endif ?>
		<?php
		if(isset($view_file)) {
			$this->load->view($view_module."/".$view_file);
		}
		?>
		<?php if ($section_1 != ""): ?>
		</section>
	<?php endif ?>
	<script src="<?= base_url() ?>public/js/bootstrap.js"></script>
</body>
</html>
