
<?php include __DIR__ ."/../app.php"; ?>
	<div class="table-responsive" style="min-height: 500px; background-color: white; border-radius: 20px;">                  
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
							<td><a href="#" class="btn btn-danger" type="button">Delete</a></td>
							<td><a href="#" class="btn btn-primary" type="button">Edit</a></td>
						</tr>
	      			<?php
	      		}
	      	 ?>
	      </tbody>
	    </table>
	</div>
<?php include __DIR__ ."/../footer.php"; ?>
