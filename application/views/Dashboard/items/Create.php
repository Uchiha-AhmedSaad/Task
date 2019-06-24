
<?php $this->load->view('Dashboard/app'); ?>
<?php echo form_open('dashboard/items/store',['id' => 'myForm', 'data-toggle' => 'validator', 'role' => 'form']); ?>
	<div class="content"> 
		<!-- Form horizontal -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title"><?php if (isset($title)) {
					echo $title;
				}; ?></h5>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="item_name" class="form-check-label" >Item Name</label>
						<input type="text" required class="form-control" name="item_name" >
						<?php 	echo form_error('item_name', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						<div class="help-block with-errors"></div>
					</div>
					  <div class="form-group col-sm-6">
					    <label for="quantity" class="control-label">Quantity</label>
					    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="quantity" required>
					    <div class="help-block with-errors"></div>
						<?php 	echo form_error('quantity', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
					  </div>
				</div>
				<div class="row">
					  <div class="form-group col-sm-6">
					    <label for="price" class="control-label">Price</label>
					    <input type="number" required step="0.5" class="form-control" id="price" name="price" placeholder="price" required>
					    <div class="help-block with-errors"></div>
						<?php 	echo form_error('price', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
					  </div>
				</div>
				<div class="row">
					<div class="from-group col-sm-12">
						<br>
						<button type="submit" class="btn btn-primary">Create</button>
					</div>
				</div>	
			</div>
		</div>
		<!-- /form horizontal -->
	</div>
<?php echo form_close(); ?>
<?php $this->load->view('Dashboard/footer'); ?>

