
<?php $this->load->view('Dashboard/app'); ?>
<?php echo form_open('dashboard/items/store'); ?>
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
						<label class="form-check-label" >إسم العنصر</label>
						<input type="text" class="form-control" name="item_name" >
						<?php 	echo form_error('item_name', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
					</div>
					<div class="from-group col-sm-6">
						<label class="form-check-label">الكميه</label>
						<input type="number" class="form-control" name="quantity" >
						<?php 	echo form_error('quantity', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
					</div>
				</div>
				<div class="row">
					<div class="from-group col-sm-12">
						<label class="form-check-label">السعر</label>
						<input type="number" step="0.5" class="form-control" name="price" >
						<?php 	echo form_error('price', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
					</div>
				</div>
				<div class="row">
					<div class="from-group col-sm-12">
						<br>
						<button type="submit" class="btn btn-primary">إنشاء</button>
					</div>
				</div>	
			</div>
		</div>
		<!-- /form horizontal -->
	</div>
<?php echo form_close(); ?>
<?php $this->load->view('Dashboard/footer'); ?>

