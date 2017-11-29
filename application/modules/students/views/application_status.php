<h3><?= $title ?></h3>
<ul class="breadcrumb">
  <li><a href="<?= site_url('summerjobs/index'); ?>">Summer Jobs</a></li>
  <li><?= $title ?></li>
</ul>
<br/>
<div>
	<h4>Summer job in sagay city</h4>
	
	<?php
		switch ($students_item['accepted']) {
			case 'yes':
				echo "<label>Status:&nbsp;&nbsp;</label>&nbsp;";
				echo "<span style='background-color:green; color:white; padding: 3px;'>Hired</span><br/>";
				echo "<label>Date Hired:&nbsp;&nbsp;</label>&nbsp;<span>".$students_item['date_status']."</span>";
				break;
			case 'rejected':
				echo "<label>Status:&nbsp;&nbsp;</label>&nbsp;";
				echo "<span style='background-color:red; color:white; padding: 3px;'>Not Qualified</span><br/>";
				echo "<label>Date Rejected:&nbsp;&nbsp;</label>&nbsp;<span>".$students_item['date_status']."</span>";
				break;
			case 'no':
				echo "<label>Status:&nbsp;&nbsp;</label>&nbsp;";
				echo "<span style='background-color:blue; color:white; padding: 3px;'>Pending</span>";
				break;
			default:
				echo "No application";
				break;
		}
	?>
</div>