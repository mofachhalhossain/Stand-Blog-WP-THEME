<?php get_header(); ?>
  <body <?php body_class(); ?>>


    <!-- Header -->
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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php echo get_template_part( 'template-parts/archive','head'); ?>
    <!-- Banner Ends Here -->

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/cta-bg.jpg)">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                  <?php if( have_posts() ):
                    while( have_posts() ): the_post(); ?>
                          <div class="col-lg-6 blog-post">
                            <div class="blog-thumb">
                              <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="down-content">
                              <span>
                                <?php the_category(); ?>
                              </span>
                              <a href="<?php the_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                              </a>
                              <ul class="post-info">
                                <li><?php the_author_posts_link(); ?></li>
                                <li><?php echo get_the_date(); ?></li>
                                <li><?php echo get_comments_number_text(); ?></li>
                              </ul>
                              <?php the_content(); ?>
                              <div class="post-options">
                                <div class="row">
                                  <div class="col-12">
                                    <ul class="post-tags">
                                      <li><i class="fa fa-tags"></i></li>
                                      <?php 
                                        $post_tags = get_the_tag_list( '', ', ');
                                        if( $post_tags ){
                                          echo $post_tags;
                                        }else{
                                          echo '';
                                        }
                                      ?>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    <?php endwhile; ?>
                    
                  <?php else: ?>
                    <p>No Posts Found !</p>
                  <?php endif;?>
                  </div>
                  <div class="posts-pagination">
                      <?php the_posts_pagination(); ?>
                    </div>
                <!-- <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div> -->
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <?php get_sidebar(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php get_footer(); ?>