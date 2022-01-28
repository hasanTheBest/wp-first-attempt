<!-- wordpress footer navigation -->
<footer class="p-3" style="background-color: #e3f2fd;">
<nav class="navbar navbar-dark bg-white"> 
  <div class="container"> 
  <div class=" navbar-collapse" id="navbarNavDropdown2">

    <!-- wordpress navigation here -->
    
    <?php wp_nav_menu(array(
    	'theme_location' => 'secondary',
    	'menu_class' => 'nav'
	)); ?>

  </div> <!-- end navigation-body --> 
</div>  <!-- end bs-container --> 
</nav>

</footer>

<!-- php default footer content -->
<?php wp_footer(); ?>
    </body>
</html>