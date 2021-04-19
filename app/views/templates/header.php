<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KMA | Bài Tập Nhóm</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo BASE_VIEW;?>/assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/bootstrap.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/fonts/fontawesome/font-awesome.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/animate.min.css" type="text/css">
    <!-- NProgress -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/nprogress.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo BASE_VIEW;?>/assets/css/style.css" type="text/css">
</head>
<body class="light-theme">
    <!-- Section Navbar V1 -->
    <header class="header-01">
    	<div class="topbar-01">
    		<div class="container">
    			<div class="row">
    				<div class="left col-6">
		    			<div class="today">
		    				<p>Hôm Nay</p>
		    			</div>
		    			<div class="searchbar" id="searchbar" onclick="show()">
		    				<form action="<?php echo BASE_URL;?>/search.php" method="post">
			                    <input type="text" name="search" id="searchInput" autocomplete="off" placeholder="Nhập gì đó để tìm .." required oninvalid="this.setCustomValidity('Bạn phải nhập gì đó chứ')" oninput="setCustomValidity('')">
			                    <button type="submit">
			                    	<!-- <img src="<?php echo BASE_VIEW;?>/assets/images/svg/050-magnifying-glass.svg" alt="Zola"> -->
									<div class="notification">
										<img src="<?php echo BASE_VIEW;?>/assets/images/svg/050-magnifying-glass.svg">
										<div class="content-notification" id="content-notification">
											<div class="content" id="searchContent" style="border-radius: 15px; overflow: hidden">
											</div>
											<div class="footer">
												<a style="cursor: pointer;">Xem tất cả kết quả</a>
											</div>
										</div>
									</div>			                    
								</button>
			                </form>
		    			</div>
		    		</div>
		    		<div class="right col-6">
						<div class="notification" style="top: -9px">
							<label class="switch">
								<i class="fa fa-adjust fa-lg"></i>
								<div>
								<input type="checkbox" id="themeSwitch"/>
								<span class="slider round"></span>
								</div>
							</label>
						</div>
		    			<div class="notification" style="visibility:hidden">
		    				<img src="<?php echo BASE_VIEW;?>/assets/images/svg/161-alarm.svg" alt="Zola">
		    				<span>11</span>
		    				<div class="content-notification">
		    				</div>
		    			</div>
		    			<div class="user-profile">
							<?php if (!empty($_SESSION['username'])): ?>
								<img alt ="ảnh đại diện" <?php 
									if (!empty($_SESSION['gId'])) {
										echo "src='".$_SESSION['gId']."'";
									}else{
										echo "avatar='".$_SESSION['username']."'";
									}
									?>
								>
								<p><?php echo $_SESSION['username'];?> <i class="fa fa-chevron-down"></i></p>
								<div class="user-menu">
									<ul>
										<li onclick="window.location.href='<?php echo BASE_URL;?>/user.php'"><a>Quản lý thông tin</a></li>
										<li onclick="window.location.href='<?php echo BASE_URL;?>/create.php'"><a>Thêm bài viết</a></li>
										<li onclick="out()"><a>Đăng Xuất</a></li>
									</ul>
								</div>
							<?php else: ?>
								<button class="btn loginBtn" onclick="location.href = '<?php echo BASE_URL;?>/login.php'">Đăng nhập</button>
								<button class="btn logupBtn" onclick="location.href = '<?php echo BASE_URL;?>/signup.php'">Đăng ký</button>
							<?php endif;?>
		    			</div>
		    		</div>
    			</div>
    		</div>
    	</div>
		<nav class="navbar-menu navbar navbar-expand-lg">
	        <div class="container navbar-container">
	            <!-- Logo -->
	            <a class="navbar-brand background-logo" href="<?php echo BASE_URL;?>"><img style="width: auto; height: 36px" src="<?php echo BASE_VIEW;?>/assets/images/logo.png" alt="Zola"></a>
	            <!-- /.Logo -->
	            <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                <ul class="navbar-nav">
	                	<li class="nav-item">
	                        <a class="nav-link" href="<?php echo BASE_URL;?>/topic.php?topic=mobile" role="button" aria-haspopup="true" aria-expanded="false">
								MOBILE
	                        </a>
	                    </li>
	                </ul>
	                <ul class="navbar-nav">
	                	<li class="nav-item dropdown-submenu dropdown">
	                        <a class="dropdown-item dropdown-toggle nav-link" href="<?php echo BASE_URL;?>/topic.php?topic=INTERNET" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							INTERNET
	                        </a>
	                        <ul class="dropdown-menu">
	                            <li><a href="<?php echo BASE_URL;?>/topic.php?topic=Digital Marketing" class="dropdown-item">Digital Marketing</a></li>
	                            <li><a href="<?php echo BASE_URL;?>/topic.php?topic=Media" class="dropdown-item">Media</a></li>
	                        </ul>
	                    </li>
	                </ul>
	                <ul class="navbar-nav">
	                	<li class="nav-item dropdown-submenu dropdown">
	                        <a class="dropdown-item dropdown-toggle nav-link" href="<?php echo BASE_URL;?>/topic.php?topic=Digital Marketing" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							GAME
	                        </a>
	                        <ul class="dropdown-menu">
	                            <li><a href="<?php echo BASE_URL;?>/topic.php?topic=Game PC" class="dropdown-item">PC</a></li>
	                            <li><a href="<?php echo BASE_URL;?>/topic.php?topic=Game Điện thoại" class="dropdown-item">Điện thoại</a></li>
	                        </ul>
	                    </li>
	                </ul>
	                <ul class="navbar-nav">
	                	<li class="nav-item dropdown-submenu dropdown">
	                        <a class="dropdown-item dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							KHÁM PHÁ
	                        </a>
	                        <ul class="dropdown-menu">
	                            <li><a href="<?php echo BASE_URL;?>/topic.php?topic=Thủ thuật" class="dropdown-item">Thủ thuật</a></li>
	                            <li><a href="<?php echo BASE_URL;?>/topic.php?topic=Xu hướng" class="dropdown-item">Xu hướng</a></li>
	                            <li><a href="<?php echo BASE_URL;?>/topic.php?topic=Tri thức" class="dropdown-item">Tri thức</a></li>
	                        </ul>
	                    </li>
	                </ul>
	                <ul class="navbar-nav">
	                	<li class="nav-item dropdown-submenu dropdown">
	                        <a class="dropdown-item dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							PHẦN MỀM
	                        </a>
	                        <ul class="dropdown-menu">
	                            <li><a href="<?php echo BASE_URL;?>/topic.php?topic=Android/iOS" class="dropdown-item">Android/iOS</a></li>
	                            <li><a href="<?php echo BASE_URL;?>/topic.php?topic=Windows/MacOS" class="dropdown-item">Windows/MacOS</a></li>
	                        </ul>
	                    </li>
	                </ul>
	            </div>
	            <button type="button" id="sidebarCollapse" class="navbar-toggler active" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </button>
	        </div>
    	</nav>
    </header>
		<!-- /.Section Navbar V1 -->
	<script>
		function out(){
			window.location.href='<?php echo BASE_URL;?>/app/model/logout.php'
			googleSignOut();
		}
	</script>