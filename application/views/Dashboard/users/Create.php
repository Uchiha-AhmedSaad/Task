
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
						<div class="from-group col-sm-6">
							<label class="form-check-label">Firstname</label>
							<input type="text" class="form-control" required name="first_name" >
							<?php 	echo form_error('first_name', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="row">
						<div class="from-group col-sm-6">
							<label class="form-check-label">Lastname</label>
							<input type="text" class="form-control"  name="last_name" >
							<div class="help-block with-errors"></div>
							<?php 	echo form_error('last_name', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
							<div class="help-block with-errors"></div>
						</div>
						<div class="from-group col-sm-6">
							<label class="form-check-label">Email</label>
							<input type="email" class="form-control"  name="email" >
							<div class="help-block with-errors"></div>
							<?php 	echo form_error('email', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
							<div class="help-block with-errors"></div>
						</div>	
					</div>
					<div class="row">
						<div class="from-group col-sm-6">
							<label class="form-check-label">Password</label>
							<input type="password" required  class="form-control" name="password" >
							<?php 	echo form_error('password', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
							<div class="help-block with-errors"></div>
						</div>
						<div class="from-group col-sm-6">
							<label class="form-check-label">Password Confirm</label>
							<input type="password" required  class="form-control" name="password_confirm" >
							<?php 	echo form_error('password_confirm', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
							<div class="help-block with-errors"></div>
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


<!-- <form id='myForm' data-toggle="validator" role="form">
  <div class="form-group">
    <label for="inputName" class="control-label">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
  </div>
  <div class="form-group has-feedback">
    <label for="inputTwitter" class="control-label">Twitter</label>
    <div class="input-group">
      <span class="input-group-addon">@</span>
      <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
    </div>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="control-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="control-label">Password</label>
    <div class="form-inline row">
      <div class="form-group col-sm-6">
        <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
        <div class="help-block">Minimum of 6 characters</div>
      </div>
      <div class="form-group col-sm-6">
        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
        <div class="help-block with-errors"></div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="radio">
      <label>
        <input type="radio" name="underwear" required>
        Boxers
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="underwear" required>
        Briefs
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
        Check yourself
      </label>
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form> -->

<?php $this->load->view('Dashboard/footer'); ?>
