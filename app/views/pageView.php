<?php require('templates/header.php'); ?>

    <!-- Section Contents -->
    <div id="section-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-12 col-lg-8">
    				<div class="row">
		    			<div class="col-12">
		    				<!-- Block Style 16 -->
			    			<div class="block-style-16">
								<h6><?php echo $page['created'];?></h6>
								<h1><?php echo $page['title']?></h1>
								<div class="list-users-05">
				    				<ul class="images">
				    					<li>
											<img alt ="ảnh đại diện"style="width: auto; height: 40px; border-radius: 100%" <?php 
												if ($userInfo==false){
													echo 'avatar=Anoy';
												}else{
													if (!empty($userInfo['gId'])) {
														echo "src='".$userInfo['gId']."'";
													}else{
														echo "avatar='".$userInfo['username']."'";
													}
												}
												?>
											>
										</li>
				    				</ul>
				    				<p><span><?php 
										if ($userInfo==false){
											echo '[Tài khoản đã bị xóa]';
										}else{
											echo $userInfo['username'];
										}
										?></span></p>
				    				<div class="item-wrapper">
										<div class="item" style="padding-left: 20px;"></div>
					    				<div class="item">
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 481.567 481.567" style="enable-background:new 0 0 481.567 481.567;" xml:space="preserve">
													<path d="M424.7,55.841c-19.8-15.2-43.3-25-68.1-28.2c-42.6-5.6-84.3,7.4-115.8,35.6c-31.5-28.5-73.4-41.5-116.2-35.8
														c-24.8,3.3-48.4,13.2-68.3,28.6c-35.8,27.9-56.4,69.6-56.3,114.6c0,38.5,15.1,74.8,42.4,102.1l172.9,172.9
														c6.6,6.6,15.2,9.8,23.8,9.8c8.6,0,17.2-3.3,23.8-9.8l26.8-26.8c7-7,7-18.4,0-25.5c-7-7-18.4-7-25.5,0l-25.1,25.1l-171.2-171.3
														c-20.5-20.5-31.8-47.7-31.9-76.7c0-33.7,15.4-65.1,42.4-86.1c14.8-11.5,32.4-18.9,50.9-21.3c34.2-4.5,67.6,6.7,91.7,30.9
														l19.8,19.8l19.6-19.6c24-24.1,57.4-35.3,91.5-30.8c18.5,2.4,36,9.7,50.8,21c28.2,21.7,43.8,54.4,42.8,89.6
														c-0.8,27.7-12.9,54.6-33.9,75.7l-91.2,91.1c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l91.2-91.2c27.6-27.6,43.4-63.1,44.4-100.1
														C482.9,128.041,462.2,84.641,424.7,55.841z"/>
											</svg>
											<?php echo $page['view']." lượt xem";?>
					    				</div>
					    				<div class="item">
											<svg enable-background="new 0 0 488 488" version="1.1" viewBox="0 0 488 488" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
													<path d="m415.7 90.4c-46-40.3-106.9-62.5-171.7-62.5s-125.7 22.2-171.7 62.5c-46.6 40.9-72.3 95.4-72.3 153.6 0 45.9 16.7 90.9 47.2 127.8-6 11.7-14.2 21-24.6 27.8-8.6 5.6-12.7 15.7-10.4 25.7 2.2 9.9 10.2 17.1 20.2 18.5 20.6 2.9 60.8 4.3 98.1-18 8.5-5.1 11.3-16.2 6.2-24.7s-16.2-11.3-24.7-6.2c-15.6 9.3-32.1 13.1-46.4 14.2 8.2-9.8 14.7-21.3 19.5-34.3 2.4-6.4 0.9-13.5-3.6-18.5-29.8-32.2-45.5-71.1-45.5-112.3 0-99.3 93.3-180.1 208-180.1s208 80.8 208 180.1-93.3 180.1-208 180.1c-16.6 0-33.2-1.7-49.2-5.1-9.7-2.1-19.3 4.2-21.3 13.9-2.1 9.7 4.2 19.3 13.9 21.3 18.5 3.9 37.5 5.9 56.7 5.9 64.7 0 125.7-22.2 171.7-62.5 46.5-40.9 72.2-95.4 72.2-153.6s-25.7-112.7-72.3-153.6z"></path>
													<circle cx="243.9" cy="244" r="23.6"></circle>
													<circle cx="317.5" cy="244" r="23.6"></circle>
													<circle cx="170.3" cy="244" r="23.6"></circle>
											</svg>
											<?php echo $totalComment['total']." lượt bình luận";?>
					    				</div>
					    			</div>
			    				</div>
			    			</div>
			    			<!-- /.Block Style 16 -->
			    			<!-- Block Style 17 -->
			    			<div class="block-style-17">
			    				<span class="bg-orange"><?php echo $page['topic'];?></span>
			    				<img style="width: 100%;height:auto" src="<?php echo $page['url'];?>">
			    			</div>
			    			<!-- /.Block Style 17 -->
			    			<!-- Block Style 18 -->
			    			<div class="block-style-18">
                                <p><?php echo $page['body']?></p>
			    			</div>
			    			<!-- /.Block Style 18 -->
			    			<!-- Block Style 19 -->
			    			<div class="block-style-19">
			    				<div class="content-wrapper">
				    				<div class="share">
				    				</div>
				    			</div>
			    			</div>
			    			<!-- /.Block Style 19 -->
			    			<!-- Block Style 20 -->
			    			<!-- Block Style 20 -->
						</div>
						
						<div class="ts-space25"></div>
		    		</div>
	    		</div>
    			<!-- Block Style 3, 4, 5 -->
    			<div class="col-12 col-lg-4">
    				<div class="block-style-10">
    					<div class="block-title-1">
							<h3>XEM NHIỀU NHẤT</h3>
							<img src="<?php echo BASE_VIEW;?>/assets/images/svg/more-1.svg" alt="Zola">
						</div>
    					<div class="small-list-posts">
							<?php foreach($popularPages as $popularPage):?>
							<!-- Item -->
							<div class="item">
								<a href="<?php echo BASE_URL;?>/page.php?id=<?php echo $popularPage['id'];?>">
									<div class="thumbnail-img">
										<img style="width: 80px; height:80px" src="<?php echo $popularPage['url'];?>">
									</div>
									<div class="content">
										<h3><?php echo $popularPage['title'];?></h3>
										<span><?php echo $popularPage['created'];?></span>
									</div>
								</a>
							</div>
							<!-- Item -->
							<?php endforeach;?>
						</div>
    				</div>
    				<div class="ts-space50"></div>
					<div class="block-style-6">
						<div class="block-title-1">
							<h3>BÌNH LUẬN</h3>
							<img src="<?php echo BASE_VIEW;?>/assets/images/svg/more-1.svg" alt="Zola">
						</div>
						<div class="tweets" id="commentPost">
							<div class="add-comment">
								<!-- <div class="thumbnail-img">
									<img src="<?php echo BASE_VIEW;?>/assets/images/profile_23.jpg" alt="Zola">
								</div> -->
								<div class="form-comment">
									<form method="POST" id="commentForm" action="<?php echo BASE_URL;?>/app/model/addComment.php" onsubmit="alert('run')">
										<div class="row">
											<div class="form-group col-12">
												<input type="hidden" name="userId" value="<?php echo $_SESSION['id'];?>">
												<input type="hidden" name="pageId" value="<?php echo $page['id'];?>">
												<textarea onkeydown="pressed(event)" class="form-control" name="message" id="message" placeholder="Viết bình luận ..." required=""></textarea>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="comments" id="commentShow">
							<!-- Comment Item -->
								<?php foreach($comments as $comment):?>
									<?php 
										$id = $comment['userId'];
										require MODEL_ROOT . '/getUserComment.php';
									?>
									<div class="media">
										<div class="img-frame1">
											<img class="mr-3"<?php 
												if (!empty($userInfo['gId'])) {
													echo "src='".$userInfo['gId']."'";
												}else{
													echo "avatar='".$userInfo['username']."'";
												}
												?>
											>
										</div>
										<div class="media-body">
											<div class="pin">
												<!-- svg -->
											</div>
											<h5 class="mt-0">
												<?php echo $userInfo['username'];?>
												<span><?php echo $comment['created'];?></span>
											</h5>
											<p><?php echo $comment['message'];?></p>
											<!-- /.options -->
											<div class="answers show">
												<?php 
													$cmtId = $comment['id'];
													require MODEL_ROOT . '/getSubComment.php';
												?>
												<?php if (count($subComments)>0):?>
													<div class="see-answer" style="margin-bottom: 10px;">
														<div class="show-answer" style="cursor: pointer;font-family: 'Lora-Regular'" onclick="showSubCmt(this)">Xem <?php echo count($subComments);?> phản hồi <i class="fa fa-chevron-down"></i></div>
													</div>
												<?php else:?>
													<div class="see-answer" style="margin-bottom: 10px;">
														<div class="show-answer" style="cursor: pointer; font-family: 'Lora-Regular'" onclick="showSubCmt(this)">Trả lời
														<span style="opacity: 0.7; padding-left:5px"><i class="fa fa-comment"></i></span>
													</div>
												</div>													
												<?php endif;?>
												<div class="replied" style="display: none;">
													<?php foreach($subComments as $subComment):?>
														<?php 
															$id = $subComment['userId'];
															require MODEL_ROOT . '/getUserComment.php';
														?>
														<!-- Replied -->
														<div class="media" style="margin-bottom: 7px !important; border-bottom: 0px !important">
															<a href="#">
																<div class="img-frame2" style="padding-top: 7px;">
																	<img class="mr-3"<?php 
																		if (!empty($userInfo['gId'])) {
																			echo "src='".$userInfo['gId']."'";
																		}else{
																			echo "avatar='".$userInfo['username']."'";
																		}
																		?>
																	>
																</div>
															</a>
															<div class="media-body">
																<h5 class="mt-0" style="margin: 2px !important;"><?php echo $userInfo['username'];?> <span><?php echo $subComment['created'];?></span></h5>
																<p style="margin: 0px !important;"><?php echo $subComment['message'];?></p>
															</div>
														</div>
														<!-- /.Replied -->
													<?php endforeach;?>
												</div>
												<div class="add-comment" style="display: none;">
													<div class="form-comment">
														<form method="POST" id="commentForm" action="<?php echo BASE_URL;?>/app/model/addComment.php" onsubmit="alert('run')">
															<div class="row">
																<div class="form-group col-12">
																	<input type="hidden" name="userId" value="<?php echo $_SESSION['id'];?>">
																	<input type="hidden" name="pageId" value="<?php echo $page['id'];?>">
																	<textarea style="padding: 8px 12px; height: 45px; border-radius: 20px"
																		onkeydown="subPressed(event)" class="form-control" name="message" commentId="<?php echo $comment['id'];?>" placeholder="Viết câu trả lời ..." required=""></textarea>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								<?php endforeach ?>
							</div>
			         	</div>
					</div>
					<div class="ts-space50"></div>
    				<div class="block-style-4">
    					<a href="#">
    						<img class="img-fluid" src="<?php echo BASE_VIEW;?>/assets/images/ads_01.jpg" alt="Zola">
    					</a>
    				</div>
    			</div>
    			<!-- /.Block Style 3, 4, 5 -->
    		</div>
    	</div>
    </div>
    <!-- /.Section Contents -->

<script>
	function showSubCmt(ele){
		see_answer = ele.parentElement;
		see_answer.childNodes[1].style.display = "none";
		see_answer.parentElement.childNodes[3].style.display="";
		see_answer.parentElement.childNodes[5].style.display="";
	}
	function subPressed(e){
		var a = "<?php 
			if (isset($_SESSION['username'])){
				echo $_SESSION['username'];
			}else{
				echo 'null';
			}
			?>"
		if (e.key=="Enter"){
			if (a!='null'){
				console.log(e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.childNodes[3])
				if (e.target.value==""){
					alert('bình luận không được rỗng');
				}else{
					$.ajax({
						url: '<?php echo BASE_URL;?>/app/model/addSubComment.php',
						type: 'POST',
						data: {
							userId: '<?php echo $_SESSION['id'];?>',
							commentId: e.target.getAttribute('commentId'),
							message: e.target.value
						},
						success: function(msg) {
							var commentPost = e.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.childNodes[3];
							var current = new Date();
							var time  = current.getFullYear()+'-'+(current.getMonth()+1)+'-'+current.getDate()+' '+current.getHours()+':'+current.getMinutes()+':'+current.getSeconds();
							var item = document.createElement('div');
							item.setAttribute('class','media');	
							item.setAttribute("style","margin-bottom: 7px !important; border-bottom: 0px !important");
							item.innerHTML = `
								<a href="#">
									<div class="img-frame2" style="padding-top: 7px;">
										<img class="mr-3" <?php 
										if (!empty($_SESSION['gId'])) {
											echo "src='".$_SESSION['gId']."'";
										}else{
											echo "avatar='".$_SESSION['username']."'";
										}
										?>>
									</div>
								</a>
								<div class="media-body">
									<h5 class="mt-0" style="margin: 2px !important;"><?php echo $_SESSION['username'];?> <span>${time}</span></h5>
									<p style="margin: 0px !important;">${e.target.value}</p>
								</div>
							`					
							commentPost.appendChild(item);
							e.target.value = "";
							LetterAvatar.transform();							
						}

					});
				}
			}else{
				window.location.href = "login.php";
			}
		}
	}
	function pressed(e){
		var a = "<?php 
			if (isset($_SESSION['username'])){
				echo $_SESSION['username'];
			}else{
				echo 'null';
			}
			?>"
		var form = document.getElementById('commentForm');
		if (e.key=="Enter"){
			if (a!='null'){
				if (document.getElementById('message').value==""){
					alert('bình luận không được rỗng');
					document.getElementById('message').value=="";
				}else{
					$.ajax({
						url: '<?php echo BASE_URL;?>/app/model/addComment.php',
						type: 'POST',
						data: {
							userId: '<?php echo $_SESSION['id'];?>',
							pageId: '<?php echo $page['id'];?>',
							message: document.getElementById('message').value
						},
						success: function(msg) {
							var commentPost = document.getElementById('commentShow');
							var current = new Date();
							var time  = current.getFullYear()+'-'+(current.getMonth()+1)+'-'+current.getDate()+' '+current.getHours()+':'+current.getMinutes()+':'+current.getSeconds();
							var item = document.createElement('div');
							item.setAttribute('class','media');	
							item.innerHTML = `
								<div class="img-frame1">
									<img class="mr-3" <?php 
										if (!empty($_SESSION['gId'])) {
											echo "src='".$_SESSION['gId']."'";
										}else{
											echo "avatar='".$_SESSION['username']."'";
										}
										?>>
								</div>
								<div class="media-body">
									<div class="pin">
										<!-- svg -->
									</div>
									<h5 class="mt-0"><?php echo $_SESSION['username'];?><span>${time}</span></h5>
									<p>${document.getElementById('message').value}</p>
									<div class="answers show">
									<div class="see-answer" style="margin-bottom: 10px;">
														<div class="show-answer" style="cursor: pointer; font-family: 'Lora-Regular';" onclick="showSubCmt(this)">Trả lời
														<span style="opacity: 0.7; padding-left:5px"><i class="fa fa-comment"></i></span>
													</div>
									</div>
									</div>				
								</div>
							`					
							commentPost.insertBefore(item,commentPost.childNodes[2]);
							document.getElementById('message').value = "";
							LetterAvatar.transform();
						}               
					});
				}

			}else{
				window.location.href = "login.php";
			}
		}
	}
</script>	
<?php require('templates/footer.php');?>
