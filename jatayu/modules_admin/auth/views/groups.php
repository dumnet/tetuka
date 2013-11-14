	<div class="row">
		<div class="col-lg-12">
			<h1>Groups <small>List</small></h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="icon-dashboard"></i> Administrative</a></li>
				<li class="active"><i class="icon-table"></i> Groups</li>
			</ol>
		</div>
	</div><!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div style="text-align:right">
				<a class="btn btn-default" href="<?php echo site_url('auth/add_group'); ?>">
					<i class="icon-plus-sign"></i> Add New Group
				</a>
			</div>
			<div class="table-responsive">
				<table class="table table-hover table-striped tablesorter">
					<thead>
						<tr>
							<th>Id <i class="icon-sort"></i></th>
							<th>Name <i class="icon-sort"></i></th>
							<th>Descripttion <i class="icon-sort"></i></th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($groups as $_group)
							{
								$actions = '';
								if($bitauth->has_role('admin'))
								{
									$actions = anchor('auth/edit_group/'.$_group->group_id, '<i class="icon-edit"></i>Edit Group');
								}

								echo '<tr>'.
									'<td>'.$_group->group_id.'</td>'.
									'<td>'.$_group->name.'</td>'.
									'<td>'.$_group->description.'</td>'.
									'<td>'.$actions.'</td>'.
								'</tr>';
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- /.row -->