<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta author="Awesome Theme" content="https://awesome-theme.net/theme22/">
        <meta name="author" content="<?php bloginfo('description'); ?>">

        <title>
            <?php bloginfo('name') ?><?php wp_title('|'); ?>
        </title>

        <!-- wp default head content -->
        <?php wp_head(); ?>

    </head>

    <?php if(is_front_page()) : ?>
        <?php $awesome_classs = array('awesome_class' => 'my-class'); ?>
    <?php else : ?>
        <?php $awesome_classs = array('awesome_class' => 'no-awesome-class'); ?>
    <?php endif; ?>

    <body <?php body_class($awesome_classs); ?>>

        <header>
            <nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
                <div class="container">

                    <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>

                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>

                     <div class="collapse navbar-collapse" id="navbarNavDropdown">

                      <!-- wordpress navigation here -->
                    
                      <?php wp_nav_menu(
                        array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'navbar-nav',
                                /*'walker' => new Walker_Nav_Primary()*/
                            )
                        );?>

                      <!-- <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown link
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </li>
                      </ul> -->
                     </div> <!-- end navigation-body --> 
                </div>  <!-- end bs-container --> 
            </nav>
            <div class="search-form-container col-12">
              <?php get_search_form(); ?>
            </div>
        </header>
       
        