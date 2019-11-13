<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <?php if(is_archive() ) : ?>
                    <h2 class="section-title"><?php the_archive_title(); ?> </h2>
                <?php endif ;?>
                <?php if (have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part('template-parts/content', 'post', get_post_format() );
                endwhile;
                endif;
                ?>
                <?php fashionclaire_paging_nav(); ?>
            </div>
             <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>