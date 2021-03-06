<?php get_header(); ?>

<main class="container">
  <div class="row">

    <div class="col s8">
      <div id="content" role="main">
        <?php get_template_part('loops/page-content'); ?>
      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php get_footer(); ?>
