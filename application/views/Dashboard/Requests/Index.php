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
			          <th>rdate</th>
			          <th>customer name</th>
			          <th>items</th>
			          <th>quantities</th>
			          <th>Option</th>
			        </tr>
			      </thead>
			      <tbody>
			      	<br>
			      	<?php 
			      		foreach ($requests as $value) {
			      			?> 
								<tr>
									<td><?php echo $value->id; ?></td>
									<td><?php echo $value->rdate; ?></td>
									<td><?php echo $value->customer_name; ?></td>
									<td><?php echo $value->items; ?></td>
									<td><?php echo $value->quantities; ?></td>
									<td><a href="<?php echo site_url('dashboard/requests/delete/'.$value->id); ?>" class="btn btn-danger" type="button">Delete</a></td>
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
