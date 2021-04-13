<?php require('templates/header.php'); ?>

    <!-- Section Contents -->
    <div id="section-contents">
    	<div class="container">
    		<!-- <div class="ts-space70"></div> -->
    		<div class="row">
    			<div class="col-12 col-lg-8">
				<div class="contact-form">

					<div class="row">							
							<form action="<?php echo BASE_URL;?>/search.php" method="POST" enctype="multipart/form-data">
								<div class="row" style="margin-left: 15px;">
									<div class="form-group col-sm-12 col-md-12 col-lg-12">
										<label style="margin-bottom: 10px; font-family: 'Lora-Medium'; font-size: 30px">Tìm kiếm</label>
										<input type="text" value="<?php echo $searchValue;?>" class="form-control" name="search"  style="border: 1px solid #ced4da !important;" required="" oninvalid="this.setCustomValidity('Thêm tựa đề')" oninput="setCustomValidity('')">
									</div>
									<div class="form-group col-sm-12 col-md-12 col-lg-4">
										<label>Chọn chủ đề</label>
										<select name="topic" class="form-control" onchange="this.form.submit();" id="topicSelect">
											<option value="Tất cả">Tất cả</option>
											<option value="MOBILE">MOBILE</option>

											<option value="TỔNG HỢP" disabled>----INTERNET----</option>
											<option value="Digital Marketing">Digital Marketing</option>
											<option value="Media">Media</option>

											<option value="TỔNG HỢP" disabled>----GAME----</option>
											<option value="Điện thoại">Điện thoại</option>
											<option value="PC">PC</option>
											
											<option value="TỔNG HỢP" disabled>----KHÁM PHÁ----</option>
											<option value="Thủ thuật">Thủ thuật</option>
											<option value="Xu hướng">Xu hướng</option>
											<option value="Tri thức">Tri thức</option>

											<option value="TỔNG HỢP" disabled>----PHẦN MỀM----</option>
											<option value="Android/iOS">Android/iOS</option>
											<option value="Windows/MacOS">Windows/MacOS</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-12 col-lg-4">
										<label>Thời gian</label>
										<select name="time" class="form-control" id="time" onchange="this.form.submit();">
											<option value="Tất cả">Tất cả</option>
											<option value="1 ngày qua">1 ngày qua</option>
											<option value="1 tuần qua">1 tuần qua</option>
											<option value="1 tháng qua">1 tháng qua</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-12 col-lg-4">
										<label>Sắp xếp theo</label>
										<select name="sort" class="form-control" id="sort" onchange="this.form.submit();">
											<option value="Mới nhất">Mới nhất</option>
											<option value="Phổ biến nhất">Phổ biến nhất</option>
										</select>
									</div>
								</div>
							</form>
					</div>
    				<div class="row">
						<div class="col-12">
							<div class="block-title-2">
								<h3>KẾT QUẢ TÌM KIẾM</h3>
							</div>
    					</div>
		    			<!-- Block Style 13 -->
		    			<div class="col-12">
		    				<div class="block-style-13">
		    					<div class="content-wrapper">
			    					<div class="recent-videos">
										<?php if ($searchPages!==FALSE):?>
											<?php foreach ($searchPages as $searchPage):?>
												<?php if ($searchPage['url']==""){
													$searchPage['url'] =  BASE_VIEW . '/assets/images/thumbnail_27.jpg';
												}?>
												<div class="item">
												<a href="<?php echo BASE_URL;?>/page.php?id=<?php echo $searchPage['id'];?>">
													<div class="video_thumbnail">
														<img class="img-fluid" src="<?php echo $searchPage['url']?>">
													</div>
													<div class="video_description">
														<h4> <?php echo $searchPage['topic'];?> <span><?php echo $searchPage['created'];?></span> </h4>
														<h2><?php echo $searchPage['title'];?></h2>
														<p><?php echo $searchPage['label'];?></p>
													</div>
												</a>
											</div>
											<?php endforeach; ?>
										<?php endif;?>
			    					</div>
		    					</div>
		    				</div>
		    			</div>
		    			<!-- /.Block Style 13 -->
		    		</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- /.Section Contents -->
<script>
	var topic = document.getElementById('topicSelect');
	for (var i = 0; i<topic.childElementCount;i++){
		if (topic.children[i].value=="<?php echo $topic2;?>"){
			topic.children[i].setAttribute('selected','selected');
		}
	}
	var topic = document.getElementById('time');
	for (var i = 0; i<topic.childElementCount;i++){
		if (topic.children[i].value=="<?php echo $time2;?>"){
			topic.children[i].setAttribute('selected','selected');
		}
	}
	var topic = document.getElementById('sort');
	for (var i = 0; i<topic.childElementCount;i++){
		if (topic.children[i].value=="<?php echo $sort2;?>"){
			topic.children[i].setAttribute('selected','selected');
		}
	}
</script>
	</div>
<?php require('templates/footer.php');?>



