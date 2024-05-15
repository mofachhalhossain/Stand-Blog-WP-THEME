<?php 

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'excerpt' => true,
);
$query = new WP_Query( $args );
?>

<?php if( $query->have_posts() ):
while ( $query->have_posts() ) : $query->the_post();
?>
<article>
    <div class="blog-post">
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
                    <div class="col-6">
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
                    <div class="col-6">
                        <ul class="post-share">
                            <li><i class="fa fa-share-alt"></i></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<?php endwhile; 
wp_reset_postdata();
?>
<?php endif; ?>




