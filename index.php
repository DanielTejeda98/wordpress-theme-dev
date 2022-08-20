<?php

/**
 * Index
 */


 get_header();
  if(have_posts()):
    while(have_posts(  )):
      the_post();
      get_template_part('theme-parts/post/content');
    endwhile;
  endif;
 get_footer();
 ?>

