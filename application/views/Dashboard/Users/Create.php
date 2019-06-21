
<?php $this->load->view('Dashboard/app'); ?>				
	<div class="content"> 
		<!-- Form horizontal -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title"><?php echo $title; ?></h5>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<?php echo form_open('verify'); ?>
					<div class="row">
						<div class="form-group col-sm-6">
							<label class="form-check-label" >إسم المستخدم</label>
							<input type="text" class="form-control" name="username" >
						</div>
						<div class="from-group col-sm-6">
							<label class="form-check-label">الإسم الأول</label>
							<input type="text" class="form-control" name="first_name" >
						</div>
					</div>
					<div class="row">
						<div class="from-group col-sm-6">
							<label class="form-check-label">الإسم الثانى</label>
							<input type="text" class="form-control" name="last_name" >
						</div>
						<div class="from-group col-sm-6">
							<label class="form-check-label">الإيميل</label>
							<input type="email" class="form-control" name="email" >
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
				<?php echo form_close(); ?>
			</div>
		</div>
		<!-- /form horizontal -->
	</div>
<?php $this->load->view('Dashboard/footer'); ?>
