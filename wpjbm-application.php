<?php
/**
 * Plugin Name: WPJBM Application

 * Description: This plugin adds shortcode for user application listing for WP Job Manager
 * Author: Drazen Duvnjak
 * Version: 1.0.0
 * License: GPL2
 */
 function custom_shortcode() {
global $current_user;
get_currentuserinfo();    

				
				
	$args = array( 'post_type' => 'job_application',
 'author'=>$current_user->ID	);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		the_title();
		echo '<div class="entry-content">';
		the_content();
		echo '</div>';
		
		
	endwhile;
}
add_shortcode( 'wpjbm_application', 'custom_shortcode' );