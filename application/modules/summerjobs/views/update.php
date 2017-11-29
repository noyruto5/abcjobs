<h3><?= $title ?></h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('admin/index'); ?>">Admin</a></li>
  <li><?= $title ?></li>
</ul>

<?php if (validation_errors()) { ?>
<div class="danger col-sm-6 col-sm-offset-6" style="width: 80%;">
  <p><?php echo validation_errors(); ?></p>
</div>
<?php } ?>

<?php echo form_open('summerjobs/update'); ?>

<div class="container add-job-form" style="width: 80%; margin-top: 20px;">

	<div class="row">
		<div class="col-sm-3">
			<label>Slots: </label>
		</div>
		<div class="col-sm-9">
			<input type="number" class="form-control" name="slots" required value="<?= $summerjobs_item['slots'] ?>" >
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-sm-3">
			<label>Details: </label>
		</div>
		<div class="col-sm-9">
			<textarea class="form-control" rows="5" wrap="soft" name="details"><?= $summerjobs_item['details'] ?></textarea>
		</div>
	</div>
	<br/>
	<button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
</div>

</form>