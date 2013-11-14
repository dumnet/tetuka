	<?php
		$yesno = array('No','Yes');

		echo form_open(current_url());

		echo '<table border="0" cellspacing="0" cellpadding="0" id="table">';
		echo '<caption>BitAuth Example: Edit Group</caption>';

		if( ! empty($group))
		{
			echo '<tr><td class="label">Group Name</td><td>'.form_input('name', set_value('name', $group->name)).'</td></tr>';
			echo '<tr><td class="label">Description</td><td>'.form_textarea('description', set_value('description', $group->description)).'</td></tr>';
			echo '<tr><td class="label">Roles</td><td>'.form_multiselect('roles[]', $roles, set_value('roles[]', $group_roles)).'</td></tr>';
			echo '<tr><td class="label">Members</td><td>'.form_multiselect('members[]', $users, set_value('members[]', $group->members)).'</td></tr>';

			if(validation_errors())
			{
				echo '<tr><td colspan="2">'.validation_errors().'</td></tr>';
			}

			echo '<tr><td class="label" colspan="2">'.anchor('auth/groups', 'Cancel').' '.form_submit('submit','Update').'</td></tr>';
		} else {
			echo '<tr><td><p>Group Not Found</p><p>'.anchor('auth/groups', 'Go Back').'</p></td></tr>';
		}

		echo '</table>';
		echo form_close();

		echo '<div id="bottom">';
		echo anchor('auth/logout', 'Logout', 'style="float: right;"');
		echo '</div>';

	?>
