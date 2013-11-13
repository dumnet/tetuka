	<?php
		echo form_open(current_url());

		echo '<table border="0" cellspacing="0" cellpadding="0" id="table">';
		echo '<caption>BitAuth Example: '.$title.'</caption>';
		echo '<tr><td class="label">Username</td><td>'.form_input('username', set_value('username')).'</td></tr>';
		echo '<tr><td class="label">Full Name</td><td>'.form_input('fullname', set_value('fullname')).'</td></tr>';
		echo '<tr><td class="label">Email</td><td>'.form_input('email', set_value('email')).'</td></tr>';
		echo '<tr><td class="label">Password</td><td>'.form_password('password').'</td></tr>';
		echo '<tr><td class="label">Confirm Password</td><td>'.form_password('password_conf').'</td></tr>';

		if(validation_errors())
		{
			echo '<tr><td colspan="2">'.validation_errors().'</td></tr>';
		}

		echo '<tr><td class="label" colspan="2">'.form_submit('submit',$title).'</td></tr>';
		echo '</table>';
		echo form_close();

		echo '<div id="bottom">';
		if(isset($bitauth) && $bitauth->logged_in())
		{
			echo anchor('example/logout', 'Logout', 'style="float: right;"');
		}
		else
		{
			echo anchor('example/login', 'Login', 'style="float: right;"');
		}
		echo '</div>';

	?>
