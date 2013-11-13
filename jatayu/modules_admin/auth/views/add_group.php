
	<?php
		echo form_open(current_url());

		echo '<table border="0" cellspacing="0" cellpadding="0" id="table">';
		echo '<caption>BitAuth Example: Add Group</caption>';

		echo '<tr><td class="label">Group Name</td><td>'.form_input('name', set_value('name')).'</td></tr>';
		echo '<tr><td class="label">Description</td><td>'.form_textarea('description', set_value('description')).'</td></tr>';
		echo '<tr><td class="label">Roles</td><td>'.form_multiselect('roles[]', $roles, set_value('roles[]')).'</td></tr>';
		echo '<tr><td class="label">Members</td><td>'.form_multiselect('members[]', $users, set_value('members[]')).'</td></tr>';
		if(validation_errors())
		{
			echo '<tr><td colspan="2">'.validation_errors().'</td></tr>';
		}

		echo '<tr><td class="label" colspan="2">'.form_submit('submit','Add Group').'</td></tr>';
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
