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
				<a href="<?php echo site_url('dashboard/requests/create'); ?>" class="btn btn-primary">Create request</a >
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
									<td>
									<?php 
										$items = unserialize($value->items);
										if (is_array($items)) {
											foreach ($items as $item) 
											{
												echo '<br>'.$item.' - ';
											}
										}
									 ?>
										
									</td>
									<td>
										<?php 
											$quantities = unserialize($value->quantities);
											if (is_array($quantities)) {
												foreach ($quantities as $quantity) 
												{
													echo '<br>'.$quantity.' - ';
												}
											}
										 ?>
									</td>
									<td><a href="<?php echo site_url('dashboard/requests/delete/'.$value->id); ?>" class="btn btn-danger" type="button">Delete</a></td>
									<td><button class="print btn btn-primary"
										data-print="
										<table  border='1' cellpadding='1' style='border: 1px solid #ccc; 
										width: 100%; margin: 0;padding: 0;
										border-collapse: collapse;
										border-spacing: 0;'>
										  <thead>
										    <tr style='border: 1px solid #ddd;'>
										      <th>rdate</th>
										      <th>customer name</th>
										      <th>items</th>
										      <th>Period</th>
										    </tr>
										  </thead>
										  <tbody>
										    <tr>
										      <td ><center><?php echo $value->rdate; ?></center></td>
										      <td><center><?php echo $value->customer_name; ?></center></td>
										      <td>
												<?php 
													$items = unserialize($value->items);
													if (is_array($items)) {
														foreach ($items as $item) 
														{
															echo '<br>'.'<center>'.$item.'</center>';
														}
													}
												 ?>
										      </td>
										      <td>
												<?php 
													$quantities = unserialize($value->quantities);
													if (is_array($quantities)) {
														foreach ($quantities as $quantitiy) 
														{
															echo '<br>'.'<center>'.$quantitiy.'</center>';
														}
													}
												 ?>
										      </td>
										    </tr>
										  </tbody>
										</table>
										">print</button></td>
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
<script type="text/javascript">
$('.print').on('click',function(){
 	newWin= window.open("");
   newWin.document.write($(this).attr('data-print'));
   newWin.print();
   newWin.close();
	
});
</script>