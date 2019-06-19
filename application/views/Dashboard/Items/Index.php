<?php include __DIR__ ."/../app.php"; ?>
	<div class="table-responsive" style="min-height: 500px; background-color: white; border-radius: 20px;">                  
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
							<td><a href="<?php echo base_url('dashboard/items/delete?id='.$value->id); ?>" class="btn btn-danger" type="button">Delete</a></td>
							<td><a href="<?php echo base_url('dashboard/items/edit?id='.$value->id); ?>" class="btn btn-primary" type="button">Edit</a></td>
						</tr>
	      			<?php
	      		}
	      	 ?>
	      </tbody>
	    </table>
	</div>
<?php include __DIR__ ."/../footer.php"; ?>