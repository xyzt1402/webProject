<?php require('templates/header.php'); ?>

<!-- Section Contents -->
<div id="section-contents">
    <div class="container">
        <div class="row">
                <?php foreach ($topicPages as $topicPage) : ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="block-style-12">
                            <!-- Contents -->
                            <div class="contents">
                                <!-- Thumbnail -->
                                <div class="thumbnail-1">
                                    <span class="topicView"><?PHP echo $topic; ?></span>
                                    <a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $topicPage['id']; ?>">
                                        <img src="<?php echo $topicPage['url'] ?>">
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
                                        <a href="<?php echo BASE_URL; ?>/page.php?id=<?php echo $topicPage['id']; ?>">
                                            <h2><?php echo $topicPage['title']; ?></h2>
                                        </a>
                                    </div>
                                    <!-- /.Title -->
                                    <!-- Description -->
                                    <div class="desc">
                                        <p><?php echo $topicPage['label']; ?></p>
                                    </div>
                                    <!-- /.Description -->
                                </div>
                                <!-- Content Wrapper -->
                            </div>
                            <!-- /.Contents -->
                        </div>
                </div>
                <?php endforeach; ?>
                <div class="ts-space25"></div>
            </div>
        </div>
    </div>
</div>
<!-- /.Section Contents -->

<?php require('templates/footer.php'); ?>