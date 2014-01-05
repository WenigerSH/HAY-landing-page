<div id="home"></div>
<header role="banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-3 logo">
        <a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
      </div>
      <div class="col-xs-9 main-nav">
        <nav role="navigation">
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation'));
              endif;
            ?>
          </nav>  
      </div>
    </div>
  </div>

  <div class="visit-our-blog">
    <a href="http://blog.gethowareyou.com/">
      <div class="visit-our-blog-inner">
        <div class="visit-text">
          <p>Visit our blog</p>
        </div>
        <div class="visit-logo"></div>
      </div>
    </a>
    <p>anti-depresion articles</p>
  </div>

</header>