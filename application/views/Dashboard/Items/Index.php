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
				    <table  class="table">
				      <thead>
				        <tr>
				          <th>id</th>
				          <th>item name</th>
				          <th>quantity</th>
				          <th>price</th>
				          <th>created at</th>
				          <th>updated at</th>
				          <th>Option</th>
				          <th>Option</th>
				        </tr>
				      </thead>
				      <tbody>
				      	<br>
				      	<?php 
				      		foreach ($items as $value) {
				      			?> 
									<tr>
										<td><?php echo $value->id; ?></td>
										<td><?php echo $value->item_name; ?></td>
										<td><?php echo $value->quantity; ?></td>
										<td><?php echo $value->price; ?></td>
										<td><?php echo $value->created_at; ?></td>
										<td><?php echo $value->updated_at; ?></td>
										<td><a href="<?php echo base_url('dashboard/items/delete/'.$value->id); ?>" class="btn btn-danger" type="button">Delete</a></td>
										<td><a href="<?php echo base_url('dashboard/items/edit/'.$value->id); ?>" class="btn btn-primary" type="button">Edit</a></td>
									</tr>
				      			<?php
				      		}
				      	 ?>
				      </tbody>
				    </table>
			</div>
		</div>
		<!-- /form horizontal -->
	</div>
<?php $this->load->view('Dashboard/footer'); ?>


				<!-- /content area -->