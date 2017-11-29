<h3>Add Jobs</h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('admin/index'); ?>">Admin</a></li>
  <li>Add Jobs</li>
</ul>

<?php if (validation_errors()) { ?>
<div class="danger col-sm-6 col-sm-offset-6" style="width: 80%;">
  <p><?php echo validation_errors(); ?></p>
</div>
<?php } ?>

<?php echo form_open('jobs/create'); ?>

<div class="container add-job-form" style="width: 80%; margin-top: 20px;">
	<div class="row">
		<div class="col-sm-3">
			<label>Agency Name: </label>
		</div>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="agency_name" required value="<?php echo set_value('agency_name'); ?>" >
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-3">
			<label>Agency Address: </label>
		</div>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="agency_address" required value="<?php echo set_value('agency_address'); ?>" >
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-3">
			<label>Job Title: </label>
		</div>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="job_title" required value="<?php echo set_value('job_title'); ?>">
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<label>Position Available: </label>
		</div>
		<div class="col-sm-9">
			<input type="number" class="form-control" name="position_available" required value="<?php echo set_value('position_available'); ?>">
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-3">
			<label>Hiring Country/Places: </label>
		</div>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="hiring_country"  value="<?php echo set_value('hiring_country'); ?>">
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-3">
			<label>Qualifications: </label>
		</div>
		<div class="col-sm-9">
			<textarea class="form-control" rows="5" wrap="soft" name="qualifications"><?php echo set_value('qualifications'); ?></textarea>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-3">
			<label>Requirements: </label>
		</div>
		<div class="col-sm-9">
			<textarea class="form-control" rows="5" wrap="soft" name="requirements"><?php echo set_value('requirements'); ?></textarea>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3">
			<label>Other Benifits: </label>
		</div>
		<div class="col-sm-9">
			<textarea class="form-control" rows="5" wrap="soft" name="benifits"><?php echo set_value('benifits'); ?></textarea>
		</div>
	</div>

	<button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
</div>

</form>