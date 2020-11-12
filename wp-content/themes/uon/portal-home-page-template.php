<?php
/**
 * Template Name: Portal Page 
 * 
 */

get_header();
?>
    <div id="topics">
        <?php 
            wp_nav_menu(
                array( 
                    'theme_location'	=>	'menu-2',
                )
            )
        ?>
    </div>

	<?php get_template_part('template-parts/login-section'); ?>
    
<?php
get_footer();