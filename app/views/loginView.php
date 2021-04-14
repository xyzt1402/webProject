<?php require('templates/header.php'); ?>

<!-- Section Slider 05 -->
<div id="section-slider" class="slider05 v3">
	<!-- Slider Content -->
	<!-- Slider Image -->
	<div class="slider-image">
		<img class="img-fluid" src="<?php echo BASE_VIEW; ?>/assets/images/slider6.jpg" alt="Zola">
	</div>
	<!-- /.Slider Image -->
</div>
<!-- /.Section Slider 05 -->
<!-- Section Contents -->
<div id="section-contents" class="login-01">
	<div class="container">
		<div class="row">
			<!-- Block Style 1 -->
			<div class="col-12">
				<div class="block-style-29">
					<div class="login-wrapper">
						<div class="title">
							<h3>Đăng nhập tài khoản</h3>
						</div>
						<div class="contact-form">
							<!-- Form -->
							<form action="<?php echo BASE_URL; ?>/app/model/login.php" method="POST">
								<div class="row">
									<div class="form-group col-12">
										<input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" required="" oninvalid="this.setCustomValidity('Nhập tên đăng nhập')" oninput="setCustomValidity('')">
									</div>
									<div class="form-group col-12">
										<input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="" oninvalid="this.setCustomValidity('Nhập mật khẩu')" oninput="setCustomValidity('')">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-12">
										<button type="submit"><b>Đăng Nhập</b></button>
										<table style="margin-bottom: 18px;">
											<tr>
												<td>
													<hr class="hr">
												</td>
												<td><p>hoặc</p> </td>
												<td>
													<hr class="hr">
												</td>
											</tr>
										</table>
										
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="fa fa-google fa-2x"></i></span>
											</div>
											<a class="form-control btn" onclick="googleSignIn()" style="padding-bottom: 2em;padding-top: 0.8em; font-family: 'Lora-Regular';border: 1px solid #ced4da;">Tiếp tục với <b>Google</b> </a>
										</div>
										<ul>
											<li><a class="forgot" href="#">Quên mật khẩu</a></li>
											<li><a class="register" href="<?php echo BASE_URL;?>/signup.php">Tạo tài khoản mới</a></li>
										</ul>
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
<!-- /.Section Contents -->

<script>
	function setSession(basicProfile){
		var gId = basicProfile.getImageUrl();
		var gName= basicProfile.getName();
		$.post("<?php echo BASE_URL; ?>/app/model/setGoogleAuthSession.php", {
			gId: gId,
			gName: gName
		});
	}
	function googleSignIn() {
		if (gAuth.isSignedIn.fe==false){
			gAuth.signIn().then(function () {
				var basicProfile =  gAuth.currentUser.get().getBasicProfile();
				setSession(basicProfile)
				window.location.href="<?php echo BASE_URL;?>"
			});
		}else{
			var basicProfile =  gAuth.currentUser.get().getBasicProfile();
			setSession(basicProfile);	
			window.location.href="<?php echo BASE_URL;?>"
		}
	}
	function googleSignOut(){
		gAuth.signOut().then(function () {
      			console.log('sign out');
    		});
	}
</script>
<style>
	.hr {
		height: 1px;
		border-width: 0;
		color: gray;
		background-color: gray;
		width: 10rem;
	}
</style>

<?php require('templates/footer.php'); ?>