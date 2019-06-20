
<?php include __DIR__ ."/../app.php"; ?>
	<div class="table-responsive" style="min-height: 500px; background-color: white; border-radius: 20px;">                  
	    <table  class="table">
	      <thead>
	        <tr>
	          <th>id</th>
	          <th>rdate</th>
	          <th>customer name</th>
	          <th>items</th>
	          <th>quantities</th>
	          <th>Option</th>
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
							<td><a href="<?php echo base_url('dashboard/requests/delete?id='.$value->id); ?>" class="btn btn-danger" type="button">Delete</a></td>
							<td><a href="<?php echo base_url('dashboard/requests/edit?id='.$value->id); ?>" class="btn btn-primary" type="button">Edit</a></td>
						</tr>
	      			<?php
	      		}
	      	 ?>
	      </tbody>
	    </table>
	</div>
<?php include __DIR__ ."/../footer.php"; ?>
