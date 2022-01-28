<?php 
	/*
		This is the template for the header
		@pakage hablutheme

	*/
?>

﻿<html <?php language_attributes(); ?>>
	
<head>
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name-"description" content=" <?php bloginfo( 'description' ); ?> ">
	<meta name="Author" content="Hablu Theme Development Limited">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href=" <?php bloginfo( 'pingback_url' ); ?> ">
	<?php endif; ?>

	<?php wp_head(); ?>

	<?php 
		$custom_css = esc_attr( get_option('hablu_custom_css') );
		if( !empty( $custom_css ) ) :
			echo '<style>' . $custom_css . '</style>';
		endif;
	?>
</head>

	<body <?php body_class(); ?>>
		<div class="empty-bar">
		</div>
		<nav id="navigation">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="block">
	                        <nav class="navbar navbar-default navbar-fixed-top">
	                          <div class="container-fluid">
	                            <div class="navbar-header">
	                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                                <span class="sr-only">Toggle navigation</span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                              </button>
                                   <a class="navbar-brand center-block" href="index.html">
                                         <img src="<?php get_header_image(); ?>">
                                       </a>
	                            </div>
	                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

									<?php wp_nav_menu(array(
											'theme_location' => 'primary',
											'menu_class' => 'nav navbar-nav navbar-right'
										)); 
									?>

	                              <!-- <ul class="nav navbar-nav navbar-right" id="top-nav">
	                                <li class="active"><a href="#">Home</a></li>
	                                <li class=""><a href="hablu/intro/index.html">Programming</a></li>
	                                <li class=""><a href="web/basic/index.html">Web</a></li>
	                                <li class=""><a href="dreamJob/index.html">Dream Job</a></li>
	                                <li class=""><a href="motivate/index.html">Motivational</a></li>
	                                <li><a href="guru/index.html">Guru</a></li>
	                                <li class=""><a href="tips/index.html">Tips</a></li>
	                                <li class=""><a href="jkr/index.html">about me</a></li>
	                              </ul> -->
	                            </div><!-- /.navbar-collapse -->
	                          </div><!-- /.container-fluid -->
	                        </nav>
	                    </div>
	                </div><!-- .col-md-12 close -->
	            </div><!-- .row close -->
	        </div><!-- .container close -->
		</nav>

