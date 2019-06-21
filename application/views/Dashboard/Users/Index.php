
<?php $this->load->view('Dashboard/app'); ?>
				<!-- Content area -->
				<div class="content">
					<!-- jGrowl notifications -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Users</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="table-responsive">
							<div class="table-responsive">                  
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
													<td><a href="<?php echo site_url('dashboard/users/delete?id='.$value->id); ?>" class="btn btn-danger" type="button">Delete</a></td>
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
					<!-- /jGrowl notifications -->
				</div>
				<!-- /content area -->

<?php $this->load->view('Dashboard/footer'); ?>
