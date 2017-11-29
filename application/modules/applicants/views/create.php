<h3>Application Form</h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
  <li>Application Form</li>
</ul>

<?php if (validation_errors()) { ?>
<div class="danger col-sm-6 col-sm-offset-6" style="width: 80%;">
  <p><?php echo validation_errors(); ?></p>
</div>
<?php } ?>

<?php echo form_open('applicants/create'); ?>

<div class="container applicant-form">

	<h4>Personal Profile</h4>
	<hr>
	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-3">
				<label for="lname">Surname</label>
				<input type="text" class="form-control" name="lname" required value="<?php echo set_value('lname'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="fname">First Name</label>
				<input type="text" class="form-control" name="fname" required value="<?php echo set_value('fname'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="mname">Middle Name</label>
				<input type="text" class="form-control" name="mname" required value="<?php echo set_value('mname'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="sex">Sex</label>
				<select class="form-control" name="sex" required>
					<option><?php echo set_value('sex'); ?></option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-3">
				<label for="bdate">Date of Birth</label>
				<input type="date" class="form-control" name="bdate" required value="<?php echo set_value('bdate'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="bplace">Place of Birth</label>
				<input type="text" class="form-control" name="bplace" required value="<?php echo set_value('bplace'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="status">Civil Status</label>
				<select class="form-control" name="status" required>
					<option><?php echo set_value('status'); ?></option>
					<option>Single</option>
					<option>Widowed</option>
					<option>Married</option>
					<option>Seperated</option>
					<option>Others</option>
				</select>
			</div>
			<div class="col-sm-3">
				<label for="citizenship">Citizenship</label>
				<input type="text" class="form-control" name="citizenship" required value="<?php echo set_value('citizenship'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-3">
				<label for="height">Height</label>
				<input type="text" class="form-control" name="height" value="<?php echo set_value('height'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="weight">Weight</label>
				<input type="text" class="form-control" name="weight" value="<?php echo set_value('weight'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="religion">Religion</label>
				<input type="text" class="form-control" name="religion" value="<?php echo set_value('religion'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
			</div>
		</div>
	</div>
	<hr>
	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-3">
				<label for="tin_no">TIN No.</label>
				<input type="text" class="form-control" name="tin_no" value="<?php echo set_value('tin_no'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="gsss">GSIS/SSS No.</label>
				<input type="text" class="form-control" name="gsss_no" value="<?php echo set_value('gsss_no'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="pagibig_no">PAG-IBIG No.</label>
				<input type="text" class="form-control" name="pagibig_no" value="<?php echo set_value('pagibig_no'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="philhealth_no">Philhealth No.</label>
				<input type="text" class="form-control" name="philhealth_no" value="<?php echo set_value('philhealth_no'); ?>">
			</div>
		</div>
	</div>
	<hr>
	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-2">
				<label for="present_add">Present Address</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="present_add" required value="<?php echo set_value('present_add'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-2">
				<label for="perm_add">Permanent Address</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="perm_add" value="<?php echo set_value('perm_add'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-3">
				<label for="landline_no">Landline No.</label>
				<input type="text" class="form-control" name="landline_no" value="<?php echo set_value('landline_no'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="mobile_no">Mobile No.</label>
				<input type="text" class="form-control" name="mobile_no" required value="<?php echo set_value('mobile_no'); ?>">
			</div>
			<div class="col-sm-3">
				<label for="mobile_no">Employment Status</label>
				<select class="form-control" name="employment_status" required>
					<option><?php echo set_value('employment_status'); ?></option>
					<option>Wage Employed</option>
					<option>Self Employed</option>
					<option>New Entrant/Fresh Graduate</option>
					<option>Finished Contract</option>
					<option>Resigned</option>
					<option>Retired</option>
					<option>Terminated/Laid off(local)</option>
					<option>Terminated/Laid off(abroad)</option>
					<option>Others</option>
				</select>
			</div>
		</div>
	</div>
	<br/>
	<h4>Job Preferences</h4>
	<hr>
	<div class="row jumbotron">
		<label>PREFERRED OCCUPATION AND INDUSTRY</label>
		<div class="row">
			<div class="col-sm-4">
				<label>Occupation</label>
				<input type="text" class="form-control" name="occupation1" value="<?php echo set_value('occupation1'); ?>"><br/>
				<input type="text" class="form-control" name="occupation2" value="<?php echo set_value('occupation2'); ?>"><br/>
				<input type="text" class="form-control" name="occupation3" value="<?php echo set_value('occupation3'); ?>">
			</div>
			<div class="col-sm-4">
				<label>Industry</label>
				<input type="text" class="form-control" name="industry1" value="<?php echo set_value('industry1'); ?>"><br/>
				<input type="text" class="form-control" name="industry2" value="<?php echo set_value('industry2'); ?>"><br/>
				<input type="text" class="form-control" name="industry3" value="<?php echo set_value('industry3'); ?>">
			</div>
		</div>
		<hr>
		<label>PREFERRED WORK LOCATION</label>
		<div class="row">
			<div class="col-sm-4">
				<label><input type="radio" name="pref_location" value="Local">&nbsp;Local, specify cities/municipalities</label>
				<input type="text" class="form-control" name="location1" value="<?php echo set_value('location1'); ?>"><br/>
				<input type="text" class="form-control" name="location2" value="<?php echo set_value('location2'); ?>"><br/>
				<input type="text" class="form-control" name="location3" value="<?php echo set_value('location3'); ?>">
			</div>
			<div class="col-sm-4">
				<label><input type="radio" name="pref_location" value="Overseas">&nbsp;Overseas, specify countries</label>
				<input type="text" class="form-control" name="location1" value="<?php echo set_value('location1'); ?>"><br/>
				<input type="text" class="form-control" name="location2" value="<?php echo set_value('location2'); ?>"><br/>
				<input type="text" class="form-control" name="location3" value="<?php echo set_value('location3'); ?>">
			</div>
			<div class="col-sm-4">
				<label>With Passport?</label><br/>
				<label><input type="radio" name="with_passport" value="Yes"> Yes</label>
				<label><input type="radio" name="with_passport" value="No"> No</label>
				<br/><br/>
				<label>Expiry Date</label>
				<input type="date" class="form-control" name="pass_exp_date" value="<?php echo set_value('pass_exp_date'); ?>">
			</div>
		</div>			
	</div>
	<br/>
	<h4>Language Proficiency</h4>
	<hr>
	<div class="row jumbotron">
		<table class="tbl-lang-prof">
			<thead>
				<tr>
					<th>Language (Yes/No)</th>
					<th>Read</th>
					<th>Write</th>
					<th>Speak</th>
					<th>Understand</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>English</td>
					<td>
						<label><input type="radio" name="eng_read" required value="Yes"> Yes</label><br/>
						<label><input type="radio" name="eng_read" required value="No"> No</label>
					</td>
					<td>
						<label><input type="radio" name="eng_write" required value="Yes"> Yes</label><br/>
						<label><input type="radio" name="eng_write" required value="No"> No</label>
					</td>
					<td>
						<label><input type="radio" name="eng_speak" required value="Yes"> Yes</label><br/>
						<label><input type="radio" name="eng_speak" required value="No"> No</label>
					</td>
					<td>
						<label><input type="radio" name="eng_under" required value="Yes"> Yes</label><br/>
						<label><input type="radio" name="eng_under" required value="No"> No</label>
					</td>
				</tr>
				<tr>
					<td>Filipino</td>
					<td>
						<label><input type="radio" name="fil_read" required value="Yes"> Yes</label><br/>
						<label><input type="radio" name="fil_read" required value="No"> No</label>
					</td>
					<td>
						<label><input type="radio" name="fil_write" required value="Yes"> Yes</label><br/>
						<label><input type="radio" name="fil_write" required value="No"> No</label>
					</td>
					<td>
						<label><input type="radio" name="fil_speak" required value="Yes"> Yes</label><br/>
						<label><input type="radio" name="fil_speak" value="No"> No</label>
					</td>
					<td>
						<label><input type="radio" name="fil_under" required value="Yes"> Yes</label><br/>
						<label><input type="radio" name="fil_under" required value="No"> No</label>
					</td>
				</tr>
				<tr>
					<td>
						<div class="form-inline">
							Others: <input type="text" class="form-control" name="other_lang">
						</div>
					</td>
					<td>
						<label><input type="radio" name="olang_read" value="Yes"> Yes</label><br/>
						<label><input type="radio" name="olang_read" value="No"> No</label>
					</td>
					<td>
						<label><input type="radio" name="olang_write" value="Yes"> Yes</label><br/>
						<label><input type="radio" name="olang_write" value="No"> No</label>
					</td>
					<td>
						<label><input type="radio" name="olang_speak" value="Yes"> Yes</label><br/>
						<label><input type="radio" name="olang_speak" value="No"> No</label>
					</td>
					<td>
						<label><input type="radio" name="olang_under" value="Yes"> Yes</label><br/>
						<label><input type="radio" name="olang_under" value="No"> No</label>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br/>
	<h4>Educational Background</h4>
	<hr>
	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-3">
				Currently in School?&nbsp;
				<label><input type="radio" name="in_school" required value="Yes">&nbsp;Yes</label>
				<label><input type="radio" name="in_school" required value="No">&nbsp;No</label>
			</div>
			<div class="col-sm-3">
				<label>Highest Education Level</label>
				<select class="form-control" name="hi_ed_level" required>
					<option><?php echo set_value('hi_ed_level'); ?></option>
					<option>College Graduate</option>
					<option>Post Graduate</option>
					<option>Technical-Vocational Graduate</option>
					<option>Incomplete College Level</option>
					<option>High School Graduate</option>
					<option>Incomplete High School Level</option>
					<option>Elementary Graduate</option>
					<option>Incomplete Elementary Level</option>
					<option>No Formal Education</option>
				</select>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-3">
				<label>Year Last Attended(YYYY)</label>
				<input type="text" class="form-control" name="year_grad" required value="<?php echo set_value('year_grad'); ?>">
			</div>
			<div class="col-sm-3">
				<label>School/University</label>
				<input type="text" class="form-control" name="school_name" required value="<?php echo set_value('school_name'); ?>">
			</div>
			<div class="col-sm-3">
				<label>Course/Program</label>
				<input type="text" class="form-control" name="course" value="<?php echo set_value('course'); ?>">
			</div>
			<div class="col-sm-3">
				<label>Awards/Honor Received</label>
				<input type="text" class="form-control" name="award" value="<?php echo set_value('award'); ?>">
			</div>
		</div>
	</div>
	<br/>
	<h4>Technical/Vocational and Other Training (include courses taken as part of college education)</h4>
	<hr>
	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-10">
				<div class="col-sm-3">
					<label>Training</label>
				</div>
				<div class="col-sm-3">
					<label>Course Duration</label>
				</div>
				<div class="col-sm-3">
					<label>Training Institution</label>
				</div>
				<div class="col-sm-3">
					<label>Certificates Received</label>
				</div>
			</div>
			<div class="col-sm-2">
				<label>Completed</label>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-10">
				<div class="col-sm-3">
					<input type="text" class="form-control" name="training1" value="<?php echo set_value('training1'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="course_duration1" value="<?php echo set_value('course_duration1'); ?>" placeholder="mm/dd/yyyy - mm/dd/yyyy">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="institution1" value="<?php echo set_value('institution1'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="cert1" value="<?php echo set_value('cert1'); ?>">
				</div>
			</div>
			<div class="col-sm-2">
				<label><input type="radio" value="Yes" name="completed1">&nbsp;Yes</label>&nbsp;
				<label><input type="radio" value="No" name="completed1">&nbsp;No</label>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-10">
				<div class="col-sm-3">
					<input type="text" class="form-control" name="training2" value="<?php echo set_value('training2'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="course_duration2" value="<?php echo set_value('course_duration2'); ?>" placeholder="mm/dd/yyyy - mm/dd/yyyy">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="institution2" value="<?php echo set_value('institution2'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="cert2" value="<?php echo set_value('cert2'); ?>">
				</div>
			</div>
			<div class="col-sm-2">
				<label><input type="radio" value="Yes" name="completed2">&nbsp;Yes</label>&nbsp;
				<label><input type="radio" value="No" name="completed2">&nbsp;No</label>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-10">
				<div class="col-sm-3">
					<input type="text" class="form-control" name="training3" value="<?php echo set_value('training3'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="course_duration3" value="<?php echo set_value('course_duration3'); ?>" placeholder="mm/dd/yyyy - mm/dd/yyyy">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="institution3" value="<?php echo set_value('institution3'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="cert3" value="<?php echo set_value('cert3'); ?>">
				</div>
			</div>
			<div class="col-sm-2">
				<label><input type="radio" value="Yes" name="completed3">&nbsp;Yes</label>&nbsp;
				<label><input type="radio" value="No" name="completed3">&nbsp;No</label>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-10">
				<div class="col-sm-3">
					<input type="text" class="form-control" name="training4" value="<?php echo set_value('training4'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="course_duration4" value="<?php echo set_value('course_duration4'); ?>" placeholder="mm/dd/yyyy - mm/dd/yyyy">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="institution4" value="<?php echo set_value('institution4'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="cert4" value="<?php echo set_value('cert4'); ?>">
				</div>
			</div>
			<div class="col-sm-2">
				<label><input type="radio" value="Yes" name="completed4">&nbsp;Yes</label>&nbsp;
				<label><input type="radio" value="No" name="completed4">&nbsp;No</label>
			</div>
		</div>
	</div>
	<br/>
	<h4>Eligibility/License</h4>
	<hr>
	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-4">
				<label>Career Service/Board/Bar</label>
			</div>
			<div class="col-sm-4">
				<label>License Number</label>
			</div>
			<div class="col-sm-4">
				<label>Expiry Date</label>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-4">
				<input type="text" class="form-control" name="el_name1" value="<?php echo set_value('el_name1'); ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="el_no1" value="<?php echo set_value('el_no1'); ?>">
			</div>
			<div class="col-sm-4">
				<input type="date" class="form-control" name="exp_date1" value="<?php echo set_value('exp_date1'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-4">
				<input type="text" class="form-control" name="el_name2" value="<?php echo set_value('el_name2'); ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="el_no2" value="<?php echo set_value('el_no2'); ?>">
			</div>
			<div class="col-sm-4">
				<input type="date" class="form-control" name="exp_date2" value="<?php echo set_value('exp_date2'); ?>">
			</div>
		</div>
	</div>
	<br/>
	<h4>Work Experience (Limit to 10 years experience, start with most recent employment)</h4>
	<hr>
	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-2">
				<label>Name of Office/Company</label>
			</div>
			<div class="col-sm-2">
				<label>Address</label>
			</div>
			<div class="col-sm-2">
				<label>Position Held</label>
			</div>
			<div class="col-sm-2">
				<label>Include Dates</label>
			</div>
			<div class="col-sm-2">
				<label>Status of Appointment</label>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-2">
				<input type="text" class="form-control" name="comp_name1" value="<?php echo set_value('comp_name1'); ?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="comp_address1" value="<?php echo set_value('comp_address1'); ?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="position1" value="<?php echo set_value('position1'); ?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="work_date1" value="<?php echo set_value('work_date1'); ?>" placeholder="mm/dd/yyyy - mm/dd/yyyy">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="appointment1" value="<?php echo set_value('appointment1'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-2">
				<input type="text" class="form-control" name="comp_name2" value="<?php echo set_value('comp_name2'); ?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="comp_address2" value="<?php echo set_value('comp_address2'); ?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="position2" value="<?php echo set_value('position2'); ?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="work_date2" value="<?php echo set_value('work_date2'); ?>" placeholder="mm/dd/yyyy - mm/dd/yyyy">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="appointment2" value="<?php echo set_value('appointment2'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-2">
				<input type="text" class="form-control" name="comp_name3" value="<?php echo set_value('comp_name3'); ?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="comp_address3" value="<?php echo set_value('comp_address3'); ?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="position3" value="<?php echo set_value('position3'); ?>">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="work_date3" value="<?php echo set_value('work_date3'); ?>" placeholder="mm/dd/yyyy - mm/dd/yyyy">
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="appointment3" value="<?php echo set_value('appointment3'); ?>">
			</div>
		</div>
	</div>
	<br/>
	<h4>Other Skills Acquired without Formal Training</h4>
	<hr>
	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-4">
				<input type="text" class="form-control" name="skills1" value="<?php echo set_value('skills1'); ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="skills2" value="<?php echo set_value('skills2'); ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="skills3" value="<?php echo set_value('skills3'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-4">
				<input type="text" class="form-control" name="skills4" value="<?php echo set_value('skills4'); ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="skills5" value="<?php echo set_value('skills5'); ?>">
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="skills6" value="<?php echo set_value('skills6'); ?>">
			</div>
		</div>
	</div>
	<br/>
	<hr>
	<div class="row jumbotron" style="text-align: center">
		<h4>Certification/Authorization</h4>

		This is to certify that all data/information that I have in this form are true to the best of my knowledge. This is also to authorize the DOLE 
		to include my profile in the Skills Registry System, which is maintained in the Enhanced Phil-JobNet.
		 It is understood that my name shall be made available to employers who may have access to Registry. 
		 I am also aware that DOLE is not obliged to seek employment on my behalf.
	</div>

	<button type="submit" class="btn btn-primary" style="float: right;">Submit Application</button>
</div>

</form>