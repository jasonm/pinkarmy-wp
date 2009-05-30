<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- title>Pink Army Cooperative: Join the Revolution!</title -->
  <title>
    <?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>: <?php bloginfo('description'); ?>
  </title>

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css" media="screen, projection" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/typography.css" media="screen, projection" />

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script src="wp-content/themes/pinkarmy/js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="wp-content/themes/pinkarmy/js/iomer.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () { iomer.equalizePanels (); });
</script>

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>

</head>

<!-- TODO: body class sub if not homepage -->
<body>

  <!--open wrapper-->
  <div id="pa_wrapper">

    <!--open logoBlock-->
    <div id="pa_logoBlock" class="full">
      <div id="pa_logoBlockWrap" class="fixed">
          <a href="index.html" class="f_left"><img src="<?php bloginfo('template_directory'); ?>/images/pa_logo.jpg" alt="Pink Army" /></a>
            <span class="tagline f_right">Join the Revolution!</span>
        </div><!--close wrap-->
    </div><!--close logoBlock-->


    <!--open mainNav-->
    <div id="pa_mainNav" class="full">
      <div id="pa_mainNavWrap" class="fixed">
          <ul>
              <li><a href="index.html" class="selected">Home</a></li>
                <li><a href="about/story.html">About</a></li>
                <li><a href="strategy/overview.html">Strategy</a></li>
                <li><a href="community.html">Community</a></li>
                <li><a href="join.html">Join</a></li>
                <li><a href="mediacentre.html">Media Centre</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div><!--close wrap-->
    </div><!--close mainNav-->


    <!--open mastHead-->
    <div id="pa_mastHead" class="full">
      <div id="pa_mastHeadWrap" class="fixed"></div><!--close wrap-->
    </div><!--close mastHead-->

