<?php get_header(); ?>
<article class="entry entry-404">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="text-center">
                         <h1 class="entry-title">
                            <?php esc_html_e('Page not Found', 'fashionclaire'); ?>
                        </h1>
                        <p>
                            <?php esc_html_e('It looks like the page you are looking for is not exist. Perhaps try searching?', 'fashionclaire'); ?>
                         </p>
                            <?php get_search_form();?>
                    
                            <h2>
                                <?php esc_html_e("Maybe you are interested in", 'fashionclaire'); ?>
                            </h2>
                    </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php $nofound = new WP_Query(
            array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'post_status'    =>  'publish',
        )); ?>
        <?php if ($nofound->have_posts()) : ?>
            <div class="row">
                <?php while ($nofound->have_posts()) : $nofound->the_post(); ?>
                <div class="col-sm-4 col-md-4">
                    <div class="content-404">
                        <?php get_template_part( 'template-parts/content', 'post' ); ?>
                    </div> 
                </div>
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
	</div>
</article>
<?php get_footer(); ?>