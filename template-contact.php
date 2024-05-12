<?php get_header(); 
/* Template Name: Contact Template */
?>

<body <?php body_class(); ?>>

    <header class="site-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                      } else {
                        echo '<h2>Stand Blog<em>.</em></h2>';
                      }
                  ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php if( has_nav_menu('blog_main_menu') ): ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'blog_main_menu', 'menu_class' => 'navbar-nav ml-auto' ) ); ?>
                    <?php else: ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog Entries</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="post-details.html">Post Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>

    <!-- Banner Starts Here -->
    <?php echo get_template_part( 'template-parts/heading','page'); ?>
    <!-- Banner Ends Here -->

<section class="contact-us">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="down-contact">
            <div class="row">
            <div class="col-lg-8">
                <div class="sidebar-item contact-form">
                <div class="sidebar-heading">
                    <h2>Send us a message</h2>
                </div>
                <div class="content">
                    <?php the_content();?>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-item contact-information">
                <?php echo get_template_part( 'template-parts/contact','sidebar')?>
                </div>
            </div>
            </div>
        </div>
        </div>
        
        <div class="col-lg-12">
        <div id="map">
            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
    </div>
    </div>
</section>

</body>

<?php get_footer(); ?>