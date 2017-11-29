<h3><?= ucfirst($category) ?></h3>
<ul class="breadcrumb">
  <li><a href="<?= site_url('admin/index') ?>">Admin</a></li>

  <?php	if (isset($field_name2) && $field_name2 == "accepted" && isset($field_value2) && $field_value2 == "yes") { ?>

  	 <li><a href="<?= site_url('applicants/index/').$field_name1."/".$field_value1."/".$field_name2."/".$field_value2 ?>"><?= $category ?></a></li>

  <?php } else { ?>

	<li><a href="<?= site_url('applicants/index/').$field_name1."/".$field_value1."/".$field_name2."/".$field_value2 ?>"><?= $category ?></a></li>
  
  <?php } ?>
 
  <li><?= ucfirst($applicants_item['fname']) ?></li>
</ul>


<h4>Personal Info</h4>
<table class="tbl-profile">
	<tr><th>Name: </th><td><?= $applicants_item['fname']." ".$applicants_item['mname']." ".$applicants_item['lname']; ?></td></tr>
	<tr><th>Age: </th>
		<td>
			<?php 
				$from = new DateTime($applicants_item['bdate']);
				$to = new DateTime('today');

				echo $from->diff($to)->y;
			?>
		</td>
	</tr>
	<tr><th>Date of Birth: </th><td><?= $applicants_item['bdate'];?></td></tr>
	<tr><th>Place of Birth: </th><td><?= $applicants_item['bplace'];?></td></tr>
	<tr><th>Sex: </th><td><?= $applicants_item['sex'];?></td></tr>
	<tr><th>Citizenship: </th><td><?= $applicants_item['citizenship'];?></td></tr>
	<tr><th>Civil Status: </th><td><?= $applicants_item['status'];?></td></tr>
	<tr><th>Email: </th><td><?= $applicants_item['email'];?></td></tr>
	<tr><th>Height: </th><td><?= $applicants_item['height'];?></td></tr>
	<tr><th>Weight: </th><td><?= $applicants_item['weight'];?></td></tr>
	<tr><th>Religion: </th><td><?= $applicants_item['religion'];?></td></tr>
	<tr><th>Present Address: </th><td><?= $applicants_item['present_add'];?></td></tr>
	<tr><th>Permanent: </th><td><?= $applicants_item['perm_add'];?></td></tr>
	<tr><th>TIN No.: </th><td><?= $applicants_item['tin_no'];?></td></tr>
	<tr><th>GSIS/SSS No.: </th><td><?= $applicants_item['gsss_no'];?></td></tr>
	<tr><th>PAGIBIG No.: </th><td><?= $applicants_item['pagibig_no'];?></td></tr>
	<tr><th>PhilHealth No.: </th><td><?= $applicants_item['philhealth_no'];?></td></tr>
	<tr><th>Landline No.: </th><td><?= $applicants_item['landline_no'];?></td></tr>
	<tr><th>Mobile No.: </th><td><?= $applicants_item['mobile_no'];?></td></tr>
	<tr><th>Employment Status: </th><td><?= $applicants_item['employment_status'];?></td></tr>
</table>
<br/>
<hr>
<br/>
<h4>Job Preferences</h4>
<table class="tbl-profile">
	<tr><th>Prefered Occupation: </th><td><?= $applicants_item['occupation1'].", ".$applicants_item['occupation2'].", ".$applicants_item['occupation3'];?></td></tr>
	<tr><th>Prefered Industry: </th><td><?= $applicants_item['industry1'].", ".$applicants_item['industry2'].", ".$applicants_item['industry3'];?></td></tr>
	<tr><th>Prefered Work Location: </th><td><?= $applicants_item['location1'].", ".$applicants_item['location2'].", ".$applicants_item['location3']." (".$applicants_item['pref_location'].")";?></td></tr>
	<tr><th>With Passport: </th><td><?= $applicants_item['with_passport'];?></td></tr>
	<tr><th>Passport Expiry Date: </th><td><?= $applicants_item['pass_exp_date'];?></td></tr>
</table>
<br/>
<hr>
<br/>
<h4>Language Profeciency</h4>
<table class="tbl-profile">
	<tr>
		<th>Language (Yes/No)</th>
		<th>Read</th>
		<th>Write</th>
		<th>Speak</th>
		<th>Understand</th>
	</tr>
	<tr>
		<td>English</td>
		<td><?= $applicants_item['eng_read'] ?></td>
		<td><?= $applicants_item['eng_write'] ?></td>
		<td><?= $applicants_item['eng_speak'] ?></td>
		<td><?= $applicants_item['eng_under'] ?></td>
	</tr>
	<tr>
		<td>Filipino</td>
		<td><?= $applicants_item['fil_read'] ?></td>
		<td><?= $applicants_item['fil_write'] ?></td>
		<td><?= $applicants_item['fil_speak'] ?></td>
		<td><?= $applicants_item['fil_under'] ?></td>
	</tr>
	<tr>
		<td>Others: <?= $applicants_item['other_lang'] ?></td>
		<td><?= $applicants_item['olang_read'] ?></td>
		<td><?= $applicants_item['olang_write'] ?></td>
		<td><?= $applicants_item['olang_speak'] ?></td>
		<td><?= $applicants_item['olang_under'] ?></td>
	</tr>
</table>
<br/>
<hr>
<br/>
<h4>Educational Background</h4>
<table class="tbl-profile">
	<tr><th>Currently in School?: </th><td><?= $applicants_item['in_school'];?></td></tr>
	<tr><th>Highest Educational Level: </th><td><?= $applicants_item['hi_ed_level'];?></td></tr>
	<tr><th>Last Year Attended: </th><td><?= $applicants_item['year_grad'];?></td></tr>
	<tr><th>School/University: </th><td><?= $applicants_item['school_name'];?></td></tr>
	<tr><th>Course/Program: </th><td><?= $applicants_item['course'];?></td></tr>
	<tr><th>Awards/Honor Recieved: </th><td><?= $applicants_item['award'];?></td></tr>
</table>
<br/>
<hr>
<br/>
<h4>Technical/Vocational and Other Training (included courses taken as part of college education)</h4>
<table class="tbl-profile">
	<tr>
		<th>Training</th>
		<th>Course Duration</th>
		<th>Training Institution</th>
		<th>Certificates Received</th>
		<th>Completed</th>
	</tr>
	<tr>
		<td><?= $applicants_item['training1'] ?></td>
		<td><?= $applicants_item['course_duration1'] ?></td>
		<td><?= $applicants_item['institution1'] ?></td>
		<td><?= $applicants_item['cert1'] ?></td>
		<td><?= $applicants_item['completed1'] ?></td>
	</tr>
	<tr>
		<td><?= $applicants_item['training2'] ?></td>
		<td><?= $applicants_item['course_duration2'] ?></td>
		<td><?= $applicants_item['institution2'] ?></td>
		<td><?= $applicants_item['cert2'] ?></td>
		<td><?= $applicants_item['completed2'] ?></td>
	</tr>
	<tr>
		<td><?= $applicants_item['training3'] ?></td>
		<td><?= $applicants_item['course_duration3'] ?></td>
		<td><?= $applicants_item['institution3'] ?></td>
		<td><?= $applicants_item['cert3'] ?></td>
		<td><?= $applicants_item['completed3'] ?></td>
	</tr>
	<tr>
		<td><?= $applicants_item['training4'] ?></td>
		<td><?= $applicants_item['course_duration4'] ?></td>
		<td><?= $applicants_item['institution4'] ?></td>
		<td><?= $applicants_item['cert4'] ?></td>
		<td><?= $applicants_item['completed4'] ?></td>
	</tr>
</table>
<br/>
<hr>
<br/>
<h4>Eligibility/License</h4>
<table class="tbl-profile">
	<tr>
		<th>Career Service/Board/Bar</th>
		<th>License Number</th>
		<th>Expiry Date</th>
	</tr>
	<tr>
		<td><?= $applicants_item['el_name1'] ?></td>
		<td><?= $applicants_item['el_no1'] ?></td>
		<td><?= $applicants_item['exp_date1'] ?></td>
	</tr>
	<tr>
		<td><?= $applicants_item['el_name2'] ?></td>
		<td><?= $applicants_item['el_no2'] ?></td>
		<td><?= $applicants_item['exp_date2'] ?></td>
	</tr>
</table>
<br/>
<hr>
<br/>
<h4>Work Experience (Limit to 10 years experience, start with most recent employment)</h4>
<table class="tbl-profile">
	<tr>
		<th>Name of Office/Company</th>
		<th>Address</th>
		<th>Position Held</th>
		<th>Include Dates</th>
		<th>Status of Appointment</th>
	</tr>
	<tr>
		<td><?= $applicants_item['comp_name1'] ?></td>
		<td><?= $applicants_item['comp_address1'] ?></td>
		<td><?= $applicants_item['position1'] ?></td>
		<td><?= $applicants_item['work_date1'] ?></td>
		<td><?= $applicants_item['appointment1'] ?></td>
	</tr>
	<tr>
		<td><?= $applicants_item['comp_name2'] ?></td>
		<td><?= $applicants_item['comp_address2'] ?></td>
		<td><?= $applicants_item['position2'] ?></td>
		<td><?= $applicants_item['work_date2'] ?></td>
		<td><?= $applicants_item['appointment2'] ?></td>
	</tr>
	<tr>
		<td><?= $applicants_item['comp_name3'] ?></td>
		<td><?= $applicants_item['comp_address3'] ?></td>
		<td><?= $applicants_item['position3'] ?></td>
		<td><?= $applicants_item['work_date3'] ?></td>
		<td><?= $applicants_item['appointment3'] ?></td>
	</tr>
</table>
<br/>
<hr>
<br/>
<h4>Other Skills Acquired without Formal Training</h4>
<table class="tbl-profile">
	<tr>
		<td><?= $applicants_item['skills1'].", ".$applicants_item['skills2'].", ".$applicants_item['skills3'].
		", ".$applicants_item['skills4'].", ".$applicants_item['skills5'].", ".$applicants_item['skills6'] ?></td>
	</tr>
</table>

<hr>
<?php if (isset($field_name2) && $field_name2 == "accepted" && isset($field_value2) && $field_value2 == "yes") { ?>
	<!--No output-->
<?php } else { ?>
	<a href="#" class="btn btn-danger" id="btn-reject" title="Click to reject">Not Qualified</a>&nbsp;
	<a href="#" class="btn btn-primary" id="btn-accept" title="Click to accept">Accept</a>
<?php } ?>

<!-- The Modal 1-->
<div id="myModal1" class="modal">

<?php echo form_open('applicants/accept_reject_applicants'); ?>

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
			<input type="text" class="form-control" name="sms_to" required value="<?= $applicants_item['mobile_no'] ?>" >
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

<?php echo form_open('applicants/accept_reject_applicants'); ?>

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
			<input type="text" class="form-control" name="sms_to" required value="<?= $applicants_item['mobile_no'] ?>" >
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