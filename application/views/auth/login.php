<?= isset($failed) && !empty($failed) ? "<p class='err'>{$failed}</p>" : ""; ?>
<?= $this->session->flashdata('success'); ?>
<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo base_url(); ?>"><b>CI</b>HMVC</a>
	</div>
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>
		<?php echo form_open('login', "autocomplete='off'"); ?>
		<div class="form-group has-feedback">
			<input type="text" class="form-control" name="username"
				   value="<?php echo set_value('username', $this->input->post('username')); ?>" placeholder="Username">
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		</div>
		<div class="form-group has-feedback">
			<input type="password" class="form-control" name="password" placeholder="Password"
				   value="<?php echo set_value('password', $this->input->post('password')); ?>">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		<div class="row">
			<div class="col-xs-8">
				<a href="<?php echo base_url(); ?>auth/forget_password">I forgot my password</a>
			</div>
			<div class="col-xs-4">
				<button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
