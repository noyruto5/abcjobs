<h3><?php echo ucfirst($jobs_item['job_title']); ?></h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('admin/index'); ?>">Admin</a></li>
  <li><a href="<?php echo site_url('jobs/index'); ?>">Job Hiring</a></li>
  <li><?php echo ucfirst($jobs_item['job_title']); ?></li>
</ul>

<center>
	<h1><?php echo ucfirst($jobs_item['agency_name']); ?></h1>
	<?php echo ucfirst($jobs_item['agency_address']); ?>
</center>

<div style="margin-left: 50px;">
	<br/><br/><br/>
	<label>Job Position:&nbsp;&nbsp;</label><?php echo ucfirst($jobs_item['job_title']); ?>

	<br/><br/>
	<label>Position Available:&nbsp;&nbsp;</label><?php echo ucfirst($jobs_item['position_available']); ?>

	<br/><br/>
	<label>Hiring Country:&nbsp;&nbsp;</label><?php echo ucfirst($jobs_item['hiring_country']); ?>

	<br/><br/>

	<h4>Qualifications:</h4>
	<?php echo nl2br($jobs_item['qualifications']); ?>

	<br/><br/>

	<h4>Requirements:</h4>
	<?php echo nl2br($jobs_item['requirements']); ?>

	<br/><br/>

	<h4>Other Benifits:</h4>
	<?php echo nl2br($jobs_item['benifits']); ?>

	<br/><br/><br/>

	<?php if ($this->session->userdata('role') === "admin"): ?>

		<a href="<?php echo site_url('jobs/update/').$jobs_item['id']; ?>" class="btn btn-primary">Update</a>&nbsp;&nbsp;
		<a href="<?php echo site_url('jobs/delete/').$jobs_item['id']; ?>" class="btn btn-danger">Delete</a>

	<?php else: ?>

		<a href="<?php echo site_url('applicants/create'); ?>" class="btn btn-primary">Apply Now</a>

	<?php endif; ?>
</div>