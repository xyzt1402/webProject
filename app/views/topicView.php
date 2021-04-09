<?php require('templates/header.php'); ?>

<!-- Section Contents -->
<div id="section-contents">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row">


                <?php foreach($topicPages as $topicPage):?>
                    <div class="col-12 col-lg-6">
                        <div class="block-style-12">
                            <!-- Contents -->
                            <div class="contents">
                                <!-- Thumbnail -->
                                <div class="thumbnail-1">
                                    <span class="bg-purple"><?PHP echo $topic;?></span>
                                    <a href="#">
                                        <img src="<?php echo $topicPage['url']?>">
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
                                        <a href="#">
                                            <h2><?php echo $topicPage['title'];?></h2>
                                        </a>
                                    </div>
                                    <!-- /.Title -->
                                    <!-- Description -->
                                    <div class="desc">
                                        <p><?php echo $topicPage['label'];?></p>
                                    </div>
                                    <!-- /.Description -->
                                </div>
                                <!-- Content Wrapper -->
                            </div>
                            <!-- /.Contents -->
                        </div>
                    </div>    
                    <?php endforeach;?>                    
                    <div class="ts-space20"></div>
                    <!-- Pagination -->
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <span class="page-link">Prev</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">
                                    02
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">18</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.Pagination -->
                    <div class="ts-space25"></div>
                </div>
            </div>
            <!-- Block Style 3, 4, 5 -->
            <div class="col-12 col-lg-4">
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
            </div>
            <!-- /.Block Style 3, 4, 5 -->
        </div>
    </div>
</div>
<!-- /.Section Contents -->

<?php require('templates/footer.php'); ?>