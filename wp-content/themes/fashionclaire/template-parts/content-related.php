<div class="entry-related">
        <div class="row">
            <div class="col-md-12">
                <?php if((fashionclaire_get_option('change_related_title', __( 'Related Posts', 'fashionclaire' )))): ?>
                        <h3 class="section-title"><?php echo esc_html(fashionclaire_get_option( 'change_related_title', __('Related Posts', 'fashionclaire' ))); ?> </h3>
                    <?php endif;?>
                </div>
        </div>
  
        <div class="row">
            <?php 
                $related_posts = new WP_Query (array (
                'post_type'         => 'post',
                'post_status'       =>  'publish',
                'posts_per_page'    =>  3
                ));
            ?>
            <?php  if ($related_posts->have_posts()) : ?>
                <?php while($related_posts->have_posts()):$related_posts->the_post(); ?>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <?php get_template_part ('template-parts/item', 'related', get_post_type() ); ?>
                </div>
            <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
        </div>
 </div> 