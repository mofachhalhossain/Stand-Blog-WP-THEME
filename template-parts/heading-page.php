<div class="heading-page header-text">
    <section class="page-heading"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/heading-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4><?php single_post_title(); ?></h4>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>