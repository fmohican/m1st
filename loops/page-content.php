<?php
/**!
 * The Page Content Loop
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <header class="mb-4 border-bottom">
      <h1>
        <?php the_title()?>
      </h1>
    </header>
    <div>
      <?php 
        the_post_thumbnail();
        the_content()
      ?>
    </div>
  </article>
<?php
  endwhile; else:
    wp_redirect(esc_url( home_url() ) . '/404', 404);
    exit;
  endif;
?>
