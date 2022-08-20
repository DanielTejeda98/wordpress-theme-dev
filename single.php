<?php

/**
 * Single page
 */


 get_header();?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <?php 
      while(have_posts(  )):
        the_post(  );
        get_template_part('theme-parts/post/content');
      endwhile;

      //if comments, show comments template
      if(comments_open( ) || get_comments_number(  )) :
        comments_template();
      endif;
    ?>
  </main>
  <?php get_sidebar(); ?>
</div>

<?php
 get_footer();
 ?>

