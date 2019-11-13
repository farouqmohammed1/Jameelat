</main>
    <footer id="colophon" class="site-footer" role="contentinfo"> 
        <div class="container">
            <div class="row">
                <?php
                    /**
                    *
                    * @hooked fashionclaire_footer_start
                    */
                    do_action( 'fashionclaire_action_before_footer' );
                    /**
                     * Hooked - fashionclaire_footer_top_section -10
                    * Hooked - fashionclaire_footer_section -20
                    */
                    do_action( 'fashionclaire_action_footer' );
                    /**
                    * Hooked - fashionclaire_footer_end. 
                    */
                    do_action( 'fashionclaire_action_after_footer' );
                ?>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>