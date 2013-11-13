	<?php
		echo '<table border="0" cellspacing="0" cellpadding="0" id="table">';
		echo '<caption>BitAuth Example: Groups</caption>';
		echo '<tr><th width="1">ID</th><th>Name</th><th>Description</th><th>Actions</th></tr>';
		foreach($groups as $_group)
		{
			$actions = '';
			if($bitauth->has_role('admin'))
			{
				$actions = anchor('example/edit_group/'.$_group->group_id, 'Edit Group');
			}

			echo '<tr>'.
				'<td>'.$_group->group_id.'</td>'.
				'<td>'.$_group->name.'</td>'.
				'<td>'.$_group->description.'</td>'.
				'<td>'.$actions.'</td>'.
			'</tr>';
		}
		echo '</table>';
		echo '<div id="bottom">';
		echo anchor('example/logout', 'Logout', 'style="float: right;"');
		echo anchor('example', 'View Users');
		if($bitauth->is_admin())
		{
			echo '<br/>'.anchor('example/add_group', 'Add Group');
		}
		echo '</div>';
	?>
