<div><?php echo ( ! empty($error) ? $error : '' ); ?></div>
<?php echo form_open(current_url(), array('class'=>'frame form-signin')); ?>
	<h2 class="form-signin-heading">Please sign in</h2>
	<input type="text" name="username" class="form-control" placeholder="username" required autofocus>
	<input type="password" name="password" class="form-control" placeholder="Password" required>
	<label class="checkbox">
		<input type="checkbox" name="remember_me" value="1"> Remember me
	</label>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>