<?php require('templates/header.php'); ?>
<div class="ts-space60"></div>
<!-- Section Contents -->
<div id="section-contents">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Block 15 -->
                <div class="block-style-15">
                    <div class="content-wrapper">
                        <div class="left">
                            <div class="thumbnail-img">
                                <img class="img-fluid" alt="ảnh đại diện" style="width: auto; height: 100px; border-radius: 100%" <?php
                                    if (!empty($_SESSION['gId'])) {
                                        echo "src='" . $_SESSION['gId'] . "'";
                                    } else {
                                        echo "avatar='" . $_SESSION['username'] . "'";
                                    }
                                    ?>>
                            </div>
                            <div class="details">
                                <h2><?php echo $_SESSION['username'] ?></h2>
                                <h6>Permission: <?php switch ($userInfo['permission']) {
                                                    case "1":
                                                        echo "Độc giả";
                                                        break;
                                                    case "2":
                                                        echo "Cộng tác viên";
                                                        break;
                                                    case "3":
                                                        echo "Quản lý viên";
                                                        break;
                                                    default:
                                                        echo "Bạn không là gì cả";
                                                }

                                                ?>
                                </h6>
                                <div class="followers-post">
                                    <div class="item">
                                        <a href="#">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 481.567 481.567" style="enable-background:new 0 0 481.567 481.567;" xml:space="preserve">
                                                <path d="M424.7,55.841c-19.8-15.2-43.3-25-68.1-28.2c-42.6-5.6-84.3,7.4-115.8,35.6c-31.5-28.5-73.4-41.5-116.2-35.8
															c-24.8,3.3-48.4,13.2-68.3,28.6c-35.8,27.9-56.4,69.6-56.3,114.6c0,38.5,15.1,74.8,42.4,102.1l172.9,172.9
															c6.6,6.6,15.2,9.8,23.8,9.8c8.6,0,17.2-3.3,23.8-9.8l26.8-26.8c7-7,7-18.4,0-25.5c-7-7-18.4-7-25.5,0l-25.1,25.1l-171.2-171.3
															c-20.5-20.5-31.8-47.7-31.9-76.7c0-33.7,15.4-65.1,42.4-86.1c14.8-11.5,32.4-18.9,50.9-21.3c34.2-4.5,67.6,6.7,91.7,30.9
															l19.8,19.8l19.6-19.6c24-24.1,57.4-35.3,91.5-30.8c18.5,2.4,36,9.7,50.8,21c28.2,21.7,43.8,54.4,42.8,89.6
															c-0.8,27.7-12.9,54.6-33.9,75.7l-91.2,91.1c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l91.2-91.2c27.6-27.6,43.4-63.1,44.4-100.1
															C482.9,128.041,462.2,84.641,424.7,55.841z" />
                                            </svg>
                                            Tổng: <?php echo $totalView['total'] ?> lượt xem
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path d="M162.002,237h-61c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h61c11.046,0,20-8.954,20-20S173.048,237,162.002,237
															z" />
                                                <path d="M162.002,315h-61c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h61c11.046,0,20-8.954,20-20
															C182.002,323.954,173.048,315,162.002,315z" />
                                                <path d="M162.002,391.999h-61c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h61c11.046,0,20-8.954,20-20
															C182.002,400.953,173.048,391.999,162.002,391.999z" />
                                                <path d="M292.001,391.999h-61c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h61c11.046,0,20-8.954,20-20
															C312.001,400.953,303.047,391.999,292.001,391.999z" />
                                                <path d="M292.001,80.001H101.002c-11.046,0-20,8.954-20,20v79c0,11.046,8.954,20,20,20h190.999c11.046,0,20-8.954,20-20v-79
															C312.001,88.955,303.047,80.001,292.001,80.001z M272.001,159.001H121.002v-39h150.999V159.001z" />
                                                <path d="M492,351.999c11.046,0,20-8.954,20-20v-50c0-11.046-8.954-20-20-20h-99.999V20.001c0-11.046-8.954-20-20-20H20.003
															c-11.045,0-20,8.954-20,20L0,431.995c0,44.111,35.887,80,80,80.001l351.998,0.003c0.153,0,0.306-0.002,0.458-0.005
															c21.198-0.117,41.108-8.427,56.111-23.428C503.678,473.456,512,453.365,512,431.995c0-11.046-8.954-20-20-20
															c-11.046,0-20,8.954-20,20c0,10.686-4.161,20.73-11.717,28.286c-7.556,7.554-17.599,11.714-28.283,11.714
															c-0.001,0-0.003,0-0.003,0c-22.054-0.002-39.997-17.946-39.997-40V302h80v30C472,343.046,480.955,351.999,492,351.999z
															 M80,471.996c-22.056-0.001-40-17.945-40-40.001l0.003-391.994h311.998v391.994c0,14.562,3.912,28.229,10.739,40.003L80,471.996z
															" />
                                                <path d="M292.001,237h-61c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h61c11.046,0,20-8.954,20-20S303.047,237,292.001,237
															z" />
                                                <path d="M292.001,315h-61c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h61c11.046,0,20-8.954,20-20
															C312.001,323.954,303.047,315,292.001,315z" />
                                            </svg>
                                            <?php echo $totalView['totalPages'] ?> Bài viết
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <ul class="social_links">
                                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram fa-lg"></i></a></li>
                                <li><a href="https://github.com/xyzt1402/webProject"><i class="fa fa-github fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.Block 15 -->
                <div id="section-contents">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="block-title-2">
                                    <h3> BÀI VIẾT CỦA BẠN</h3>
                                </div>
                            </div>
                            <?php foreach ($userPages as $userPages) : ?>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="block-style-12">
                                        <!-- Contents -->
                                        <div class="contents" style="border-radius: 10px; overflow: hidden">
                                            <!-- Thumbnail -->
                                            <div class="thumbnail-1" pageId="<?php echo $userPages['id'];?>">
                                                <span class="myTopic"><?PHP echo $userPages['topic']; ?></span>
                                                <span class="myDeleteTopic" onclick="topicDelete(this)"><i class="fa fa-trash fa-2x"></i></span>
                                                <span class="myEditTopic" onclick="topicEdit(this)"><i class="fa fa-pencil fa-2x"></i></span>
                                                <a>
                                                    <img alt="ảnh bìa" src="<?php echo $userPages['url'] ?>">
                                                </a>                                                   
                                            </div>
                                            <!-- /.Thumbnail -->
                                            <!-- Content Wrapper -->
                                            <div class="content-wrapper">
                                                <!-- line -->
                                                <div class="line">
                                                </div>
                                                <!-- /.line -->
                                                <!-- Title -->
                                                <div class="title">
                                                    <a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $userPages['id']; ?>">
                                                        <h2><?php 
                                                        if (strlen($userPages['title'])>40 ){
                                                            echo(substr($userPages['title'], 0, strpos($userPages['title'].' ', ' ', 40)) . '...');
                                                        }else{
                                                            echo $userPages['title'];} 
                                                            ?></h2>
                                                    </a>
                                                </div>
                                                <!-- /.Title -->
                                                <!-- Description -->
                                                <div class="desc">
                                                    <p><?php echo $userPages['label']; ?></p>
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
                        <!-- /.Block Style 3, 4, 5 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.Section Contents -->

<script>
    function topicDelete(node){
        var id = node.parentElement.getAttribute('pageId');
        var pnode = node.parentElement.parentElement.parentElement.parentElement;
        $.ajax({
            url: "http://localhost/myweb/webProject/app/model/deletePage.php",
            type: "post",
            data: {
                id: id
            } ,
            success: function (response) {
                $(pnode).animate({
                    padding: "0px",
                    'opacity':'0',
                    'font-size': "0px"
                }, 500, function() {
                        
                    $(pnode).remove();      
                });
            }
        });
    }
    function topicEdit(node){
        var id = node.parentElement.getAttribute('pageId');
        window.location.href = "http://localhost/myweb/webProject/edit.php?id="+id;
    }
</script>

<?php require('templates/footer.php'); ?>