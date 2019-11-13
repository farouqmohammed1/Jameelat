<?php if((fashionclaire_get_option('show_single_breadcrumb'))==1) :  ?> 
            <div class="breadcrumb">
                <?php fashionclaire_breadcrumb_trail();?>
            </div>
        <?php endif; ?>

    <?php while (have_posts() ) : the_post(); ?>
        <article id="entry-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
                <figure class="entry-thumb">
                    <?php the_post_thumbnail( 'fashionclaire-large', [ 'alt' => esc_html ( get_the_title() ) ] ); ?>
                </figure>
            <?php endif;?>

            <div class="entry-meta">
                <?php if((fashionclaire_get_option('show_single_category'))==1) :  ?>
                    <div class="entry-categories">
				         <?php the_category(' , '); ?>
                    </div>
                
                <?php endif;?> 

                <?php if((fashionclaire_get_option('show_single_date'))==1) :  ?>
                    <div class="entry-time">
                        <?php fashionclaire_posted_on();?>
                    </div>
                <?php endif;?> 

                <?php if((fashionclaire_get_option('show_single_comments'))==1) :  ?>
                    <span class="icon-comment" aria-hidden="true"></span>
                        <a href="<?php echo esc_url( get_comments_link() ); ?>" class="no-entry-comments">
                    <?php comments_number(); ?> 
                </a>
                 <?php endif;?>   
            </div>

            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            
            <?php if((fashionclaire_get_option('show_single_tags'))==1) :  ?>
                        <div class="entry-tags" itemprop="keywords">
                           <?php fashionclaire_post_tag();?>
                        </div>
            <?php endif; ?>
             
            <?php if((fashionclaire_get_option('show_single_author'))==1) :  ?>
                <?php get_template_part ('template-parts/content', 'author', get_post_type() ); ?>
            <?php endif; ?>

            <?php if((fashionclaire_get_option('show_single_pagination'))==1) :  ?>
                <?php
                $next_post = get_next_post();
                $prev_post = get_previous_post();
                if ( $next_post || $prev_post ) :
                    $pagination_classes = '';
                        if ( ! $next_post ) {
                            $pagination_classes = ' only-one only-prev';
                        } elseif ( ! $prev_post ) {
                            $pagination_classes = ' only-one only-next';
                        }
                        ?>
                    <nav class="pagination-single section-inner<?php echo esc_attr( $pagination_classes ); ?>">
                        <?php if ( $prev_post ) : ?>
                            <a class="previous-post" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
                                <div class="arrow">&larr;</div>
                                <div class="title"><div class="title-inner"><?php echo wp_kses_post( get_the_title( $prev_post->ID ) ); ?></div></div>
                            </a>
                        <?php endif; ?>
                        <?php if ( $next_post ) : ?>
                            <a class="next-post" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
                                <div class="arrow">&rarr;</div>
                                <div class="title"><div class="title-inner"><?php echo wp_kses_post( get_the_title( $next_post->ID ) ); ?></div></div>
                            </a>
                            <?php endif; ?>
                    </nav>
                    <?php
                endif;
                ?>
            <?php endif; ?>

            <?php if((fashionclaire_get_option('show_related_content'))==1) :  ?>
                <?php get_template_part ('template-parts/content', 'related', get_post_type() ); ?>                
            <?php endif; ?>  
          
            <div class="entry-comments">
                <?php 
                // If comments are open or we have at least one comment, load up the comment template
                if (comments_open() || '0' != get_comments_number())
                comments_template(); ?>    
            </div> 
    </article>
<?php endwhile; ?>