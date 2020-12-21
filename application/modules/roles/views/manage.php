<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">
			<?php
			if (isset($page_title))
				echo $page_title;
			?>
		</h3>

		<div class="box-tools pull-right">
			<a href="<?php echo base_url(); ?>roles/create" class="btn btn-primary btn-xs">
				Create Role
			</a>

		</div>
	</div>
	<div class="box-body">
		<table class="table table-bordered table-striped dataTable">
			<thead>
			<tr>
				<th style="width: 30px">Sn</th>
				<th>Display Name</th>
				<th>Name</th>
				<th>Status</th>
				<th>Created At</th>
				<th style="width: 100px;">Action</th>
			</tr>
			</thead>
			<tbody>
			<?php if (isset($roles)): ?>
				<?php foreach ($roles as $row): ?>
					<tr>
						<td>
							<?php echo $row->id; ?>
						</td>
						<td>
							<?php echo $row->display_name; ?>
						</td>
						<td>
							<?php echo $row->name; ?>
						</td>
						<td>
							<?php echo $row->status; ?>
						</td>
						<td>
							<?php echo $row->created_at; ?>
						</td>
						<td>
							<a href="<?php echo $row->id; ?>" class="btn btn-info btn-xs" title="View">
								<i class="fa fa-eye"></i>
							</a>

							<a href="<?php echo $row->id; ?>" class="btn btn-primary btn-xs" title="Edit">
								<i class="fa fa-edit"></i>
							</a>

							<a href="<?php echo $row->id; ?>" class="btn btn-danger btn-xs" title="Delete">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>

			</tbody>
		</table>
		<div class="row">
			<div class="col-md-6">
				<p>
					<?php if (isset($showing_statement)) echo $showing_statement; ?>
				</p>
			</div>
			<div class="col-md-6 text-right">
				<?php if (isset($pagination)) echo $pagination; ?>
			</div>
		</div>
	</div>
</div>
