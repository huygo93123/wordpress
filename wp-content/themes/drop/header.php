<!DOCTYPE html>

<!--[if IE 9 ]><html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>

    <?php wp_head(); ?>

</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class('ct-body'); ?>>

<div class='overflow-container'>
    <a class="skip-content" href="#main"><?php _e('Skip to content','drop'); ?></a>
<header id="site-header" class="site-header" role="banner">

	<div itemscope itemtype="http://schema.org/Organization" class="title-info">
		<?php get_template_part('logo')  ?>    
	</div>
	
	<?php get_template_part( 'menu', 'primary' ); // adds the primary menu ?>

</header>
<div id="main" class="main" role="main">