
	<?php

		echo '<table border="0" cellspacing="0" cellpadding="0" id="table">';
		echo '<caption>BitAuth Example: Users</caption>';
		echo '<tr><th width="1">ID</th><th>Username</th><th>Full Name</th><th>Actions</th></tr>';
		if( ! empty($users))
		{
			foreach($users as $_user)
			{
				$actions = '';
				if($bitauth->has_role('admin'))
				{
					$actions = anchor('example/edit_user/'.$_user->user_id, 'Edit User');
					if( ! $_user->active)
					{
						$actions .= '<br/>'.anchor('example/activate/'.$_user->activation_code, 'Activate User');
					}

				}

				echo '<tr>'.
					'<td>'.$_user->user_id.'</td>'.
					'<td>'.$_user->username.'</td>'.
					'<td>'.$_user->fullname.'</td>'.
					'<td>'.$actions.'</td>'.
				'</tr>';
			}
		}
		echo '</table>';

		echo '<div id="bottom">';
		echo anchor('example/logout', 'Logout', 'style="float: right;"');
		echo anchor('example/groups', 'View Groups');
		if($bitauth->is_admin())
		{
			echo '<br/>'.anchor('example/add_user', 'Add User');
		}
		echo '</div>';

	?>

