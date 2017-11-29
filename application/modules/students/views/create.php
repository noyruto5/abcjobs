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

<?php echo form_open('students/create'); ?>

<div class="container" style="width: 80%; margin-top: 20px; margin-bottom: 50px;">
	<div class="row jumbotron" style="text-align: center; ">
		<div class="row">
			<div class="col-sm-4">
				<label for="lname">Surname</label>
				<input type="text" class="form-control" name="lname" required value="<?php echo set_value('lname'); ?>">
			</div>
			<div class="col-sm-4">
				<label for="fname">First Name</label>
				<input type="text" class="form-control" name="fname" required value="<?php echo set_value('fname'); ?>">
			</div>
			<div class="col-sm-4">
				<label for="mname">Middle Name</label>
				<input type="text" class="form-control" name="mname" required value="<?php echo set_value('mname'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-4">
				<label for="bdate">Date of Birth</label>
				<input type="date" class="form-control" name="bdate" required value="<?php echo set_value('bdate'); ?>">
			</div>
			<div class="col-sm-4">
				<label for="bplace">Place of Birth</label>
				<input type="text" class="form-control" name="bplace" required value="<?php echo set_value('bplace'); ?>">
			</div>
			<div class="col-sm-4">
				<label for="citizenship">Citizenship</label>
				<input type="text" class="form-control" name="citizenship" required value="<?php echo set_value('citizenship'); ?>">
			</div>
		</div>
	</div>

	<div class="row jumbotron">
		<div class="col-sm-4" style="text-align: center;">
			<div class="row">
				<label for="contact_no">Contact No.</label>
				<input type="text" class="form-control" name="contact_no" required value="<?php echo set_value('contact_no'); ?>">
			</div>
			<div class="row" style="margin-top: 20px;">
				<label for="email">Email Address</label>
				<input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
			</div>
		</div>
		<div class="col-sm-8">
			<div class="col-sm-4">
				<label>Status</label><br/>
				<input type="radio" name="status" value="Single" required> Single<br/>
				<input type="radio" name="status" value="Married" required> Married<br/>
				<input type="radio" name="status" value="Widowed" required> Widowed<br/>
				<input type="radio" name="status" value="Seperated" required> Seperated
			</div>
			<div class="col-sm-4">
				<label>Sex</label><br/>
				<input type="radio" name="sex" value="Male" required> Male<br/>
				<input type="radio" name="sex" value="Female" required> Female<br/>
			</div>
			<div class="col-sm-4">
				<br/>
				<input type="radio" name="sclass" value="Student" required> Student<br/>
				<input type="radio" name="sclass" value="ALS Student" required> ALS Student<br/>
				<input type="radio" name="sclass" value="Out-Of-School (OSY)" required> Out-Of-School (OSY)<br/>
			</div>
		</div>
	</div>

	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-4">
				<label>Current Status of Parents</label><br/>
				<input type="checkbox" name="parent_status[0]" value="Living Together"> Living Together<br/>
				<input type="checkbox" name="parent_status[1]" value="Solo Parent"> Solo Parent<br/>
				<input type="checkbox" name="parent_status[2]" value="Seperated"> Seperated<br/>
				<input type="checkbox" name="parent_status[3]" value="Person with Disability"> Person with Disability<br/>
			</div>
			<div class="col-sm-4">
				<br/>
				<input type="checkbox" name="parent_status[4]" value="Senior Citizen"> Senior Citizen<br/>
				<input type="checkbox" name="parent_status[5]" value="Sugar Plantation Worker"> Sugar Plantation Worker<br/>
				<input type="checkbox" name="parent_status[6]" value="Indigenous Peopled"> Indigenous People<br/>
				<input type="checkbox" name="parent_status[7]" value="Displaced Worker"> Displaced Worker<br/>
			</div>
			<div class="col-sm-4">
				<br/>
				<input type="checkbox" name="parent_status[8]" value="local"> (1)Local<br/>
				<input type="checkbox" name="parent_status[9]" value="OFW"> (2)OFW<br/>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="form-group col-sm-12">
				<label for="address">Permanent Address: </label>
				<input type="text" class="form-control" name="address" required value="<?php echo set_value('address'); ?>">
			</div>
		</div>
	</div>

	<div class="row jumbotron" style="text-align: center;">
		<div class="row">
			<div class="col-sm-4">
				<label>Father's Name</label>
				<input type="text" class="form-control" name="fathers_name" required value="<?php echo set_value('fathers_name'); ?>">
			</div>
			<div class="col-sm-4">
				<label>Contact Number</label>
				<input type="text" class="form-control" name="fathers_contact" value="<?php echo set_value('fathers_contact'); ?>">
			</div>
			<div class="col-sm-4">
				<label>Occupation</label>
				<input type="text" class="form-control" name="fathers_occupation" value="<?php echo set_value('fathers_occupation'); ?>">
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-4">
				<label>Mother's Name</label>
				<input type="text" class="form-control" name="mothers_name" required value="<?php echo set_value('mothers_name'); ?>">
			</div>
			<div class="col-sm-4">
				<label>Contact Number</label>
				<input type="text" class="form-control" name="mothers_contact" value="<?php echo set_value('mothers_contact'); ?>">
			</div>
			<div class="col-sm-4">
				<label>Occupation</label>
				<input type="text" class="form-control" name="mothers_occupation" value="<?php echo set_value('mothers_occupation'); ?>">
			</div>
		</div>
	</div>

	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-1">
				<label>Education</label>
			</div>
			<div class="col-sm-11" style="text-align: center;">
				<div class="col-sm-3">
					<label>Name of School</label>
				</div>
				<div class="col-sm-3">
					<label>Degree Learned/Course</label>
				</div>
				<div class="col-sm-3">
					<label>Year/Level</label>
				</div>
				<div class="col-sm-3">
					<label>Date of Attendant</label>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-1">
				Elementary
			</div>
			<div class="col-sm-11">
				<div class="col-sm-3">
					<input type="text" class="form-control" name="school_name1" required value="<?php echo set_value('school_name1'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="course1" value="<?php echo set_value('course1'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="yr_level1" required value="<?php echo set_value('yr_level1'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="date_attend1" required value="<?php echo set_value('date_attend1'); ?>">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-1">
				Secondary
			</div>
			<div class="col-sm-11">
				<div class="col-sm-3">
					<input type="text" class="form-control" name="school_name2" value="<?php echo set_value('school_name2'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="course2" value="<?php echo set_value('course2'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="yr_level2" value="<?php echo set_value('yr_level2'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="date_attend2" value="<?php echo set_value('date_attend2'); ?>">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-1">
				Tertiary
			</div>
			<div class="col-sm-11">
				<div class="col-sm-3">
					<input type="text" class="form-control" name="school_name3" value="<?php echo set_value('school_name3'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="course3" value="<?php echo set_value('course3'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="yr_level3" value="<?php echo set_value('yr_level3'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="date_attend3" value="<?php echo set_value('date_attend3'); ?>">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-1">
				Tech-Voc
			</div>
			<div class="col-sm-11">
				<div class="col-sm-3">
					<input type="text" class="form-control" name="school_name4" value="<?php echo set_value('school_name4'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="course4" value="<?php echo set_value('course4'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="yr_level4" value="<?php echo set_value('yr_level4'); ?>">
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="date_attend4" value="<?php echo set_value('date_attend4'); ?>">
				</div>
			</div>
		</div>
	</div>

	<div class="row jumbotron">
		<div class="row">
			<div class="col-sm-5">
				<div class="form-inline">
					<label>Special Skills:&nbsp;</label>
					<input type="text" class="form-control" name="skills" value="<?php echo set_value('skills'); ?>">
				</div>
			</div>
		</div>
		<hr>
		<div class="row" style="margin-top: 15px;">
			<div class="col-sm-3">
				<label>History of SPES Availment / Name of Establishment</label>
			</div>
			<div class="col-sm-9" style="text-align: center;">
				<div class="col-sm-4">
					<label>Availment</label>
				</div>
				<div class="col-sm-4">
					<label>Year</label>
				</div>
				<div class="col-sm-4">
					<label>SPES ID NO. (if applicable)</label>
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-3">
				1st Availment
			</div>
			<div class="col-sm-9">
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_avail1" value="<?php echo set_value('spes_avail1'); ?>">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_year1" value="<?php echo set_value('spes_year1'); ?>">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_id1" value="<?php echo set_value('spes_id1'); ?>">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-3">
				2nd Availment
			</div>
			<div class="col-sm-9">
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_avail2" value="<?php echo set_value('spes_avail2'); ?>">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_year2" value="<?php echo set_value('spes_year2'); ?>">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_id2" value="<?php echo set_value('spes_id2'); ?>">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-3">
				3rd Availment
			</div>
			<div class="col-sm-9">
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_avail3" value="<?php echo set_value('spes_avail3'); ?>">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_year3" value="<?php echo set_value('spes_year3'); ?>">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_id3" value="<?php echo set_value('spes_id3'); ?>">
				</div>
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-sm-3">
				4rt Availment
			</div>
			<div class="col-sm-9">
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_avail4" value="<?php echo set_value('spes_avail4'); ?>">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_year4" value="<?php echo set_value('spes_year4'); ?>">
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="spes_id4" value="<?php echo set_value('spes_id4'); ?>">
				</div>
			</div>
		</div>
	</div>

	<div class="row jumbotron">
		<label>Qualifications</label><br/>
		<input type="checkbox" name="qualifications[0]" value="Must be a resident of Sagay City, Negros Occidental">&nbsp;&nbsp;Must be a resident of Sagay City, Negros Occidental<br/>
		<input type="checkbox" name="qualifications[1]" value="No scholarship">&nbsp;&nbsp;No scholarship<br/>
		<input type="checkbox" name="qualifications[2]" value="Must be a high school or college student">&nbsp;&nbsp;Must be a high school or college student<br/>
		<input type="checkbox" name="qualifications[3]" value="Not over 26,000/year income">&nbsp;&nbsp;Not over 26,000/year income<br/>
		<input type="checkbox" name="qualifications[4]" value="Poor but deserving students">&nbsp;&nbsp;Poor but deserving students<br/>
		<input type="checkbox" name="qualifications[5]" value="Indigent Parent">&nbsp;&nbsp;Indigent Parent<br/>
		<input type="checkbox" name="qualifications[6]" value="Age must be 15-30 years old">&nbsp;&nbsp;Age must be 15-30 years old<br/>
	</div>

	<button type="submit" class="btn btn-primary" style="float: right;">Submit Application</button>
</div>

</form>