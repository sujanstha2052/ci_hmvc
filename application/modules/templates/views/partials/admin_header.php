<?php
$user_data = $this->session->userdata();
?>

<header class="main-header">
	<a href="<?php echo base_url(); ?>assets/index2.html" class="logo">
		<span class="logo-mini"><b>CI</b></span>
		<span class="logo-lg"><b>CI</b>HMVC</span>
	</a>
	<nav class="navbar navbar-static-top">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li>
					<a href="#">
						<?php echo $user_data['username']; ?>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>login/logout">
						Logout
						<i class="fa fa-sign-out"></i>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
