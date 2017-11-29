<h3>Login form</h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
  <li>Login</li>
</ul>

<?php if (validation_errors()) { ?>
<div class="danger col-sm-4 col-sm-offset-8" style="float:none; margin: 0 auto;">
  <p><?php echo validation_errors(); ?></p>
</div>
<?php } ?>

<br />

<?php echo form_open('users/login'); ?>

	<div class="signup-form col-sm-4 col-sm-offset-8" style="border:1px solid #ccc;">
	    <label><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="username" required>
	    <br/><br/>
	    <label><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="password" required>
	    <br/>
	    <div class="clearfix">
	      <button type="submit" class="btn btn-primary btn-lg btn-block">login</button>
	    </div>
	</div>
</form>