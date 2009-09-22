<?php get_header(); ?>

    <div class="middle">
      <div class="content">
        <?php get_sidebar(); ?>

        <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?>

            <div class="post" id="post-<?php the_ID(); ?>">
              <div class="post-title">
                <?php the_title(); ?>
                <div class="date">
                  <?php the_time('F jS, Y') ?>
                </div>
              </div>

              <!--
              <h2>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
              -->

              <?php the_content('Read the rest of this entry &raquo;'); ?>

              <div class="post-footer">
                by <?php the_author() ?> |
                <?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> |
                <?php edit_post_link('Edit', '', ' | '); ?> 
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> 
              </div>
            </div>

          <?php endwhile; ?>

          <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
          </div>

        <?php else : ?>

          <h2 class="center">Not Found</h2>
          <p class="center">Sorry, but you are looking for something that isn't here.</p>
          <?php get_search_form(); ?>

        <?php endif; ?>

        </div>
        <!-- end content -->
      </div>
      <!-- end middle -->
    </div>


<?php get_footer(); ?>
