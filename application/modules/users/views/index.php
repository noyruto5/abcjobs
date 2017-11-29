<h3><?php echo $title; ?></h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('admin/index'); ?>">Admin</a></li>
  <li><?php echo $title; ?></li>
</ul>

<table class="table table-hover" id="datatable">
	<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Role</th>
			<th>Account Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

<?php foreach ($users as $users_item): ?>
	
		<tr>
			<td><?php echo $users_item['username']; ?></td>
			<td><?php echo $users_item['email']; ?></td>
			<td><?php echo $users_item['role']; ?></td>
			<td>
				<?php if($users_item['status'] === "pending") { ?>
					<a href="<?php echo site_url('users/verified_user/'.$users_item['id']); ?>" class="btn btn-success" title="Click to verfiy">Pending</a>
				<?php } else { 
					echo $users_item['status']; 
				} ?>

			</td>
			<td>
				<?php if($users_item['status'] === "verified") { ?>
					<a href="<?php echo site_url('users/deactivate_user/'.$users_item['id']); ?>" class="btn btn-danger" title="Click to deactivate">Deactivate</a>
				<?php } ?>

			</td>
		</tr>
		

<?php endforeach; ?>

	</tbody>
</table>