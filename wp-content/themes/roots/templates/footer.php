<div id="contact" class="contact section">
	<div class="container">
		<div class="row">
			<div class="col-xs-4 additional-info">
        <p><?php pll_e('Additional info');?></p>
        <?php
          if (has_nav_menu('secondary_navigation')) :
            wp_nav_menu(array('theme_location' => 'secondary_navigation'));
          endif;
        ?>
        <p class="love-you"><?php pll_e('We love you');?></p>
        <ul class="social">
          <li><a class="facebook" href="https://www.facebook.com/howareyoumoodtracker"></a></li>
          <li><a class="google" href="https://plus.google.com/106253818094337528276"></a></li>
          <li><a class="twitter" href="https://twitter.com/howareyouapp"></a></li>
          <li><a class="tumblr" href="http://blog.gethowareyou.com/"></a></li>
        </ul>
      </div>
      <div class="col-xs-4 contact-persons">
        <div class="contact-person-row">
          <div class="person-photo">
            <img src="/wp-content/themes/roots/assets/img/br.png" alt="Bartosz Rychlicki" />
          </div>
          <div class="person-description">
            <p class="contact-person"><?php pll_e('Contact for business');?></p>
            <p class="person">Bartosz Rychlicki</p>
            <p>CEO<br />
            <a href="tel:+ 48  512 129 709">+ 48  512 129 709</a><br />
            <a href="mailto:br@quantumlab.co">br@quantumlab.co</a></p>
          </div>
        </div>
        <div class="contact-person-row">
          <div class="person-photo">
            <img src="/wp-content/themes/roots/assets/img/kb.png" alt="Konrad Bocian" />
          </div>
          <div class="person-description">
            <p class="contact-person"><?php pll_e('Contact for press and science');?></p>
            <p class="person">Konrad Bocian</p>
            <p><?php pll_e('Social Psychologist'); ?><br />
            <a href="tel:+ 48  660 079 928">+ 48  660 079 928</a><br />
            <a href="mailto:kb@quantumlab.co">kb@quantumlab.co</a></p>
          </div>
        </div>
      </div>
      <div class="col-xs-4 forms">
        <p><?php pll_e('Tell us what you think about How Are You App');?></p>
        <?php if (pll_current_language() == 'en') {
          echo do_shortcode('[contact-form-7 id="14" title="Contact form"]');
        } else {
          echo do_shortcode('[contact-form-7 id="167" title="Contact form PL"]');
        } ?>
        <p><?php pll_e('Sign up for product informations and promotions');?></p>
        <?php echo do_shortcode("[mc4wp_form]"); ?>
      </div>
		</div>
	</div>
</div>

<footer class="footer section">
	<div class="container">
		<div class="row">
    		<div class="col-xs-9 copyright">
            	<p><?php pll_e('How Are You App is developed by');?> <a href="http://quantumlab.co"><img src="/wp-content/themes/roots/assets/img/ql.png" alt="Quantum Lab" /></a> &copy; <?php echo date('Y'); ?> <?php pll_e('All rights reserved'); ?></p>
    		</div>
    		<div class="col-xs-3 bottom-side-nav">
	    		<?php
	          if (has_nav_menu('primary_navigation')) :
	            wp_nav_menu(array('theme_location' => 'primary_navigation'));
	          endif;
	        ?>
    		</div>
  		</div>
	</div>
</footer>

<?php wp_footer(); ?>
