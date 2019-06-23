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
				<?php echo form_open('dashboard/requests/store'); ?>
					<div class="row">
						<div class="form-group col-sm-6">
							<label class="form-check-label" >Customer Name</label>
							<input type="text" class="form-control" name="customer_name" >
							<?php 	echo form_error('customer_name', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
					</div>
					<div class="row counter">
						<div class="form-group col-sm-6">
							  <label  for="items text-bold" class="control-label">Item </label>
							  <select id="items"  name="items[0][items]" class="form-control">
							  	<?php 
									  	foreach ($items as  $key => $value)
									  	{
									  		?> <option value="<?php echo $value->item_name; ?>"><?php echo $value->item_name; ?></option><?php
									  	}
							  	 ?>
							  </select>
							<?php 	echo form_error('items[]', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
						<div class="form-group col-sm-6">
							<label class="form-check-label" >Quantity</label>
							<input type="number" class="form-control" name="items[0][quantities]" >
							<?php 	echo form_error('items[]', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
					</div>
					<div class="form-group col-sm-12">
						<br>
						<button type="button" onclick="Repeat()" style="float: right;" class="btn btn-primary btn-sm">Add Field</button>
					</div>  
					<div class="row" id="repeater"></div>
					<div><button type="submit" class="btn btn-primary">Create</button></div>
				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- /form horizontal -->
	</div>
<script type="text/javascript">
    function Repeat() 
    {
        var counter = $('.counter').length;
        $('#repeater').append(
        '<div class=" row counter">'
            +'<div class="form-group col-sm-6">'
                +'<label  for="items" class="control-label">المنتجات</label>'
                +'<select type="text"  class=" form-control" name="items['+counter+'][items]">'
			  	<?php 
			  	foreach ($items as  $key => $value)
			  	{
			  		?> 
						+'<option value="<?php echo $value->item_name; ?>"><?php echo $value->item_name; ?>'
						+'</option>'
			  		<?php
			  	}
				?>
                +'<option value=""></option>'
                +'</select>'
            +'</div>'

            +'<div class="form-group col-sm-5">'
                +'<label  for="items" class="control-label">المنتجات</label>'
                +'<input type="number"  class=" form-control" name="items['+counter+'][quantities]">'
            +'</div>'

            +'<div class="form-group col-sm-1">'
                +'<br><br>'
                +'<button type="button"  class="btn btn-danger btn-sm DeleteElement"> Delete</button>'
            +'</div>'
        +'</div>'
        );
    }
    $(document).on('click','.DeleteElement', function(){
        $(this).parent().parent().remove();
    });
    function Remove(remove) {
        $('.'+remove).parent().parent().remove();
    }
</script>
<?php $this->load->view('Dashboard/footer'); ?>
