<?php require('templates/header.php'); ?>

    <!-- Section Contents -->
    <div id="section-contents">
    	<div class="container">
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
    			<div class="col-12 col-lg-4">
    				<div class="row">
    					<!-- Block Style 6 & 4 -->
		    			<div class="col-12">
			    			<div class="ts-space20"></div>
							<div class="block-style-6">
								<div class="block-title-1">
									<h3>TWITTER FEED</h3>
									<img src="<?php echo BASE_VIEW;?>/assets/images/svg/more-1.svg" alt="Zola">
								</div>
								<div class="tweets">
					         		<!-- Item -->
					         		<div class="item">
					         			<a href="#">
						         			<div class="tweet-img">
						         				<img src="<?php echo BASE_VIEW;?>/assets/images/tweet-img2.png" alt="Zola">
						         			</div>
						         			<div class="tweet-content">
						         				<i class="fa fa-twitter"></i>
						         				<h5>Zola News <span>@ZolaNews</span></h5>
						         				<p>Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat <span>envato.d.pr/h7ivMe</span></p>
						         			</div>
						         		</a>
					         		</div>
					         		<!-- /.Item -->
					         		<!-- Item -->
					         		<div class="item">
					         			<a href="#">
						         			<div class="tweet-img">
						         				<img src="<?php echo BASE_VIEW;?>/assets/images/tweet-img2.png" alt="Zola">
						         			</div>
						         			<div class="tweet-content">
						         				<i class="fa fa-twitter"></i>
						         				<h5>Zola News <span>@ZolaNews</span></h5>
						         				<p>Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat <span>envato.d.pr/h7ivMe</span></p>
						         			</div>
						         		</a>
					         		</div>
					         		<!-- /.Item -->
					         		<!-- Item -->
					         		<div class="item">
					         			<a href="#">
						         			<div class="tweet-img">
						         				<img src="<?php echo BASE_VIEW;?>/assets/images/tweet-img2.png" alt="Zola">
						         			</div>
						         			<div class="tweet-content">
						         				<i class="fa fa-twitter"></i>
						         				<h5>Zola News <span>@ZolaNews</span></h5>
						         				<p>Phasellus pulvinar iaculis nunc at placerat. Sed porta sollicitudin eros, vel sagittis turpis consequat <span>envato.d.pr/h7ivMe</span></p>
						         			</div>
						         		</a>
					         		</div>
					         		<!-- /.Item -->
					         	</div>
							</div>
							<div class="ts-space50"></div>
							<div class="block-style-4">
								<a href="#">
									<img class="img-fluid" src="<?php echo BASE_VIEW;?>/assets/images/ads_01.jpg" alt="Zola">
								</a>
							</div>
							<div class="ts-space50"></div>
						</div>
						<!-- Block Style 6 & 4 -->
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- /.Section Contents -->

<?php require('templates/footer.php');?>



