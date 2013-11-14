	<div class="row">
		<div class="col-lg-12">
			<h1>Users <small>List</small></h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="icon-dashboard"></i> Administrative</a></li>
				<li class="active"><i class="icon-table"></i> Users</li>
			</ol>
		</div>
	</div><!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div style="text-align:right">
				<a class="btn btn-default" href="<?php echo site_url('auth/add_user'); ?>">
					<i class="icon-plus-sign"></i> Add New User
				</a>
			</div>
			<div class="table-responsive">
				<table class="table table-hover table-striped tablesorter">
					<thead>
						<tr>
							<th>Id <i class="icon-sort"></i></th>
							<th>Username <i class="icon-sort"></i></th>
							<th>Fullname <i class="icon-sort"></i></th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if( ! empty($users))
							{
								foreach($users as $_user)
								{
									$actions = '';
									if($bitauth->has_role('admin'))
									{
										$actions = anchor('auth/edit_user/'.$_user->user_id, '<i class="icon-edit"></i>Edit User');
										if( ! $_user->active)
										{
											$actions .= '<br/>'.anchor('auth/activate/'.$_user->activation_code, 'Activate User');
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
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- /.row -->