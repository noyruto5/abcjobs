<h3><?= ucfirst($category) ?></h3>
<ul class="breadcrumb">
  <li><a href="<?= site_url('admin/index'); ?>">Admin</a></li>
  <li><a href="<?= site_url('students/index/').$field_name1."/".$field_value1; ?>"><?= ucfirst($category) ?></a></li>
  <li><?= ucfirst($students_item['fname']); ?></li>
</ul>

<h4>Personal Info</h4>
<table class="tbl-profile">
	<tr><th>Name: </th><td><?= $students_item['fname']." ".$students_item['mname']." ".$students_item['lname']; ?></td></tr>
	<tr><th>Age: </th>
		<td>
			<?php 
				$from = new DateTime($students_item['bdate']);
				$to = new DateTime('today');

				echo $from->diff($to)->y;
			?>
		</td>
	</tr>
	<tr><th>Date of Birth: </th><td><?= $students_item['bdate'];?></td></tr>
	<tr><th>Place of Birth: </th><td><?= $students_item['bplace'];?></td></tr>
	<tr><th>Sex: </th><td><?= $students_item['sex'];?></td></tr>
	<tr><th>Citizenship: </th><td><?= $students_item['citizenship'];?></td></tr>
	<tr><th>Civil Status: </th><td><?= $students_item['status'];?></td></tr>
	<tr><th>Contact No.: </th><td><?= $students_item['contact_no'];?></td></tr>
	<tr><th>Email: </th><td><?= $students_item['email'];?></td></tr>
	<tr><th>Class: </th><td><?= $students_item['sclass'];?></td></tr>
	<tr><th>Parent Status: </th><td><?= $students_item['parent_status'];?></td></tr>
	<tr><th>Address: </th><td><?= $students_item['address'];?></td></tr>
</table>
<br/>
<hr>
<br/>
<h4>Parent Info</h4>
<table class="tbl-profile parent-info">
	<tr>
		<th>Father: </th><td><?= $students_item['fathers_name'];?></td>
		<th>Contact No.: </th><td><?= $students_item['fathers_contact'];?></td>
		<th>Occupation: </th><td><?= $students_item['fathers_occupation'];?></td>
	</tr>
	<tr>
		<th>Mother: </th><td><?= $students_item['mothers_name'];?></td>
		<th>Contact No.: </th><td><?= $students_item['mothers_contact'];?></td>
		<th>Occupation: </th><td><?= $students_item['mothers_occupation'];?></td>
	</tr>
</table>
<br/>
<hr>
<br/>
<h4>School History</h4>
<table class="tbl-profile">
	<tr>
		<th>Education</th>
		<th>Name of School</th>
		<th>Degree Learned/Course</th>
		<th>Year/Level</th>
		<th>Date of Attendant</th>
	</tr>
	<tr>
		<td>Elementary</td>
		<td><?= $students_item['school_name1'];?></td>
		<td><?= $students_item['course1'];?></td>
		<td><?= $students_item['yr_level1'];?></td>
		<td><?= $students_item['date_attend1'];?></td>
	</tr>
	<tr>
		<td>Secondary</td>
		<td><?= $students_item['school_name2'];?></td>
		<td><?= $students_item['course2'];?></td>
		<td><?= $students_item['yr_level2'];?></td>
		<td><?= $students_item['date_attend2'];?></td>
	</tr>
	<tr>
		<td>Tertiary</td>
		<td><?= $students_item['school_name3'];?></td>
		<td><?= $students_item['course3'];?></td>
		<td><?= $students_item['yr_level3'];?></td>
		<td><?= $students_item['date_attend3'];?></td>
	</tr>
	<tr>
		<td>Tech-Voc</td>
		<td><?= $students_item['school_name4'];?></td>
		<td><?= $students_item['course4'];?></td>
		<td><?= $students_item['yr_level4'];?></td>
		<td><?= $students_item['date_attend4'];?></td>
	</tr>
</table>
<br/>
<hr>
<br/>
<label style="padding-right: 20px; padding-left: 20px;">Special Skills:</label><?= $students_item['skills']; ?>
<table class="tbl-profile">
	<tr>
		<th>History of SPES Availment / Name of Establishment</th>
		<th>Availment</th>
		<th>Year</th>
		<th>SPES ID NO. (if applicable)</th>
	</tr>
	<tr>
		<td>1st Availment</td>
		<td><?= $students_item['spes_avail1'];?></td>
		<td><?= $students_item['spes_year1'];?></td>
		<td><?= $students_item['spes_id1'];?></td>
	</tr>
	<tr>
		<td>2nd Availment</td>
		<td><?= $students_item['spes_avail2'];?></td>
		<td><?= $students_item['spes_year2'];?></td>
		<td><?= $students_item['spes_id2'];?></td>
	</tr>
	<tr>
		<td>3rd Availment</td>
		<td><?= $students_item['spes_avail3'];?></td>
		<td><?= $students_item['spes_year3'];?></td>
		<td><?= $students_item['spes_id3'];?></td>
	</tr>
	<tr>
		<td>4rt Availment</td>
		<td><?= $students_item['spes_avail4'];?></td>
		<td><?= $students_item['spes_year4'];?></td>
		<td><?= $students_item['spes_id4'];?></td>
	</tr>
</table>
<br/>
<hr>
<br/>
<h4>Qualifications</h4>
<?php
	$qualifications = explode(";", $students_item['qualifications']);
	foreach ($qualifications as $qual_items) {
		echo "<img src='".base_url('images/check_mark.png')."' > ".$qual_items."<br/>";
	}
?>
<br/>
<hr>
<?php if (isset($field_name1) && $field_name1 == "accepted" && isset($field_value1) && $field_value1 == "yes") { ?>
	<!--No output-->
<?php } else { ?>
	<a href="#" class="btn btn-danger" id="btn-reject" title="Click to reject">Not Qualified</a>&nbsp;
	<a href="#" class="btn btn-primary" id="btn-accept" title="Click to accept">Accept</a>
<?php } ?>

<!-- The Modal 1-->
<div id="myModal1" class="modal">

<?php echo form_open('students/accept_reject_students'); ?>

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="modal1-close">&times;</span>
    <h4>Send SMS</h4>
    <p>Let the applicants know his/her status in job application by sending sms him/her.</p>
    <br/>
    <div class="row">
		<div class="col-sm-2">
			<label>To: </label>
		</div>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="sms_to" required value="<?= $students_item['contact_no'] ?>" >
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2">
			<label>Message: </label>
		</div>
		<div class="col-sm-10">
			<textarea class="form-control sms-message" rows="5" wrap="soft" name="sms_message">Modal 1 message
			</textarea>
			<input type="hidden" name="accepted" value="rejected" >
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary" title="Click to accept">Send</button>
		</div>
	</div>
  </div>

</form>

</div>

<!-- Modal 2 -->
<div id="myModal2" class="modal">

<?php echo form_open('students/accept_reject_students'); ?>

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close" id="modal2-close">&times;</span>
    <h4>Send SMS</h4>
    <p>Let the applicants know his/her status in job application by sending sms him/her.</p>
    <br/>
    <div class="row">
		<div class="col-sm-2">
			<label>To: </label>
		</div>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="sms_to" required value="<?= $students_item['contact_no'] ?>" >
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2">
			<label>Message: </label>
		</div>
		<div class="col-sm-10">
			<textarea class="form-control sms-message" rows="5" wrap="soft" name="sms_message">Modal 2 message.
			</textarea>
			<input type="hidden" name="accepted" value="yes">
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
			<button type="submit" class="btn btn-primary" title="Click to reject">Send</button>
		</div>
	</div>
  </div>

</form>

</div>

<br/>