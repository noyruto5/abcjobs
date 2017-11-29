<h3><?php echo $title; ?></h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('admin/index'); ?>">Admin</a></li>
  <li><?php echo $title; ?></li>
</ul>

<table class="table table-hover display" id="datatable">
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Contact No.</th>
			<th>Address</th>

			<?php if ($title === "Applicant Students") { ?>

				<th>Date Applied</th>

			<?php } else { ?>

				<th>Date Hired</th>

			<?php } ?>
			
			<th>Action</th>
		</tr>
	</thead>
	<tbody>

<?php foreach ($students as $students_item): ?>
	
		<tr>
			<td><?php echo $students_item['fname'] . " " . $students_item['mname'] . " " . $students_item['lname']; ?></td>
			<td>
				<?php 
					$from = new DateTime($students_item['bdate']);
					$to = new DateTime('today');

					echo $from->diff($to)->y;
				?>
			</td>
			<td><?php echo $students_item['sex']; ?></td>
			<td><?php echo $students_item['contact_no']; ?></td>
			<td><?php echo $students_item['address']; ?></td>
			<td><?php echo $students_item['date_status']; ?></td>
			<td><a href="<?php echo site_url('students/view/'.$students_item['student_id'])."/".$field_name1."/".$field_value1; ?>">View</a></td>
		</tr>
		

<?php endforeach; ?>

	</tbody>
</table>