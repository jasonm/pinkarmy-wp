<!DOCTYPE html PUBLIC"-// W3C//DTD XHTML 1.0 Transitional//EN"" http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>
      <?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>: <?php bloginfo('description'); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  </head>

  <body>
    <div class="header">
      <div id="search">
        <form method="get" id="searchform" action="/">
          <input type="text" value="" name="s" id="s" class="txtField"/>
          <input type="submit" id="searchsubmit" class="btnSearch" value="Find It"/>
        </form>
      </div>
      <a href="/" id="home-link"><span>Home</span></a>
      <a href="/about" id="about-link"><span>About</span></a>
      <a href="/2009" id="archives-link"><span>Archives</span></a>
    </div>
