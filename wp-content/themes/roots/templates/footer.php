<div id="contact" class="contact section">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar('sidebar-footer'); ?>
		</div>
	</div>
</div>

<footer class="footer section">
	<div class="container">
		<div class="row">
    		<div class="col-xs-4 copyright">
            	<p>Quantum Lab Co. &copy; <?php echo date('Y'); ?> All rights reserved</p>
    		</div>
    		<div class="col-xs-5 bottom-nav">
				<?php
	              if (has_nav_menu('primary_navigation')) :
	                wp_nav_menu(array('theme_location' => 'primary_navigation'));
	              endif;
	            ?>
    		</div>
    		<div class="col-xs-3 bottom-side-nav">
	    		<?php
	              if (has_nav_menu('secondary_navigation')) :
	                wp_nav_menu(array('theme_location' => 'secondary_navigation'));
	              endif;
	            ?>
    		</div>
  		</div>
	</div>
</footer>

<?php wp_footer(); ?>
