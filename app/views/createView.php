<?php require('templates/header.php'); ?>

<script src="<?php echo BASE_VIEW;?>/assets/js/myscripts/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/ckstyles.css">

	<!-- Section Slider 05 -->
	<div id="section-slider" class="slider05 v2">
		<!-- Slider Content -->
		<div class="slider-content">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-12">
	    				<h1>Thêm Bài Viết</h1>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <!-- /.Slider Content -->
		<!-- Slider Image -->
		<div class="slider-image">
			<img class="img-fluid" src="<?php echo BASE_VIEW;?>assets/images/slider4.jpg" alt="Zola">
		</div>
		<!-- /.Slider Image -->
    </div>
    <!-- /.Section Slider 05 -->
    <!-- Section Contents -->
    <div id="section-contents" class="contact">
    	<div class="container">
    		<div class="row">
    			<!-- Block Style 1 -->
    			<div class="col-12">
    				<div class="block-style-27">
    					<h2>Điền thông tin</h2>
    					<!-- Contact Form -->
						<div class="contact-form">
							<!-- Form -->
							<form action="<?php echo BASE_URL;?>/app/model/createPage.php" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<input type="text" class="form-control" name="title" placeholder="Tựa đề" required="" oninvalid="this.setCustomValidity('Thêm tựa đề')" oninput="setCustomValidity('')">
									</div>
									<div class="form-group col-sm-12 col-md-12 col-lg-6">
										<select name="topic" class="form-control" style="height: 100%; padding-left: 28px;">
											<option value="TỔNG HỢP" disabled selected>Chọn chủ đề</option>
											<option value="MOBILE">MOBILE</option>

											<option value="TỔNG HỢP" disabled selected>----INTERNET----</option>
											<option value="Digital Marketing">Digital Marketing</option>
											<option value="Media">Media</option>

											<option value="TỔNG HỢP" disabled selected>----GAME----</option>
											<option value="Game Điện thoại">Điện thoại</option>
											<option value="Game PC">PC</option>
											
											<option value="TỔNG HỢP" disabled selected>----KHÁM PHÁ----</option>
											<option value="Thủ thuật">Thủ thuật</option>
											<option value="Xu hướng">Xu hướng</option>
											<option value="Tri thức">Tri thức</option>

											<option value="TỔNG HỢP" disabled selected>----PHẦN MỀM----</option>
											<option value="Android/iOS">Android/iOS</option>
											<option value="Windows/MacOS">Windows/MacOS</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-9" style="display: none;">
										<!-- <input style="padding: 0px; width: 100%" type="file" name="fileToUpload" id="fileToUpload" class="hidden">	 -->
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="inputGroupFile02" name="fileToUpload" />
											<label class="custom-file-label" for="inputGroupFile02" data-browse="Chọn">Thêm ảnh bìa</label>
										</div>	
									</div>
									<div class="form-group col-9">
										<input type="text" class="form-control" name="url" placeholder="URL ảnh bìa" oninvalid="this.setCustomValidity('Thêm ảnh bìa')" oninput="setCustomValidity('')">
									</div>
									<div class="form-group col-3">
										<div class="custom-control custom-switch d-flex p-2 float-right">
											<input type="checkbox" class="custom-control-input" id="customSwitch">
											<label class="custom-control-label" for="customSwitch">Upload ảnh</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12">
										<input type="text" class="form-control" name="label" placeholder="Mô tả ngắn" required="" oninvalid="this.setCustomValidity('Thêm mô tả')" oninput="setCustomValidity('')">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12">
										<textarea name="body" id="editor"  placeholder="&nbsp;&nbsp;&nbsp;....&nbsp;bắt đầu viết">
        								</textarea>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="form-group col-md-12">
										<button type="submit" class="buttonForm  float-right">
											<h5 style="font-weight: 600;">Hoàn Thành</h5>
										</button>
									</div>
								</div>
							</form>
							<!-- /.Form -->
						</div>
    					<!-- /.Contact Form -->
    				</div>
    			</div>
    			<!-- /.Block Style 1 -->
    		</div>
    	</div>
    </div>
    <!-- /.Section Contents -->


    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

		document.getElementById("inputGroupFile02").onchange = function(e){
			e.target.parentNode.childNodes[3].textContent = e.target.value.split(/(\\|\/)/g).pop();
		}

		var	customSwitch = document.getElementById("customSwitch")
		customSwitch.onchange=function(e){
			var divNode = customSwitch.parentElement.parentElement.parentElement.childNodes;
			var temp = divNode[3].style.display;
			divNode[3].style.display = divNode[1].style.display;
			divNode[1].style.display = temp;
		}
	</script>

<?php require('templates/footer.php'); ?>