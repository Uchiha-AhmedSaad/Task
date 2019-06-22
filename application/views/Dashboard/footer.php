					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
<?php 
if ($this->session->flashdata('status')) 
{
	?> 

		swal({
		  title: "Good job!",
		  text: "<?php echo $this->session->flashdata('status')[1];?>",
		  icon: "<?php echo $this->session->flashdata('status')[0];?>",
		});
	<?php
}

 ?>
	
</script>
</body>
</html>