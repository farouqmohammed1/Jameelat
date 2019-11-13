<article class="entry-item-related">
    <?php if (has_post_thumbnail() ):?>
        <figure class="entry-item-thumb">
            <a href="<?php the_permalink(); ?>"tabindex="-1" aria-hidden="true">
                <?php the_post_thumbnail( 'fashionclaire-xsmall', [ 'alt' => esc_html ( get_the_title() ) ] ); ?>
            </a>
        </figure>
    <?php endif;?>
    <?php if((fashionclaire_get_option('show_related_date'))==1) :  ?>
        <div class="entry-time-related">
            <?php fashionclaire_posted_on(); ?>
        </div>
    <?php endif;?>
    <?php the_title( '<h1 class="entry-item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
</article>