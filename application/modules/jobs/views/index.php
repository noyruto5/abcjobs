<h3>Job hiring</h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('admin/index'); ?>">Admin</a></li>
  <li>Job hiring</li>
</ul>

<?php foreach ($jobs as $jobs_item): ?>

	<div class="jumbotron" style="padding: 10px;">
    	<h4><a style="color: #000066" href="<?php echo site_url('jobs/view/'.$jobs_item['id']); ?>"><?php echo $jobs_item['job_title']; ?></a></h4>
    	<span>Agency:&nbsp;<?= $jobs_item['agency_name'] ?></span><br/>
    	<span>Hiring Country:&nbsp;<?= $jobs_item['hiring_country'] ?></span>
    </div>

<?php endforeach; ?>