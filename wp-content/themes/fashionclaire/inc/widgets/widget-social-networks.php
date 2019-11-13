<?php 
if (! class_exists('Fashionclaire_Widget_Social_Networks')) :
class Fashionclaire_Widget_Social_Networks extends WP_Widget{
      
    function __construct(){
        parent::__construct (
            'fashionclaire_widget_social_networks',
            __('Fashionclaire : Social Icons', 'fashionclaire'),
            array(
                'classname'     =>  'fashioclaire_widget_social_networks',
                'description'   => __('A Widget for Social Icons ', 'fashionclaire'),
            )
        );
    }

public function widget( $args, $instance ) {

    $title          = isset( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
    $facebook       = isset( $instance[ 'facebook' ] ) ? $instance[ 'facebook' ] : '';
    $twitter        = isset( $instance[ 'twitter' ] ) ? $instance[ 'twitter' ] : '';
    $linkedin       = isset( $instance[ 'linkedin' ] ) ? $instance[ 'linkedin' ] : '';
    $g_plus         = isset( $instance[ 'g-plus' ] ) ? $instance[ 'g-plus' ] : '';
    $instagram      = isset( $instance[ 'instagram' ] ) ? $instance[ 'instagram' ] : '';
    $vine           = isset( $instance[ 'vine' ] ) ? $instance[ 'vine' ] : '';
    $github         = isset( $instance[ 'github' ] ) ? $instance[ 'github' ] : '';
    $gitlab         = isset( $instance[ 'gitlab' ] ) ? $instance[ 'gitlab' ] : '';
    $stackoverflow  = isset( $instance[ 'stackoverflow' ] ) ? $instance[ 'stackoverflow' ] : '';
    $xing           = isset( $instance[ 'xing' ] ) ? $instance[ 'xing' ] : '';
    $flickr         = isset( $instance[ 'flickr' ] ) ? $instance[ 'flickr' ] : '';
    $fivehundredpx  = isset( $instance[ 'fivehundredpx' ] ) ? $instance[ 'fivehundredpx' ] : '';
    $pinterest      = isset( $instance[ 'pinterest' ] ) ? $instance[ 'pinterest' ] : '';
    $WordPress      = isset( $instance[ 'WordPress' ] ) ? $instance[ 'WordPress' ] : '';
    $youtube        = isset( $instance[ 'youtube' ] ) ? $instance[ 'youtube' ] : '';
    $vimeo          = isset( $instance[ 'vimeo' ] ) ? $instance[ 'vimeo' ] : '';
    $soundcloud     = isset( $instance[ 'soundcloud' ] ) ? $instance[ 'soundcloud' ] : '';
    $lastfm         = isset( $instance[ 'lastfm' ] ) ? $instance[ 'lastfm' ] : '';
    $spotify        = isset( $instance[ 'spotify' ] ) ? $instance[ 'spotify' ] : '';
    $telegram       = isset( $instance[ 'telegram' ] ) ? $instance[ 'telegram' ] : '';
    $foursquare     = isset( $instance[ 'foursquare' ] ) ? $instance[ 'foursquare' ] : '';
    $yelp           = isset( $instance[ 'yelp' ] ) ? $instance[ 'yelp' ] : '';
    $tripadvisor    = isset( $instance[ 'tripadvisor' ] ) ? $instance[ 'tripadvisor' ] : '';
    $tumblr         = isset( $instance[ 'tumblr' ] ) ? $instance[ 'tumblr' ] : '';
    $medium         = isset( $instance[ 'medium' ] ) ? $instance[ 'medium' ] : '';
    $slideshare     = isset( $instance[ 'slideshare' ] ) ? $instance[ 'slideshare' ] : '';
    $behance        = isset( $instance[ 'behance' ] ) ? $instance[ 'behance' ] : '';
    $dribbble       = isset( $instance[ 'dribbble' ] ) ? $instance[ 'dribbble' ] : '';
    $deviantart     = isset( $instance[ 'deviantart' ] ) ? $instance[ 'deviantart' ] : '';
    $reddit         = isset( $instance[ 'reddit' ] ) ? $instance[ 'reddit' ] : '';
    $hackernews     = isset( $instance[ 'hackernews' ] ) ? $instance[ 'hackernews' ] : '';
    $link           = isset( $instance[ 'link' ] ) ? $instance[ 'link' ] : '';
    
    ?>

    <aside>
        <h3 class="widget-title">
            <?php if( ! empty( $title ) ) { echo esc_attr( $title ); }; ?>
        </h3>

        <ul class="social-networks">
            <?php if( ! empty( $facebook ) ) { ?>
                <li><a href="<?php echo esc_url( $facebook ); ?>" target="_blank"><span class="icon-facebook" aria-hidden="true"></span><span class="screen-reader-text">Facebook</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $twitter ) ) { ?>
                <li><a href="<?php echo esc_url( $twitter ); ?>" target="_blank"><span class="icon-twitter1"></span><span class="screen-reader-text">Twitter</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $linkedin ) ) { ?>
                <li><a href="<?php echo esc_url( $linkedin ); ?>" target="_blank"><span class="icon-linkedin"></span><span class="screen-reader-text">Linkedin</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $g_plus ) ) { ?>
                <li><a href="<?php echo esc_url( $g_plus ); ?>" target="_blank"><span class="icon-google-plus"></span><span class="screen-reader-text">Google Plus</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $instagram ) ) { ?>
                <li><a href="<?php echo esc_url( $instagram ); ?>" target="_blank"><span class="icon-instagram"></span><span class="screen-reader-text">Instagram</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $vine ) ) { ?>
                <li><a href="<?php echo esc_url( $vine ); ?>" target="_blank"><span class="icon-vine1"></span><span class="screen-reader-text">Vine</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $github ) ) { ?>
                <li><a href="<?php echo esc_url( $github ); ?>" target="_blank"><span class="icon-github1"></span><span class="screen-reader-text">Github</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $gitlab ) ) { ?>
                <li><a href="<?php echo esc_url( $gitlab ); ?>" target="_blank"><span class="icon-gitlab"></span><span class="screen-reader-text">Gitlab</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $stackoverflow ) ) { ?>
                <li><a href="<?php echo esc_url( $stackoverflow ); ?>" target="_blank"><span class="icon-stack-overflow"></span><span class="screen-reader-text">Stack Overflow</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $xing ) ) { ?>
                <li><a href="<?php echo esc_url( $xing ); ?>" target="_blank"><span class="icon-xing1"></span><span class="screen-reader-text">Xing</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $flickr ) ) { ?>
                <li><a href="<?php echo esc_url( $flickr ); ?>" target="_blank"><span class="icon-flickr"></span></span><span class="screen-reader-text">Flickr</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $fivehundredpx ) ) { ?>
                <li><a href="<?php echo esc_url( $fivehundredpx ); ?>" target="_blank"><span class="icon-500px1"></span><span class="screen-reader-text">500px</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $pinterest ) ) { ?>
                <li><a href="<?php echo esc_url( $pinterest ); ?>" target="_blank"><span class="icon-pinterest-p"></span><span class="screen-reader-text">Pinterest</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $WordPress ) ) { ?>
                <li><a href="<?php echo esc_url( $WordPress ); ?>" target="_blank"><span class="icon-wordpress1"></span><span class="screen-reader-text">WordPress</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $youtube ) ) { ?>
                <li><a href="<?php echo esc_url( $youtube ); ?>" target="_blank"><span class="icon-youtube1"></span><span class="screen-reader-text">Youtube</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $vimeo ) ) { ?>
                <li><a href="<?php echo esc_url( $vimeo ); ?>" target="_blank"><span class="icon-vimeo"></span><span class="screen-reader-text">Vimeo</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $soundcloud ) ) { ?>
                <li><a href="<?php echo esc_url( $soundcloud ); ?>" target="_blank"><span class="icon-soundcloud"></span><span class="screen-reader-text">SoundCloud</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $lastfm ) ) { ?>
                <li><a href="<?php echo esc_url( $lastfm ); ?>" target="_blank"><span class="icon-lastfm"></span><span class="screen-reader-text">Lastfm</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $spotify ) ) { ?>
                <li><a href="<?php echo esc_url( $spotify ); ?>" target="_blank"><span class="icon-spotify1"></span><span class="screen-reader-text">Spotify</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $telegram ) ) { ?>
                <li><a href="<?php echo esc_url( $telegram ); ?>" target="_blank"><span class="icon-telegram1"></span><span class="screen-reader-text">Telegram</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $foursquare ) ) { ?>
                <li><a href="<?php echo esc_url( $foursquare ); ?>" target="_blank"><span class="icon-foursquare1"></span><span class="screen-reader-text">Foursquare</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $yelp ) ) { ?>
                <li><a href="<?php echo esc_url( $yelp ); ?>" target="_blank"><span class="icon-yelp1"><span class="screen-reader-text">Yelp</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $tripadvisor ) ) { ?>
                <li><a href="<?php echo esc_url( $tripadvisor ); ?>" target="_blank"><span class="icon-tripadvisor"><span class="screen-reader-text">Tripadvisor</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $tumblr ) ) { ?>
                <li><a href="<?php echo esc_url( $tumblr ); ?>" target="_blank"><span class="icon-tumblr"><span class="screen-reader-text">Tumblr</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $medium ) ) { ?>
                <li><a href="<?php echo esc_url( $medium ); ?>" target="_blank"><span class="icon-medium"><span class="screen-reader-text">Medium</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $slideshare ) ) { ?>
                <li><a href="<?php echo esc_url( $slideshare ); ?>" target="_blank"><span class="icon-slideshare"><span class="screen-reader-text">Slideshare</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $behance ) ) { ?>
                <li><a href="<?php echo esc_url( $behance ); ?>" target="_blank"><span class="icon-behance"><span class="screen-reader-text">Behance</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $dribbble ) ) { ?>
                <li><a href="<?php echo esc_url( $dribbble ); ?>" target="_blank"><span class="icon-dribbble1"><span class="screen-reader-text">Dribbble</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $deviantart ) ) { ?>
                <li><a href="<?php echo esc_url( $deviantart ); ?>" target="_blank"><span class="icon-deviantart1"><span class="screen-reader-text">Deviantart</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $reddit ) ) { ?>
                <li><a href="<?php echo esc_url( $reddit ); ?>" target="_blank"><span class="icon-reddit-alien"><span class="screen-reader-text">Reddit</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $hackernews ) ) { ?>
                <li><a href="<?php echo esc_url( $hackernews ); ?>" target="_blank"><span class="icon-hacker-news"><span class="screen-reader-text">Hackernews</span></a> </li>
            <?php } ?>

            <?php if( ! empty( $link ) ) { ?>
                <li><a href="<?php echo esc_url( $link ); ?>" target="_blank"><span class="icon-link"><span class="screen-reader-text">Link</span></a> </li>
            <?php } ?>

            <div class="clearfix"></div>
        </ul>
    </aside>

    <?php
}

public function form( $instance ) {

    $instance = wp_parse_args(
        (array) $instance, array(
            'title'             => '',
            'facebook'          => '',
            'twitter'           => '',
            'linkedin'          => '',   
            'g-plus'            => '',
            'instagram'         => '',
            'vine'              => '',
            'github'            => '',
            'gitlab'            => '',
            'stackoverflow'     => '',
            'xing'              => '',
            'flickr'            => '',
            'fivehundredpx'     => '',
            'pinterest'         => '',
            'WordPress'         => '',
            'youtube'           => '',
            'vimeo'             => '',
            'soundcloud'        => '',
            'lastfm'            => '',
            'spotify'           => '',
            'telegram'          => '',
            'foursquare'        => '',
            'yelp'              => '',
            'tripadvisor'       => '',
            'tumblr'            => '',
            'medium'            => '',
            'slideshare'        => '',
            'behance'           => '',
            'dribbble'          => '',
            'deviantart'        => '',
            'reddit'            => '',
            'hackernews'        => '',
            'link'              => '',        )
    );

    ?>
        <h3>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" placeholder="<?php _e( 'Title', 'fashionclaire' ); ?>">
       </h3>

       <p>
            <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo esc_attr( $instance['facebook'] ); ?>" placeholder="<?php _e( 'https://www.facebook.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e( 'Twitter', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo esc_attr( $instance['twitter'] ); ?>" placeholder="<?php _e( 'https://twitter.com/', 'fashionclaire' ); ?>" >
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e( 'Linkedin', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo esc_attr( $instance['linkedin'] ); ?>" placeholder="<?php _e( 'https://linkedin.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'g-plus' ); ?>"><?php _e( 'G plus', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'g-plus' ); ?>" name="<?php echo $this->get_field_name( 'g-plus' ); ?>" value="<?php echo esc_attr( $instance['g-plus'] ); ?>" placeholder="<?php _e( 'https://plus.google.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e( 'Instagram', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo esc_attr( $instance['instagram'] ); ?>" placeholder="<?php _e( 'https://instagram.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'vine' ); ?>"><?php _e( 'Vine', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'vine' ); ?>" name="<?php echo $this->get_field_name( 'vine' ); ?>" value="<?php echo esc_attr( $instance['vine'] ); ?>" placeholder="<?php _e( 'https://vine.co/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'github' ); ?>"><?php _e( 'Github', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" value="<?php echo esc_attr( $instance['github'] ); ?>" placeholder="<?php _e( 'https://github.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'gitlab' ); ?>"><?php _e( 'Gitlab', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'gitlab' ); ?>" name="<?php echo $this->get_field_name( 'gitlab' ); ?>" value="<?php echo esc_attr( $instance['gitlab'] ); ?>" placeholder="<?php _e( 'https://gitlab.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'stackoverflow' ); ?>"><?php _e( 'Stack Overflow', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'stackoverflow' ); ?>" name="<?php echo $this->get_field_name( 'stackoverflow' ); ?>" value="<?php echo esc_attr( $instance['stackoverflow'] ); ?>" placeholder="<?php _e( 'https://stackoverflow.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'xing' ); ?>"><?php _e( 'Xing', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'xing' ); ?>" name="<?php echo $this->get_field_name( 'xing' ); ?>" value="<?php echo esc_attr( $instance['xing'] ); ?>" placeholder="<?php _e( 'https://xing.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'flickr' ); ?>"><?php _e( 'Flickr', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'flickr' ); ?>" name="<?php echo $this->get_field_name( 'flickr' ); ?>" value="<?php echo esc_attr( $instance['flickr'] ); ?>" placeholder="<?php _e( 'https://www.flickr.com/', 'fashionclaire' ); ?>">
        </p>

         <p>
            <label for="<?php echo $this->get_field_id( 'fivehundredpx' ); ?>"><?php _e( '500px', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'fivehundredpx' ); ?>" name="<?php echo $this->get_field_name( 'fivehundredpx' ); ?>" value="<?php echo esc_attr( $instance['fivehundredpx'] ); ?>" placeholder="<?php _e( 'https://web.500px.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'pinterest' ); ?>"><?php _e( 'Pinterest', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" value="<?php echo esc_attr( $instance['pinterest'] ); ?>" placeholder="<?php _e( 'https://www.pinterest.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'WordPress' ); ?>"><?php _e( 'WordPress', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'WordPress' ); ?>" name="<?php echo $this->get_field_name( 'WordPress' ); ?>" value="<?php echo esc_attr( $instance['WordPress'] ); ?>" placeholder="<?php _e( 'https://wordpress.org/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e( 'YouTube', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo esc_attr( $instance['youtube'] ); ?>" placeholder="<?php _e( 'https://www.youtube.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'vimeo' ); ?>"><?php _e( 'Vimeo', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text"id="<?php echo $this->get_field_id( 'vimeo' ); ?>" name="<?php echo $this->get_field_name( 'vimeo' ); ?>" value="<?php echo esc_attr( $instance['vimeo'] ); ?>" placeholder="<?php _e( 'https://vimeo.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'soundcloud' ); ?>"><?php _e( 'Soundcloud', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'soundcloud' ); ?>" name="<?php echo $this->get_field_name( 'soundcloud' ); ?>" value="<?php echo esc_attr( $instance['soundcloud'] ); ?>" placeholder="<?php _e( 'https://soundcloud.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'lastfm' ); ?>"><?php _e( 'Lastfm', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'lastfm' ); ?>" name="<?php echo $this->get_field_name( 'lastfm' ); ?>" value="<?php echo esc_attr( $instance['lastfm'] ); ?>" placeholder="<?php _e( 'https://lastfm.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'spotify' ); ?>"><?php _e( 'Spotify', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'spotify' ); ?>" name="<?php echo $this->get_field_name( 'spotify' ); ?>" value="<?php echo esc_attr( $instance['spotify'] ); ?>" placeholder="<?php _e( 'https://spotify.com', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'telegram' ); ?>"><?php _e( 'Telegram', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'telegram' ); ?>" name="<?php echo $this->get_field_name( 'telegram' ); ?>" value="<?php echo esc_attr( $instance['telegram'] ); ?>" placeholder="<?php _e( 'https://telegram.org/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'foursquare' ); ?>"><?php _e( 'Foursquare', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'foursquare' ); ?>" name="<?php echo $this->get_field_name( 'foursquare' ); ?>" value="<?php echo esc_attr( $instance['foursquare'] ); ?>" placeholder="<?php _e( 'https://foursquare.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'yelp' ); ?>"><?php _e( 'Yelp', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'yelp' ); ?>" name="<?php echo $this->get_field_name( 'yelp' ); ?>" value="<?php echo esc_attr( $instance['yelp'] ); ?>" placeholder="<?php _e( 'https://yelp.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'tripadvisor' ); ?>"><?php _e( 'Tripadvisor', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'tripadvisor' ); ?>" name="<?php echo $this->get_field_name( 'tripadvisor' ); ?>" value="<?php echo esc_attr( $instance['tripadvisor'] ); ?>" placeholder="<?php _e( 'https://tripadvisor.com/', 'fashionclaire' ); ?>">
        </p>

         <p>
            <label for="<?php echo $this->get_field_id( 'tumblr' ); ?>"><?php _e( 'Tumblr', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" value="<?php echo esc_attr( $instance['tumblr'] ); ?>" placeholder="<?php _e( 'https://tumblr.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'medium' ); ?>"><?php _e( 'Medium', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'medium' ); ?>" name="<?php echo $this->get_field_name( 'medium' ); ?>" value="<?php echo esc_attr( $instance['medium'] ); ?>" placeholder="<?php _e( 'https://medium.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'slideshare' ); ?>"><?php _e( 'Slideshare', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'slideshare' ); ?>" name="<?php echo $this->get_field_name( 'slideshare' ); ?>" value="<?php echo esc_attr( $instance['slideshare'] ); ?>" placeholder="<?php _e( 'https://slideshare.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'behance' ); ?>"><?php _e( 'Behance', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'behance' ); ?>" name="<?php echo $this->get_field_name( 'behance' ); ?>" value="<?php echo esc_attr( $instance['behance'] ); ?>" placeholder="<?php _e( 'https://www.behance.net/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'dribbble' ); ?>"><?php _e( 'Dribbble', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'dribbble' ); ?>" name="<?php echo $this->get_field_name( 'dribbble' ); ?>" value="<?php echo esc_attr( $instance['dribbble'] ); ?>" placeholder="<?php _e( 'https://dribbble.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'deviantart' ); ?>"><?php _e( 'Deviantart', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'deviantart' ); ?>" name="<?php echo $this->get_field_name( 'deviantart' ); ?>" value="<?php echo esc_attr( $instance['deviantart'] ); ?>" placeholder="<?php _e( 'https://deviantart.com/', 'fashionclaire' ); ?>">
        </p>


        <p>
            <label for="<?php echo $this->get_field_id( 'reddit' ); ?>"><?php _e( 'Reddit', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'reddit' ); ?>" name="<?php echo $this->get_field_name( 'reddit' ); ?>" value="<?php echo esc_attr( $instance['reddit'] ); ?>" placeholder="<?php _e( 'https://reddit.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'hackernews' ); ?>"><?php _e( 'Hackernews', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'hackernews' ); ?>" name="<?php echo $this->get_field_name( 'hackernews' ); ?>" value="<?php echo esc_attr( $instance['hackernews'] ); ?>" placeholder="<?php _e( 'https://news.ycombinator.com/', 'fashionclaire' ); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link', 'fashionclaire' ); ?></label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo esc_attr( $instance['link'] ); ?>" placeholder="<?php _e( 'https://link.com/', 'fashionclaire' ); ?>">
        </p>

    <?php
}

public function update( $new_instance, $old_instance ) {

    $instance                       = $old_instance;
    $instance[ 'title' ]            = sanitize_text_field( $new_instance[ 'title' ] );
    $instance[ 'facebook' ]         = esc_url_raw( $new_instance[ 'facebook' ] );
    $instance[ 'twitter' ]          = esc_url_raw( $new_instance[ 'twitter' ] );
    $instance[ 'linkedin' ]         = esc_url_raw( $new_instance[ 'linkedin' ] );
    $instance[ 'g-plus' ]           = esc_url_raw( $new_instance[ 'g-plus' ] );
    $instance[ 'instagram' ]        = esc_url_raw( $new_instance[ 'instagram' ] );
    $instance[ 'vine' ]             = esc_url_raw( $new_instance[ 'vine' ] );
    $instance[ 'github' ]           = esc_url_raw( $new_instance[ 'github' ] );
    $instance[ 'gitlab' ]           = esc_url_raw( $new_instance[ 'gitlab' ] );
    $instance[ 'stackoverflow' ]    = esc_url_raw( $new_instance[ 'stackoverflow' ] );
    $instance[ 'xing' ]             = esc_url_raw( $new_instance[ 'xing' ] );
    $instance[ 'flickr' ]           = esc_url_raw( $new_instance[ 'flickr' ] );
    $instance[ 'fivehundredpx' ]    = esc_url_raw( $new_instance[ 'fivehundredpx' ] );
    $instance[ 'pinterest' ]        = esc_url_raw( $new_instance[ 'pinterest' ] );
    $instance[ 'WordPress' ]        = esc_url_raw( $new_instance[ 'WordPress' ] );
    $instance[ 'youtube' ]          = esc_url_raw( $new_instance[ 'youtube' ] );
    $instance[ 'vimeo' ]            = esc_url_raw( $new_instance[ 'vimeo' ] );
    $instance[ 'soundcloud' ]       = esc_url_raw( $new_instance[ 'soundcloud' ] );
    $instance[ 'lastfm' ]           = esc_url_raw( $new_instance[ 'lastfm' ] );
    $instance[ 'spotify' ]          = esc_url_raw( $new_instance[ 'spotify' ] );
    $instance[ 'telegram' ]         = esc_url_raw( $new_instance[ 'telegram' ] );
    $instance[ 'foursquare' ]       = esc_url_raw( $new_instance[ 'foursquare' ] );
    $instance[ 'yelp' ]             = esc_url_raw( $new_instance[ 'yelp' ] );
    $instance[ 'tripadvisor' ]      = esc_url_raw( $new_instance[ 'tripadvisor' ] );
    $instance[ 'tumblr' ]           = esc_url_raw( $new_instance[ 'tumblr' ] );
    $instance[ 'medium' ]           = esc_url_raw( $new_instance[ 'medium' ] );
    $instance[ 'slideshare' ]      = esc_url_raw( $new_instance[ 'slideshare' ] );
    $instance[ 'behance' ]          = esc_url_raw( $new_instance[ 'behance' ] );
    $instance[ 'dribbble' ]         = esc_url_raw( $new_instance[ 'dribbble' ] );
    $instance[ 'deviantart' ]       = esc_url_raw( $new_instance[ 'deviantart' ] );
    $instance[ 'reddit' ]           = esc_url_raw( $new_instance[ 'reddit' ] );
    $instance[ 'hackernews' ]       = esc_url_raw( $new_instance[ 'hackernews' ] );
    $instance[ 'link' ]             = esc_url_raw( $new_instance[ 'link' ] );
    
    return $instance;

}

}
register_widget('Fashionclaire_Widget_Social_Networks');
endif;