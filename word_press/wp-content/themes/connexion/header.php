<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta author="Connexion Theme" content="http://connexion.com/">
	<meta name="author" content="<?php bloginfo( 'description' ); ?>">
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>

	<?php wp_head(); ?>
</head>
</html>

<body <?php body_class(); ?>>

<div class="nav-container">
	<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo" class="logo mr-2 text-uppercase">Connexion</a>
	        <?php
	        wp_nav_menu( array(
	            'theme_location'    => 'primary',
	            'depth'             => 2,
	            'container'         => 'div',
	            'container_class'   => 'collapse navbar-collapse',
	            'container_id'      => 'bs-example-navbar-collapse-1',
	            'menu_class'        => 'nav navbar-nav ml-auto',
	            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	            'walker'            => new WP_Bootstrap_Navwalker()
			) );
	        ?>
	    </div> <!-- /.container -->
	</nav>
</div> <!-- /.nav-container -->

<div class="header-bg-contianer bgi" style="background-image: url(<?php header_image(); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-12">
				
				<div class="header-container d-flex">
					<h2 class="header-title align-self-center text-white"><?php wp_title(''); ?></h2>
				</div> <!-- /.header-container -->
			</div> <!-- /.col-xl-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.header-bg-contianer -->



