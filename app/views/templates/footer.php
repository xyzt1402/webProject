	<!-- Section Footer -->
	<div id="section-footer" class="footer-03">
		<div class="container">
			<div class="row">
			   	<div class="ft-column col-md-12 col-lg-4">
		         	<div class="logo">
		         		<a href="#"><img style="width: auto; height:45" src="<?php echo BASE_VIEW;?>/assets/images/logo.png" alt="Zola"></a>
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
			   	<div class="ft_backtotop">
			   		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="611.98px" height="611.98px" viewBox="0 0 611.98 611.98" style="enable-background:new 0 0 611.98 611.98;" xml:space="preserve"><g><g id="Rocket"><g><path d="M85.311,478.813c-21.604,0-39.875,14.307-45.832,33.957l-20.799,68.585c-0.268,0.881-0.402,1.82-0.402,2.797
				c0,5.286,4.29,9.576,9.576,9.576c0.977,0,1.916-0.153,2.796-0.402l68.585-20.8c19.65-5.956,33.957-24.228,33.957-45.832
				C133.192,500.245,111.76,478.813,85.311,478.813z M583.277,0c-103.291,0-202.961,4.501-286.81,59.104
				c-44.204,28.786-80.919,69.083-110.548,114.13c-71.688,4.386-138.416,40.699-180.57,99.785
				c-5.746,8.063-6.934,18.521-3.16,27.656c3.773,9.155,11.989,15.686,21.757,17.352c25.818,4.348,54.413,15.936,83.275,33
				c-5.209,19.114-9.461,37.673-12.468,55.045c-1.609,9.192,1.379,18.635,7.987,25.224l77.932,77.912
				c5.439,5.439,12.755,8.408,20.301,8.408c1.647,0,3.275-0.134,4.922-0.422c17.391-3.007,35.949-7.259,55.063-12.468
				c17.065,28.901,28.652,57.496,33.019,83.313c1.647,9.768,8.216,17.965,17.353,21.776c3.543,1.455,7.258,2.164,10.975,2.164
				c5.898,0,11.74-1.819,16.682-5.324c59.066-42.136,95.398-108.882,99.746-180.589c45.047-29.648,85.344-66.345,114.111-110.567
				c54.564-83.793,59.123-187.619,59.123-286.81C612.006,12.851,599.135,0,583.277,0z M63.056,278.382
				c25.319-26.009,57.477-44.146,92.468-52.555c-13.215,25.856-24.381,52.287-33.594,78.334
				C102.088,293.225,82.304,284.434,63.056,278.382z M333.623,548.949c-6.053-19.286-14.844-39.07-25.799-58.894
				c26.066-9.212,52.498-20.378,78.354-33.612C377.77,491.454,359.633,523.649,333.623,548.949z M504.732,284.166
				C445.188,375.619,316.77,436.218,210.568,457.86l-56.462-56.442c21.662-106.22,82.26-234.619,173.694-294.164
				c63.414-41.273,142.801-48.571,226.574-49.643C553.322,141.384,546.006,220.752,504.732,284.166z M410.904,248.983
				c26.449,0,47.881-21.432,47.881-47.881s-21.432-47.881-47.881-47.881s-47.881,21.432-47.881,47.881
				S384.455,248.983,410.904,248.983z"></path></g></g></g></svg>
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
	<script src="<?php echo BASE_VIEW;?>/assets/js/myscripts/letteravar.js"></script>

</body>
</html>