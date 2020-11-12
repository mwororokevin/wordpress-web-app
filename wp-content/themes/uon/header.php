d<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uon
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<div id="content" >
    <div id="top_info">
        <div id="logo">
			<?php the_custom_logo(); ?>
        </div>
        <div class="title">
            <h1><a href="" title="University of Nairobi Home Page">
                    University of Nairobi </a></h1>
            <p id="slogan" title="A world-class university committed to scholarly excellence">A world-class university
                committed to scholarly excellence</p>
        </div>
    </div>
		<?php 
			wp_nav_menu(
				array(
					'theme_location'	=>	'menu-1',
					'menu_id'			=>	'tablist'
				)
			)
		?>
