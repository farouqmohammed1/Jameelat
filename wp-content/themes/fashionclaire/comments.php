<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *

 *
 * @package fashionclaire
 * @since fashionclaire 1.2.5
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() || comments_open() ) : ?>
    <div id="comments" class="comments-area clearfix">
        <?php endif; ?>
        <?php if ( have_comments() ) : ?>
            <div class="post-comments group">
            <h2 class="comments-title">
                <?php
                $comment_count = get_comments_number();
                if ( 1 === $comment_count ) {
                    printf(
                        /* translators: 1: title. */
                        esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'fashionclaire' ),
                        '' .  esc_html (get_the_title()) . ''
                    );
                } else {
                    printf( // WPCS: XSS OK.
                        /* translators: 1: comment count number, 2: title. */
                        esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'fashionclaire' ) ),
                        esc_attr (number_format_i18n( $comment_count )),
                        '' . esc_html (get_the_title()) . ''
                    );
                }
                ?>
            </h2><!-- .comments-title -->

            <?php the_comments_navigation(); ?>

                    <ol id="comment-list">
                        <?php 
                            wp_list_comments( array (
                                'style'         => 'ol',
                                'type'          => 'comment',
                                'avatar_size'   => 110
                            ) ) ;
                            wp_list_comments (array (
                                'style'         => 'ol',
                                'short_ping'    => true,
                                'type'          => 'pings'   
                            ) ) ;
                        ?>
                    </ol>

                    <?php the_comments_navigation(); ?>
            </div>
        <?php endif; ?>

        <?php if (comments_open() ): ?>
            <section id="respond">
                <div id="form-wrapper" class="group">
                        <?php comment_form(); ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if ( have_comments() || comments_open() ): ?>
    </div>
 <?php endif; ?>
