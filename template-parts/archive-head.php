<div class="heading-page header-text">
    <section class="page-heading"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/heading-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <?php
                            if ( is_archive() ):
                        ?>
                        <h2><?php the_archive_title(); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>