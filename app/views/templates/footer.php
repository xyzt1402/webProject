	<!-- Section Footer -->
	<div id="section-footer" class="footer-03">
		<div class="container">
			<div class="row">
			   	<div class="ft-column col-md-12 col-lg-4">
		         	<div class="logo">
		         		<a href="#"><img src="<?php echo BASE_VIEW;?>/assets/images/footer_logo.png" alt="Zola"></a>
		         	</div>
		         	<p>Trang tin tức về công nghệ nổi tiếng tại KMA</p>
		         	<ul class="ft_social_links">
		                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
		                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
		                <li><a href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
		            </ul>
			   	</div>
			   	<div class="ft-column col-md-12 col-lg-4">
		         	<h3>Team sáng lập</h3>
		         	<div class="instagram-01">
		         		<ul>
		         			<li><a href="https://www.facebook.com/thanh.luc.030620"><img class="img-fluid" style="width: 115px; height: 115px; border-radius: 5px" src="<?php echo BASE_URL;?>/app/upload/luc.jpg"></a></li>
		         			<li><a href="https://www.facebook.com/kingomegarobocon"><img class="img-fluid" style="width: 115px; height: 115px; border-radius: 5px" src="<?php echo BASE_URL;?>/app/upload/khiem.jpg"></a></li>
		         			<li><a href="https://www.facebook.com/kimson.quach"><img class="img-fluid" style="width: 115px; height: 115px; border-radius: 5px" src="<?php echo BASE_URL;?>/app/upload/son.jpg"></a></li>
		         			<li><a href="https://www.facebook.com/airbenderlongding"><img class="img-fluid" style="width: 115px; height: 115px; border-radius: 5px" src="<?php echo BASE_URL;?>/app/upload/trong.jpg"></a></li>
		         			<li><a href="https://www.facebook.com/vietlethanh1402"><img class="img-fluid" style="width: 115px; height: 115px; border-radius: 5px" src="<?php echo BASE_URL;?>/app/upload/viet.jpg"></a></li>
		         		</ul>
		         	</div>
			   	</div>
			   	<div class="ft-column col-md-12 col-lg-4">
		         	<h3>Mới nhất</h3>
		         	<div class="recentnews-02">
						<?php require(MODEL_ROOT . '/getFooterPages.php'); ?>
						<?php foreach($pages as $page): ?>
							<div class="item">
								<a href="<?php echo BASE_URL;?>/page.php?id=<?php echo $page['id'];?>">
									<div class="icon">
										<i class="fa fa-angle-double-right" aria-hidden="true"></i>
									</div>
									<div class="content">
										<p><?php echo $page['title'];?></p>
										<span><?php echo $page['created'];?></span>
									</div>
								</a>
		         			</div>
						<?php endforeach;?>
		         	</div>
			   	</div>
			   	
			</div>
		</div>
	</div>
	<!-- /.Section Footer -->

    <!-- Javascript Files -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/bootstrap.min.js"></script>
	<!-- Waypoint -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/jquery.waypoints.min.js"></script>
	<!-- Counter -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/jquery.countup.js"></script>
	<!-- Counter -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/jquery.countup.js"></script>
	<!-- NProgress -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/nprogress.js"></script>
	<!-- Ticker -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/jquery.newsTicker.min.js"></script>
	<!-- Scripts -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/scripts.js"></script>
	<script src="<?php echo BASE_VIEW;?>/assets/js/myscripts/quicksearch.js"></script>
	<script src="<?php echo BASE_VIEW;?>/assets/js/myscripts/pageNum.js"></script>

</body>
</html>