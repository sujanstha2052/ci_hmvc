<?php
$user_data = $this->session->userdata();
$current_url = $this->uri->uri_string();

?>

<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url(); ?>assets/img/user2-160x160.jpg" class="img-circle"
					 alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $user_data['username']; ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>

			<li class="<?php echo ($current_url == 'dashboard') ? 'active' : ''; ?>">
				<a href="<?php echo base_url(); ?>dashboard">
					<i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
				</a>
			</li>

			<li class="<?php echo ($current_url == 'users/manage') ? 'active' : ''; ?>">
				<a href="<?php echo base_url(); ?>users/manage">
					<i class="fa fa-users"></i>
					<span>Manage Users</span>
				</a>
			</li>

			<li class="<?php echo ($current_url == 'roles/manage') ? 'active' : ''; ?>">
				<a href="<?php echo base_url(); ?>roles/manage">
					<i class="fa fa-users"></i>
					<span>Manage Roles</span>
				</a>
			</li>

		</ul>
	</section>
</aside>
