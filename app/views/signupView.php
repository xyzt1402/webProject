<?php require('templates/header.php'); ?>
	<!-- Section Slider 05 -->
	<div id="section-slider" class="slider05 v3">
		<!-- Slider Content -->
	    <!-- /.Slider Content -->
		<!-- Slider Image -->
		<div class="slider-image">
			<img class="img-fluid" src="<?php echo BASE_VIEW; ?>/assets/images/slider7.jpg" alt="Zola">
		</div>
		<!-- /.Slider Image -->
    </div>
    <!-- /.Section Slider 05 -->
<div id="section-contents" class="login-01">
    	<div class="container">
    		<div class="row">
    			<!-- Block Style 1 -->
    			<div class="col-12">
    				<div class="block-style-29">
    					<div class="login-wrapper">
							<div class="title">
								<h3>Tạo tài khoản</h3>
							</div>
							<div class="contact-form">
								<!-- Form -->
								<form action="<?php echo BASE_URL; ?>/app/model/createUser.php" method="POST">
									<div class="row">
										<div class="form-group col-12">
											<input type="text" class="form-control" name="name" placeholder="Tên tài khoản" required="">
										</div>
										<div class="form-group col-12">
											<input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-12">
											<button type="submit">Hoàn tất</button>						
										</div>
									</div>
								</form>
								<!-- /.Form -->
							</div>
						</div>
    				</div>
    			</div>
    			<!-- /.Block Style 1 -->
    		</div>
    	</div>
    </div>
<?php require('templates/footer.php'); ?>