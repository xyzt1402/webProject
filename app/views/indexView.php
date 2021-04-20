<?php require('templates/header.php') ?>

<!-- Section Slider 02 -->
<div id="section-slider" class="slider02">
	<!-- Slider Content -->
	<div class="slider-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Item -->
					<div class="thumbnail-1 v1">
						<a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $pages[0]['id']; ?>">
							<img src="<?php echo $pages[0]['url'] ?>">
							<div class="overlay">
								<div class="overlay-content">
									<div class="list-users-02">
										<p style="background-color: #f96d00;border-radius: 3px; padding: 0px 10px"><span style="padding-left: 3px;"><?php echo $pages[0]['topic']; ?></span></p>
										<h3><?php echo $pages[0]['title']; ?></h3>
										<br>
										<div class="like">
											<?php echo $pages[0]['created']; ?>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<div class="thumbnail-1 v2">
						<a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $pages[2]['id']; ?>">
							<img src="<?php echo $pages[2]['url'] ?>">
							<div class="overlay">
								<div class="overlay-content">
									<div class="list-users-02">
										<p style="background-color: #f96d00;border-radius: 3px; padding: 0px 10px"><span style="padding-left: 3px;"><?php echo $pages[2]['topic']; ?></span></p>
										<h3><?php echo $pages[2]['title']; ?></h3>
										<div class="like">
											<hr>
											<?php echo $pages[2]['created']; ?>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<!-- /.Item -->
					<!-- Item -->
					<div class="thumbnail-1 v3">
						<a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $pages[1]['id']; ?>">
							<img src="<?php echo $pages[1]['url'] ?>">
							<div class="overlay">
								<div class="overlay-content">
									<div class="list-users-02">
										<p style="background-color: #f96d00;border-radius: 3px; padding: 0px 10px"><span style="padding-left: 3px;"><?php echo $pages[1]['topic']; ?></span></p>
										<h3><?php echo $pages[1]['title']; ?></h3>
										<div class="like">
											<hr>
											<?php echo $pages[1]['created']; ?>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php
					unset($pages[0]);
					unset($pages[1]);
					unset($pages[2]);
					?>
					<!-- /.Item -->
				</div>
			</div>
		</div>
	</div>
	<!-- /.Slider Content -->
</div>
<!-- /.Section Slider 02 -->

<!-- Section Contents -->
<div id="section-contents">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block-title-2">
					<h3>XEM NHIỀU NHẤT</h3>
				</div>
			</div>
			<?php foreach ($popularPages as $popularPage) : ?>
				<!-- Block Style 12 -->
				<div class="col-12 col-md-6 col-lg-3">
					<div class="block-style-12 v2">
						<!-- Contents -->
						<div class="contents" style="border-radius: 5px; overflow: hidden">
							<!-- Thumbnail -->
							<div class="thumbnail-1">
								<a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $popularPage['id']; ?>">
									<img src="<?php echo $popularPage['url']; ?>">
								</a>
							</div>
							<!-- /.Thumbnail -->
							<!-- Content Wrapper -->
							<div class="content-wrapper">
								<!-- Title -->
								<div class="title">
									<a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $popularPage['id']; ?>">
										<h2 style="font-family: 'Lora-SemiBold'; font-size:18px"><?php
																									if (strlen($popularPage['title']) > 60) {
																										echo (substr($popularPage['title'], 0, strpos($popularPage['title'] . ' ', ' ', 60)) . '...');
																									} else {
																										echo $popularPage['title'];
																									}
																									?>
										</h2>
									</a>
								</div>
								<!-- /.Title -->
								<!-- Description -->
								<div class="desc">
									<p style="font-size: 16px"><?php echo $popularPage['label']; ?></p>
								</div>
								<!-- /.Description -->
							</div>
							<!-- Content Wrapper -->
						</div>
						<!-- /.Contents -->
					</div>
				</div>
			<?php endforeach; ?>

		</div>
		<!-- <div class="ts-space70"></div> -->
		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="row">
					<div class="col-12">
						<div class="block-title-2">
							<h3>MỚI CẬP NHẬT</h3>
						</div>
					</div>
					<!-- Block Style 13 -->
					<div class="col-12">
						<div class="block-style-13">
							<div class="content-wrapper">
								<div class="recent-videos" id="loadPageArea">
									<?php foreach ($pages as $page) : ?>
										<?php if ($page['url'] == "") {
											$page['url'] =  BASE_VIEW . '/assets/images/thumbnail_27.jpg';
										} ?>
										<div class="item">
											<a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $page['id']; ?>">
												<div class="video_thumbnail">
													<img class="img-fluid" src="<?php echo $page['url'] ?>">
												</div>
												<div class="video_description">
													<h4> <?php echo $page['topic']; ?> <span><?php echo $page['created']; ?></span> </h4>
													<h2><?php echo $page['title']; ?></h2>
													<p><?php echo $page['label']; ?></p>
												</div>
											</a>
										</div>
									<?php endforeach; ?>
								</div>
								<div class="see-all-comments">
									<a onclick="loadMore()" style="font-size: 15px; cursor: pointer">XEM THÊM BÀI VIẾT</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /.Block Style 13 -->
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="row">
					<div style="height:100%; width:100% ; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38; padding: 0px; margin-left: 30px;margin-right:15px;">
						<div style="height:100%; padding:0px; margin:0px; width: 100%;overflow:hidden;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=5&pref_coin_id=3349&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;overflow:hidden;"></iframe></div>
						<div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.Section Contents -->


<?php require('templates/footer.php'); ?>