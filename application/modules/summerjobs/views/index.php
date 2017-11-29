<h3>Summer Jobs in Sagay</h3>
<ul class="breadcrumb">
  <li><a href="<?= site_url('admin/index') ?>">Admin</a></li>
  <li>Summber Jobs</li>
</ul>

<div style="margin-left: 50px;">

	<label>Slots:&nbsp;&nbsp;</label><?= ucfirst($summerjobs_item['slots']) ?>

	<br/>

	<label>Details:</label><br/>
	<?= nl2br($summerjobs_item['details']) ?>

	<br/><br/>

	<?php if ($this->session->userdata('role') === 'student'): ?>

		<a href="<?php echo site_url('students/create'); ?>" class="btn btn-primary" id="btn-apply">Apply</a>

	<?php elseif ($this->session->userdata('role') === 'admin'): ?>

		<a href="<?php echo site_url('summerjobs/update'); ?>" class="btn btn-primary" id="btn-apply">Update</a>

	<?php endif; ?>
	
</div>