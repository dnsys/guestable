<section class="blog-detail-banner-section" style="background-color: #2a9cd7;">
    <div class="container color-banner-content">
        <h1><?php the_title() ?></h1>
    </div>
</section>
<section class="blog-content-section">
    <div class="container blog-content-section-container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <div class="previous-button">
                    <a class="btn btn-link btn-default go-back-button" role="button">Previous Page</a>
                </div>
                <!-- previous-button -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="content-box">
                    <div class="inner-content-section">
                        <div class="header-with-list">
                            <?php the_content() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php wpb_set_post_views(get_the_ID()); ?>