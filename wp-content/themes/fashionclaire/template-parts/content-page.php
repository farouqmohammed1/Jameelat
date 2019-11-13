<?php if((fashionclaire_get_option('show_page_breadcrumb'))==1) :  ?> 
    <div class="breadcrumb">
        <?php fashionclaire_breadcrumb_trail();?>
    </div>
    <?php endif;?>
    <?php while (have_posts() ) : the_post(); ?>
        <article id="entry-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
            <?php if((fashionclaire_get_option('show_page_featured_image'))==1) :  ?>
                <?php if ( has_post_thumbnail() ) : ?>
                    <figure class="entry-thumb">
                        <?php the_post_thumbnail( '', [ 'alt' => esc_html ( get_the_title() ) ] ); ?>
                    </figure>
                <?php endif;?>
            <?php endif;?>
                            
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>

            <div class="entry-comments">
                <?php 
                    // If comments are open or we have at least one comment, load up the comment template
                    if (comments_open() || '0' != get_comments_number())
                        comments_template(); ?>  
            </div> 
        </article>
<?php endwhile; ?>