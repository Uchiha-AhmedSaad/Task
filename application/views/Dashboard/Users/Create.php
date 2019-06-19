
<?php include __DIR__ ."/../app.php"; ?>

<?php echo form_open('dashboard/users/store'); ?>
<div class="row">
	<div class="from-group">
		<label>Username</label>
		<input type="text" name="username" >
	</div>
	<div class="from-group">
		<label>first_name</label>
		<input type="text" name="first_name" >
	</div>
	<div class="from-group">
		<label>last_name</label>
		<input type="text" name="last_name" >
	</div>
	<div class="from-group">
		<label>email</label>
		<input type="email" name="email" >
	</div>
	<div class="from-group">
		<label>password</label>
		<input type="password" name="password" >
	</div>
	<button type="submit">insert</button>
</div>

<?php echo form_close(); ?>
<?php include __DIR__ ."/../footer.php"; ?>
