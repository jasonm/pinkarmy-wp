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

<body <?php if ( !is_front_page() ) echo 'class="sub"'; ?>>

  <!--open wrapper-->
  <div id="pa_wrapper">

    <!--open logoBlock-->
    <div id="pa_logoBlock" class="full">
      <div id="pa_logoBlockWrap" class="fixed">
        <a href="<?php echo(get_bloginfo('url')) ?>" class="f_left"><img src="<?php bloginfo('template_directory'); ?>/images/pa_logo.jpg" alt="Pink Army" /></a>
            <span class="tagline f_right">Join the Revolution!</span>
        </div><!--close wrap-->
    </div><!--close logoBlock-->


    <!--open mainNav-->
    <div id="pa_mainNav" class="full">
      <div id="pa_mainNavWrap" class="fixed">
          <ul>
            <?php wp_list_pages(array('title_li' => '', 'depth' => 1)); ?>
          </ul>
        </div><!--close wrap-->
    </div><!--close mainNav-->

    <!--open subNav-->
    <?php
      if($post->post_parent) {
        $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
      } else {
        $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
      }
    ?>

    <?php if ($children) { ?>
      <div id="pa_subNav" class="full">
        <div id="pa_subNavWrap" class="fixed">
          <ul>
            <?php echo $children; ?>
          </ul>
        </div><!--close wrap-->
      </div><!--close subNav-->
    <?php } ?>


    <!--open mastHead-->
    <div id="pa_mastHead" class="full">
      <div id="pa_mastHeadWrap" class="fixed"></div><!--close wrap-->
    </div><!--close mastHead-->

