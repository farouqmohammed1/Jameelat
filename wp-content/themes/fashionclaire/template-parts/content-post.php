<article id="entry-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
    <?php if((fashionclaire_get_option('show_archive_featured_image'))==1) :  ?>
        <?php if ( has_post_thumbnail() ) : ?>
            <figure class="entry-thumb">
                <a href="<?php the_permalink(); ?>"tabindex="-1" aria-hidden="true">
                    <?php the_post_thumbnail( 'fashionclaire-large', [ 'alt' => esc_html ( get_the_title() ) ] ); ?>
                </a>
            </figure>
        <?php endif; ?>
        <?php endif; ?>

    <?php if ( get_post_type() === 'post' ) : ?>
        <div class="entry-meta">
            <?php if((fashionclaire_get_option('show_archive_category'))==1) :  ?>
                <div class="entry-categories">
                    <?php the_category(','); ?>
                </div>
            <?php endif;?>
            <?php if((fashionclaire_get_option('show_archive_date'))==1) :  ?>
                <div class="entry-time">
                    <?php fashionclaire_posted_on();?>
                </div>
            <?php endif;?>  

            <?php if((fashionclaire_get_option('show_archive_comments'))==1) :  ?>
                <span class="icon-comment" aria-hidden="true"></span><a href="<?php echo esc_url( get_comments_link() ); ?>" class="no-entry-comments"><?php comments_number(); ?> </a>
            <?php endif;?>   
        </div>
    <?php endif;?>

    <?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
        <div class="entry-content">
            <?php if((fashionclaire_get_option('show_content'))==1) :  ?>
                    <?php the_content(); ?>
                <?php if((fashionclaire_get_option('show_continue_reading_text'))==1) :  ?>
                    <?php $continuereading = fashionclaire_get_option('continue_reading_text', __('Continue Reading', 'fashionclaire')); ?>
                    <a href="<?php the_permalink(); ?>" class="read-more">
                        <span class="screen-reader-text"> <?php the_title(); ?></span>
                        <?php echo esc_html( $continuereading, 'fashionclaire'); ?>
                    </a>
                <?php endif;?>
            <?php endif;?>   

            <?php if((fashionclaire_get_option('show_content'))==0) :  ?>
                <?php if (fashionclaire_get_option( 'excerpt_text' ) ); ?> 
                    <?php the_excerpt(); ?>
                        <?php if((fashionclaire_get_option('show_continue_reading_text'))==1) :  ?>
                        <?php $continuereading = fashionclaire_get_option('continue_reading_text', __('Continue Reading', 'fashionclaire')); ?>
                             <a href="<?php the_permalink(); ?>" class="read-more">
                                <span class="screen-reader-text"> <?php the_title(); ?></span>
                                <?php echo esc_html( $continuereading, 'fashionclaire'); ?>
                            </a>
                        <?php endif;?>
                <?php endif;?>   
        </div>
</article>
<hr>