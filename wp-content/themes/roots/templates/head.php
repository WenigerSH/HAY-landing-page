<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

	<script type="text/javascript">var _kmq = _kmq || [];
	var _kmk = _kmk || '0f1e58a44584148e7aad9b356d40ff8f739de9cf';
	function _kms(u){
  		setTimeout(function(){
    			var d = document, f = d.getElementsByTagName('script')[0],
    			s = d.createElement('script');
    			s.type = 'text/javascript'; s.async = true; s.src = u;
    			f.parentNode.insertBefore(s, f);
  		}, 1);
	}
	_kms('//i.kissmetrics.com/i.js');
	_kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
	</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <link rel="shortcut icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.gif" />

	<script>
		var _prum = [['id', '535e7843abe53d734c4a1e0d'],
             ['mark', 'firstbyte', (new Date()).getTime()]];
		(function() {
    		var s = document.getElementsByTagName('script')[0]
      		, p = document.createElement('script');
    		p.async = 'async';
    		p.src = '//rum-static.pingdom.net/prum.min.js';
		    s.parentNode.insertBefore(p, s);
		})();
	</script>
</head>

