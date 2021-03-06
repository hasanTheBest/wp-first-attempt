
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">

				<?php if(is_active_sidebar('footer-widget-1')) : ?>
					<?php dynamic_sidebar('footer-widget-1'); ?>
				<?php endif; ?>	

				<!-- <div class="widget">
					<h5 class="widgetheading">Get in touch with us</h5>
					<address>
					<strong>Moderna company Inc</strong><br>
					 Modernbuilding suite V124, AB 01<br>
					 Someplace 16425 Earth </address>
					<p>
						<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div> -->
				
			</div>
			<div class="col-md-3">

				<?php if(is_active_sidebar('footer-widget-2')) : ?>
					<?php dynamic_sidebar('footer-widget-2'); ?>
				<?php endif; ?>	

				<!--widger menus/ footer menus -->
				<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu-class' => 'link-list'
						)
					);
				?>	

				<!-- 
				<div class="widget">
					<h5 class="widgetheading">Pages</h5>
					<ul class="link-list">
						<li><a href="#">Press release</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career center</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div> -->

			</div>
			<div class="col-md-3">

				<?php if(is_active_sidebar('footer-widget-3')) : ?>
					<?php dynamic_sidebar('footer-widget-3'); ?>
				<?php endif; ?>	

				<!--widger menus/ footer menus -->
				<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu-class' => 'link-list'
						)
					);
				?>

				<!-- <div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div> -->

			</div>
			<div class="col-md-3">

				<?php if(is_active_sidebar('footer-widget-4')) : ?>
					<?php dynamic_sidebar('footer-widget-4'); ?>
				<?php endif; ?>	

				<!-- <div class="widget">
					<h5 class="widgetheading">Flickr photostream</h5>
					<div class="flickr_badge">
						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
					</div>
					<div class="clear">
					</div>
				</div> -->

			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="copyright">
						<p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?> </p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Moderna
                            -->
                            <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>
				<div class="col-md-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- wp footer function -->
<?php wp_footer(); ?>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/animate.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

</body>
</html>