
	<?php
		$yesno = array('No','Yes');

		echo form_open(current_url());

		echo '<table border="0" cellspacing="0" cellpadding="0" id="table">';
		echo '<caption>BitAuth Example: Edit User</caption>';

		if( ! empty($user))
		{
			echo '<tr><td class="label">Username</td><td>'.form_input('username', set_value('username', $user->username)).'</td></tr>';
			echo '<tr><td class="label">Full Name</td><td>'.form_input('fullname', set_value('fullname', $user->fullname)).'</td></tr>';
			echo '<tr><td class="label">Email</td><td>'.form_input('email', set_value('email', $user->email)).'</td></tr>';
			echo '<tr><td class="label">Active</td><td>'.form_dropdown('active', $yesno, set_value('active', $user->active)).'</td></tr>';
			echo '<tr><td class="label">Enabled</td><td>'.form_dropdown('enabled', $yesno, set_value('enabled', $user->enabled)).'</td></tr>';
			echo '<tr><td class="label">Password Never Expires</td><td>'.form_dropdown('password_never_expires', $yesno, set_value('password_never_expires', $user->password_never_expires)).'</td></tr>';
			echo '<tr><td class="label">Groups</td><td>'.form_multiselect('groups[]', $groups, set_value('groups[]', $user->groups)).'</td></tr>';
			echo '<tr><td colspan="2"><strong>Only enter a password if you would like to set a new one</strong></td></tr>';
			echo '<tr><td class="label">New Password</td><td>'.form_password('password').'</td></tr>';
			echo '<tr><td class="label">Confirm New Password</td><td>'.form_password('password_conf').'</td></tr>';

			if(validation_errors())
			{
				echo '<tr><td colspan="2">'.validation_errors().'</td></tr>';
			}

			echo '<tr><td class="label" colspan="2">'.anchor('auth', 'Cancel').' '.form_submit('submit','Update').'</td></tr>';
		} else {
			echo '<tr><td><p>User Not Found</p><p>'.anchor('auth', 'Go Back').'</p></td></tr>';
		}

		echo '</table>';
		echo form_close();

		echo '<div id="bottom">';
		echo anchor('auth/logout', 'Logout', 'style="float: right;"');
		echo '</div>';

	?>
