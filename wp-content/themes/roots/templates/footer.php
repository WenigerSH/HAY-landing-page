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
<!-- Begin Survey.io code for gethowareyou.com -->
<script src="http://cdn.survey.io/embed/1.0/survey.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
Surveyio.init({
survey_id: "639cc",
token: "2e13780c3225c92019fe1536d07a649abe64680a",
banner:
{ x: "right", y: "top", color: "orange" }
});
</script>
<!-- /End Survey.io code -->
<script id="IntercomSettingsScriptTag">
  window.intercomSettings = {
    // TODO: The current logged in user's full name
    name: "John Doe",
    // TODO: The current logged in user's email address.
    email: "john.doe@example.com",
    // TODO: The current logged in user's sign-up date as a Unix timestamp.
    created_at: 1234567890,
    app_id: "60dea1b33415c49064a21b2b017e157f659abbdd"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://static.intercomcdn.com/intercom.v1.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

