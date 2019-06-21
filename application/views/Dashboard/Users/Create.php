
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
				<?php echo form_open('dashboard/users/store'); ?>
					<div class="row">
						<div class="form-group col-sm-6">
							<label class="form-check-label" >إسم المستخدم</label>
							<input type="text" class="form-control" name="username" >
						<?php 	echo form_error('username', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
						<div class="from-group col-sm-6">
							<label class="form-check-label">الإسم الأول</label>
							<input type="text" class="form-control" name="first_name" >
							<?php 	echo form_error('first_name', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
					</div>
					<div class="row">
						<div class="from-group col-sm-6">
							<label class="form-check-label">الإسم الثانى</label>
							<input type="text" class="form-control" name="last_name" >
							<?php 	echo form_error('last_name', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
						<div class="from-group col-sm-6">
							<label class="form-check-label">الإيميل</label>
							<input type="email" class="form-control" name="email" >
							<?php 	echo form_error('email', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>	
					</div>
					<div class="row">
						<div class="from-group col-sm-6">
							<label class="form-check-label">الباسورد</label>
							<input type="password"  class="form-control" name="password" >
							<?php 	echo form_error('password', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
						<div class="from-group col-sm-6">
							<label class="form-check-label">تأكيد الباسورد</label>
							<input type="password"  class="form-control" name="password_confirm" >
							<?php 	echo form_error('password_confirm', '<div class="validation-error-label" role="alert"><strong>', '</div></strong>'); ?>
						</div>
					</div>
					<div class="row">
						<div class="from-group col-sm-12">
							<br>
							<button type="submit" class="btn btn-primary">إنشاء</button>
						</div>
					</div>	
				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- /form horizontal -->
	</div>
<?php $this->load->view('Dashboard/footer'); ?>
