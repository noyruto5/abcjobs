<h3><?= $title ?></h3>
<ul class="breadcrumb">
  <li><a href="<?= site_url('students/summer_jobs'); ?>">Summer Jobs</a></li>
  <li><?= $title ?></li>
</ul>
<br/>

<table class="table table-hover" id="datatable">
	<thead>
		<tr>
			<th>Job Title</th>
			<th>Status</th>
			<th>Date Accepted/Rejected</th>
		</tr>
	</thead>
	<tbody>

<?php foreach ($applicants as $applicants_item): ?>
	
		<tr>
			<td><?php echo $applicants_item['job_title']; ?></td>
			<td>
				<?php
					switch ($applicants_item['accepted']) {
						case 'yes':
							echo "Hired";
							break;
						case 'rejected':
							echo "Not Qualified";
							break;
						default:
							echo "Pending";
							break;
					}
				?>
			</td>
			<td><?php echo $applicants_item['date_status']; ?></td>
		</tr>
		

<?php endforeach; ?>

	</tbody>
</table>