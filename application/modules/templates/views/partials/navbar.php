<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<div class="container">		
		<a class="navbar-brand" href="<?= base_url() ?>">Authentication</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#front-navbar" aria-controls="front-navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="front-navbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url() ?>">Home</a>
				</li>				
			</ul>
			<!-- <form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
			</form> -->

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="<?= base_url().'auth/login' ?>" class="nav-link">Login</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url().'auth/register' ?>" class="nav-link">Register</a>
				</li>
			</ul>
		</div>
	</div>
</nav>