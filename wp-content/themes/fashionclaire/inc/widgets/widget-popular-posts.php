<?php
if (! class_exists('Fashionclaire_Widget_Popular_Posts')) :
    class Fashionclaire_Widget_Popular_Posts extends WP_Widget {
        function __construct(){
            $opts = array(
            'classname' => 'fashionclaire_widget_popular_posts',
            'description' => esc_html__('Displays a number of popular posts from specific category.', 'fashionclaire')

            );
            parent::__construct('fashionclaire_widget_popular_posts', esc_html__('Fashionclaire - Popular Posts', 'fashionclaire'), $opts);
        }

        function widget ($args, $instance){
            $title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
            echo $args['before_widget'];

            if(!empty($title)){
                echo $args['before_title'] . esc_html($title) . $args['after_title'];
            }

            $cat_id     =  !empty ($instance['cat']) ? $instance['cat'] : '';
            $count      =  !empty ($instance['count']) ? $instance['count'] : '';


            $query_args  =   array(
                'post_type'             => 'post',
                'post_status'           => 'publish',
                'cat'                   =>  absint($cat_id),
                'orderby'               =>  'comment_count',
                'posts_per_page'        =>  absint($count),
                'ignore_sticky_posts'   =>  true
            );


            $query_popular = new WP_Query($query_args);

            if ($query_popular->have_posts()) :
                while ($query_popular->have_posts()) :
                    $query_popular->the_post();
                    get_template_part('template-parts/item-widget', 'fashionclaire', get_post_type());
            endwhile;
            wp_reset_postdata();
        endif;
        echo $args['after_widget'];

            }
            
        function update ($new_instance, $old_intance) {
            $instance = $old_intance;

            $instance['title']    =   sanitize_text_field($new_instance['title']);
            $instance['cat']      =   absint($new_instance['cat']);
            $instance['count']    =   absint($new_instance['count']);

            return $instance;
        }

        function form($instance){
            $instance   =   wp_parse_args((array) $instance, array('cat' => ''));
            $instance   =   wp_parse_args((array) $instance, array('title' => ''));           
            $instance   =   wp_parse_args((array) $instance, array('count'  => ''));
            ?>

            <p><label for="<?php echo esc_attr($this->get_field_id('title') ); ?>"><?php esc_html_e('Title:', 'fashionclaire'); ?></label>
                <input id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr($instance['title']); ?>" class="widefat"/>
            </p>

            <p><label for="<?php echo esc_attr($this->get_field_id('cat') ); ?>"><?php esc_html_e('Category to display the popular posts.', 'fashionclaire') ;?></label>
                <?php $cat_args = array(
                    'taxonomy'          =>  'category',
                    'hide_empty'        =>  0,
                    'show_option_all'   =>  '',
                    'show_option_value' =>  '',
                    'option_none_value' =>  '',
                    'show_count'        =>  1,
                    'echo'              =>  1,
                    'selected'          =>  absint($instance['cat']),
                    'hierarchical'      =>  1,
                    'name'              =>  $this->get_field_name('cat'),
                    'id'                =>  $this->get_field_id('cat'),
                    'class'             =>  'widefat', 
                ); 
                wp_dropdown_categories($cat_args);
                ?>
        </p>
               
                <p><label for="<?php echo esc_attr($this->get_field_id('count') ); ?>"><?php esc_html_e('Number of posts to show:', 'fashionclaire'); ?></label>
                    <input id="<?php echo esc_attr($this->get_field_id('count')); ?>" name="<?php echo esc_attr($this->get_field_name('count')); ?>" type="number" min="1" step="1" value="<?php echo esc_attr($instance['count']); ?>" class="widefat"/>
                </p>
                    
              
                
                <?php
                }
    }
    register_widget('Fashionclaire_Widget_Popular_Posts');
endif;