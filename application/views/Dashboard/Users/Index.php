<?php $this->load->view('Dashboard/app'); ?>
	<div class="content"> 
		<!-- Form horizontal -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title"><?php if (isset($title)) {echo $title;} ?></h5>
				<div class="heading-elements">
					<ul class="icons-list">
	            		<li><a data-action="collapse"></a></li>
	            		<li><a data-action="reload"></a></li>
	            		<li><a data-action="close"></a></li>
	            	</ul>
	        	</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">  
					<a href="<?php echo site_url('dashboard/users/create'); ?>" class="btn btn-primary">Create user</a > 
				    <table  class="table">
				      <thead>
				        <tr>
				          <th>id</th>
				          <th>first name</th>
				          <th>last name</th>
				          <th>username</th>
				          <th>email</th>
				          <th>Option</th>
				          <th>Option</th>
				        </tr>
				      </thead>
				      <tbody>
				      	<br>
				      	<?php 
				      		foreach ($users as $value) {
				      			?> 
									<tr>
										<td><?php echo $value->id; ?></td>
										<td><?php echo $value->first_name; ?></td>
										<td><?php echo $value->last_name; ?></td>
										<td><?php echo $value->username; ?></td>
										<td><?php echo $value->email; ?></td>
										<td><a href="<?php echo site_url('dashboard/users/delete/'.$value->id); ?>" class="btn btn-danger" type="button">Delete</a></td>
										<td><a href="<?php echo site_url('dashboard/users/edit/'.$value->id); ?>" class="btn btn-primary" type="button">Edit</a></td>
									</tr>
				      			<?php
				      		}
				      	 ?>
				      </tbody>
				    </table>
				</div>
			</div>
		</div>
		<!-- /form horizontal -->
	</div>	
<?php $this->load->view('Dashboard/footer'); ?>

