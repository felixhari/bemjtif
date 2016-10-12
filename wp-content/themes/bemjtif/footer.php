<footer>
	<div class="container">
		<div class="col-md-4">
			 <nav>
			 	<?php 
       			$args = array('theme_location' => 'footer_menu');
       			wp_nav_menu($args); 
    			?>
    		</nav>
		</div>

		<div class="col-md-4">
			<h4>Social Media</h4>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-facebook"></i>
			<i class="fa fa-linkedin"></i>
		</div>
	</div>
      
      
	
</footer>
<div class="sub-footer text-center">
	<div class="container">
		<p>&copy; <?php bloginfo('name'); echo " - ".date('Y'); ?></p>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>