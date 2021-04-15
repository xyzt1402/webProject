<?php require('templates/header.php'); ?>

<script src="<?php echo BASE_VIEW; ?>/assets/js/myscripts/ckeditor.js"></script>
<link rel="stylesheet" href="<?php echo BASE_VIEW; ?>/assets/css/ckstyles.css">

<!-- Section Slider 05 -->
<div id="section-slider" class="slider05 v2">
    <!-- Slider Content -->
    <div class="slider-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Sửa Bài Viết</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Slider Content -->
    <!-- Slider Image -->
    <div class="slider-image">
        <img class="img-fluid" src="<?php echo BASE_VIEW; ?>assets/images/slider4.jpg" alt="Zola">
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
                        <form action="<?php echo BASE_URL; ?>/app/model/updatePage.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                    <input type="text" class="form-control" name="title" placeholder="Tựa đề" value="<?php echo $updatePage['title'] ?>" required="" oninvalid="this.setCustomValidity('Thêm tựa đề')" oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                    <?php
                                    $selected = $updatePage['topic'];
                                    ?>
                                    <select name="topic" class="form-control" style="height: 100%; padding-left: 28px;">
                                        <option value="TỔNG HỢP" disabled>Chọn chủ đề</option>
                                        <option value="MOBILE"<?php if($selected == 'MOBILE'){echo "selected";}?>>MOBILE</option>

                                        <option value="TỔNG HỢP" disabled>----INTERNET----</option>
                                        <option value="Digital Marketing"<?php if($selected == 'Digital Marketing'){echo "selected";}?>>Digital Marketing</option>
                                        <option value="Media"<?php if($selected == 'Media'){echo "selected";}?>>Media</option>

                                        <option value="TỔNG HỢP" disabled>----GAME----</option>
                                        <option value="Game Điện thoại"<?php if($selected == 'Game Điện thoại'){echo "selected";}?>>Điện thoại</option>
                                        <option value="Game PC"<?php if($selected == 'Game PC'){echo "selected";}?>>PC</option>

                                        <option value="TỔNG HỢP" disabled>----KHÁM PHÁ----</option>
                                        <option value="Thủ thuật"<?php if($selected == 'Thủ thuật'){echo "selected";}?>>Thủ thuật</option>
                                        <option value="Xu hướng"<?php if($selected == 'Xu hướng'){echo "selected";}?>>Xu hướng</option>
                                        <option value="Tri thức"<?php if($selected == 'Tri thức'){echo "selected";}?>>Tri thức</option>

                                        <option value="TỔNG HỢP" disabled>----PHẦN MỀM----</option>
                                        <option value="Android/iOS"<?php if($selected == 'Android/iOS'){echo "selected";}?>>Android/iOS</option>
                                        <option value="Windows/MacOS"<?php if($selected == 'Windows/MacOS'){echo "selected";}?>>Windows/MacOS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <input style="padding: 0px; width: 100%" type="file" name="fileToUpload" id="fileToUpload" class="hidden">
                                    <label for="fileToUpload">Select file</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="url" placeholder="URL ảnh bìa" value="<?php echo $updatePage['url'] ?>" oninvalid="this.setCustomValidity('Thêm ảnh bìa')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="label" placeholder="Mô tả ngắn" value="<?php echo $updatePage['label'] ?>" required="" oninvalid="this.setCustomValidity('Thêm mô tả')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <textarea name="body" id="editor" placeholder="&nbsp;&nbsp;&nbsp;....&nbsp;bắt đầu viết" ">
                                        <?php echo $updatePage['body'] ?>
        								</textarea>
									</div>
								</div>
								<br>
                                <input name="id" type="hidden" value=<?php echo $updatePage['id'] ?>>
                                </input>
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
    </script>

<?php require('templates/footer.php'); ?>