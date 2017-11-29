<h3><?php echo $title; ?></h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('admin/index'); ?>">Admin</a></li>
  <li><?php echo $title; ?></li>
</ul>

<table class="table table-hover" id="datatable">
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Mobile No.</th>
			<th>Employment Status</th>
			<th>Civil Status</th>

			<?php if ($title === "Employed Applicants" || $title === "Unemployed Applicants") { ?>

				<th>Date Applied</th>

			<?php } else { ?>

				<th>Date Hired</th>

			<?php } ?>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>

<?php foreach ($applicants as $applicants_item): ?>
	
		<tr>
			<td><?php echo $applicants_item['fname'] . " " . $applicants_item['mname'] . " " . $applicants_item['lname']; ?></td>
			<td>
				<?php 
					$from = new DateTime($applicants_item['bdate']);
					$to = new DateTime('today');

					echo $from->diff($to)->y;
				?>
			</td>
			<td><?php echo $applicants_item['sex']; ?></td>
			<td><?php echo $applicants_item['mobile_no']; ?></td>
			<td><?php echo $applicants_item['employment_status']; ?></td>
			<td><?php echo $applicants_item['status']; ?></td>
			<td><?php echo $applicants_item['date_status']; ?></td>
			<td><a href="<?php echo site_url('applicants/view/'.$applicants_item['applicant_id'])."/".$field_name1."/".$field_value1."/".$field_name2."/".$field_value2; ?>">View</a></td>
		</tr>
		

<?php endforeach; ?>

	</tbody>
</table>