
<?php include_once __DIR__ ."/../app.php"; ?>

<?php echo form_open('dashboard/items/store'); ?>
<div style="height: 500px; background-color: white; padding: 20px; border-radius: 20px;">
	<div class="row">
		<div class="form-group col-sm-6">
			<label class="form-check-label" >إسم العنصر</label>
			<input type="text" class="form-control" name="item_name" >
		</div>
		<div class="from-group col-sm-6">
			<label class="form-check-label">الكميه</label>
			<input type="number" class="form-control" name="quantity" >
		</div>
	</div>
	<div class="row">
		<div class="from-group col-sm-12">
			<label class="form-check-label">السعر</label>
			<input type="number" step="0.5" class="form-control" name="price" >
		</div>
	</div>
	<div class="row">
		<div class="from-group col-sm-12">
			<br>
			<button type="submit" class="btn btn-primary">إنشاء</button>
		</div>
	</div>	
</div>
<?php echo form_close(); ?>
<?php include_once __DIR__ ."/../footer.php"; ?>

