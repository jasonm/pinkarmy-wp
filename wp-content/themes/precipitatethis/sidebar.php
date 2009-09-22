<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
  <div class="side">
    <span class="side-title">Archives</span>
    <?php wp_get_archives('type=monthly&format=custom&before=<p class="recent">&after=</p>'); ?>
    <div id="side-separator"></div>

    <span class="side-title">Categories</span>
    <p class="side-p">
      <?php
        $listcats = wp_list_categories('title_li=&style=none&echo=0&orderby=name');
        $listcats = str_replace("<br />","",$listcats);
        echo $listcats;
      ?>
    </p>

    <span class="side-title">Links</span>
    <?php wp_list_bookmarks('category_before=&category_after=&title_li=&categorize=0&before=<p class="recent">&after=</p>'); ?>
  </div>

