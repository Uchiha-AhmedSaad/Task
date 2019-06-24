
<?php $this->load->view('Dashboard/app'); ?>				
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
				<?php echo form_open('dashboard/users/store',['id' => 'myForm', 'data-toggle' => 'validator', 'role' => 'form']); ?>

					<div class="row">
						<div class="form-group col-sm-6">
							<label class="form-check-label" for="username" >Username</label>
							<input type="text" class="form-control" required id="username" name="username" >
							<div class="help-block with-errors"></div>
						<?php 	echo form_error('username', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>


						<div class="form-group col-sm-6">
							<label class="form-check-label" for="first_name" >First name</label>
							<input type="text" class="form-control" required id="first_name" name="first_name" >
							<div class="help-block with-errors"></div>
						<?php 	echo form_error('first_name', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label class="form-check-label" for="last_name" >Lastname</label>
							<input type="text" class="form-control" required id="last_name" name="last_name" >
							<div class="help-block with-errors"></div>
						<?php 	echo form_error('last_name', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>

					  <div class="form-group col-sm-6">
					    <label for="inputEmail" class="control-label">Email</label>
					    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" data-error="that email address is invalid" required>
					    <div class="help-block with-errors"></div>
						<?php 	echo form_error('email', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
					  </div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label class="form-check-label" for="password" >Password</label>
							<input type="text" class="form-control" required id="password" name="password" >
							<div class="help-block with-errors"></div>
						<?php 	echo form_error('password', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
						<div class="form-group col-sm-6">
							<label class="form-check-label" for="password_confirm" >Password Confirm</label>
							<input type="text" class="form-control" required id="password_confirm" name="password_confirm" >
							<div class="help-block with-errors"></div>
						<?php 	echo form_error('password_confirm', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
					</div>
					<div class="row">
						<div class="from-group col-sm-12">
							<br>
							<button type="submit" class="btn btn-primary">Create</button>
						</div>
					</div>	
				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- /form horizontal -->
	</div>



<?php $this->load->view('Dashboard/footer'); ?>
