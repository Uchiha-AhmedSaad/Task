
<?php include_once __DIR__ ."/../app.php"; ?>

<?php echo form_open('dashboard/users/update?id='.$user->id); ?>
<div style="height: 500px; background-color: white; padding: 20px; border-radius: 20px;">
	<div class="row">
		<div class="form-group col-sm-6">
			<label class="form-check-label" >إسم المستخدم</label>
			<input type="text" class="form-control" name="username" value="<?php echo $user->username;?>" >
		</div>
		<div class="from-group col-sm-6">
			<label class="form-check-label">الإسم الأول</label>
			<input type="text" class="form-control" name="first_name" value="<?php echo $user->first_name;?>" >
		</div>
	</div>
	<div class="row">
		<div class="from-group col-sm-6">
			<label class="form-check-label">الإسم الثانى</label>
			<input type="text" class="form-control" name="last_name" value="<?php echo $user->last_name;?>">
		</div>
		<div class="from-group col-sm-6">
			<label class="form-check-label">الإيميل</label>
			<input type="email" class="form-control" name="email" value="<?php echo $user->email;?>">
		</div>	
	</div>
	<div class="row">
		<div class="from-group col-sm-6">
			<label class="form-check-label">الباسورد</label>
			<input type="password"  class="form-control" name="password" >
		</div>
		<div class="from-group col-sm-6">
			<label class="form-check-label">تأكيد الباسورد</label>
			<input type="password"  class="form-control" name="password_confirm" >
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
