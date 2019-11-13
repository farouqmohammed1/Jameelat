<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php if (have_posts()) : ?>
                <h1 class="page-title"><?php printf(esc_attr('Search Results for: %s', 'fashionclaire'), '<span>' . get_search_query() . '</span>');?></h1>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content-post', get_post_type() ); ?>
            <?php endwhile; ?>
            <?php else : ?>
            <?php get_template_part('template-parts/no-results', get_post_type() ); ?>
             <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>