<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
  <div class="middle">
    <div class="content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">

      <div class="post-title">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
        <div class="date">
          <?php the_time('F jS, Y') ?>
        </div>
      </div>

      <?php the_content('Read the rest of this entry &raquo;'); ?>

      <div class="post-footer">
        by <?php the_author() ?> |
        <?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> |
        <?php edit_post_link('Edit', '', ' | '); ?> 
        <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> 
      </div>

      <p class="postmetadata alt">
        <small>
          This entry was posted
          <?php /* This is commented, because it requires a little adjusting sometimes.
            You'll need to download this plugin, and follow the instructions:
            http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
            /* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
          on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
          and is filed under <?php the_category(', ') ?>.
          You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

          <?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
            // Both Comments and Pings are open ?>
            You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

          <?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
            // Only Pings are Open ?>
            Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

          <?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
            // Comments are open, Pings are not ?>
            You can skip to the end and leave a response. Pinging is currently not allowed.

          <?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
            // Neither Comments, nor Pings are open ?>
            Both comments and pings are currently closed.

          <?php } edit_post_link('Edit this entry','','.'); ?>

        </small>
      </p>

    </div>

  <?php comments_template(); ?>

  <?php endwhile; ?>

    <div class="navigation">
      <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
      <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
    </div>
  
  <?php else: ?>

    <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

    </div>
  </div>

<?php get_footer(); ?>
