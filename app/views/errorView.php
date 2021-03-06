<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Zola">
    <meta name="description" content="Concept Magazine News Blogs">
    <title>Lỗi | Thông báo</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo BASE_VIEW;?>/assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/fonts/fontawesome/font-awesome.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/owl.theme.default.min.css" type="text/css">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/animate.min.css" type="text/css">
    <!-- NProgress -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/nprogress.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/style.css" type="text/css">
</head>
<body class="bg-404" style="background-color: red !important">
    <!-- Section Contents -->
    <div id="section-contents" class="error-404">
    	<div class="container">
    		<div class="row">
    			<div class="col-12">
    				<div class="block-style-30">
	    				<div class="logo" style="margin-bottom: 80px !important">
	    					<a href="index.html"><img style="width: 200px" src="<?php echo BASE_VIEW;?>/assets/images/error_logo.png" class="logo"></a>
	    				</div>
	    				<div class="header">
	    					<h6>LỖI</h6>
	    					<h1>
                                <?php 
                                    if ($error==""){
                                        echo "Lỗi không xác định";
                                    }else{
                                        echo $error;
                                    }
                                ?>
                            </h1>
	    				</div>
	    				<div class="content-image">
	    					<img style="height: 250px; border-radius: 5px" class="img-fluid" src="<?php echo BASE_VIEW;?>/assets/images/error_animation.gif" alt="error">
	    				</div>
	    				<div class="cta-btn">
	    					<a href="javascript:window.history.back();">Quay lại</a>
	    				</div>
	    			</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- /.Section Contents -->
    <!-- Javascript Files -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/bootstrap.min.js"></script>
	<!-- Swiper Slider -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/swiper.min.js"></script>
	<!-- OWL Carousel -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/owl.carousel.min.js"></script>
	<!-- Waypoint -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/jquery.waypoints.min.js"></script>
	<!-- Easy Waypoint -->
	<script src="<?php echo BASE_VIEW;?>/assets/js/easy-waypoint-animate.js"></script>
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
</body>
</html>
