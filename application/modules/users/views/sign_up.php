<h3>Sign up form</h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('home'); ?>">Home</a></li>
  <li>Sign up</li>
</ul>

<?php if (validation_errors()) { ?>
<div class="danger col-sm-4 col-sm-offset-8">
  <p><?php echo validation_errors(); ?></p>
</div>
<?php } ?>

<br />

<?php echo form_open('users/sign_up'); ?>
	
	<div class="signup-form col-sm-4 col-sm-offset-8" style="border:1px solid #ccc;">
	    <label><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="username" required>

	    <label><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="password" required>

	    <label><b>Repeat Password</b></label>
	    <input type="password" placeholder="Repeat Password" name="password_repeat" required>

	    <label><b>Email</b></label>
	    <input type="email" placeholder="Enter Email" name="email" required>

	    <input type="radio" checked="checked" name="role" value="student"> Student 
	    <input type="radio" name="role" value="applicant"> Job Applicant
	    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

	    <div class="clearfix">
	      <button type="submit" class="btn btn-primary">Sign Up</button>
	    </div>
	</div>

</form>