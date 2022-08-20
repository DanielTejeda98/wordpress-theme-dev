<?php

/**
 * Template part for displaying a message that posts cannot be found
 */

 ?>

<section class="no-results not-found">
  <header class="page-header">
    <h1 class="page-title"><?php esc_html_e('Nothing found');?></h1>
  </header>

  <div class="page-content">
    <?php
      if(is_home() && current_user_can('publish_posts')) :
        '<p>' . wp_jses(

          __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.'),
          array(  
          'a' => array(
              'href' => array(),
            ),
        ) . '</p>',
          esc_url(admin_url('post-new.php'))
        ); 

      elseif (is_search()) :
        ?>

        <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different terms.')?>
        <?php
        get_search_form();

      else : 
        ?>

        <p><?php esc_html_e('It seems we cannot find what you are looking for. Perhaps searching can help?'); ?>
        <?php
          get_search_form( );
          
      endif;  
          ?>
  </div>
</section>