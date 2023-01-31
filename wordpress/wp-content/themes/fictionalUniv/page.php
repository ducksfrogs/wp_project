
<?php
  get_header();

  while (have_posts()) {
  the_post(); ?>
   <?php
    if (1+1==2){
      echo 'This is true.'
    } ?>
    <h1>This is a page, not a post.</h1>
    <h2> <?php the_title(); ?></h2>
    <?php the_content(); ?>
  <?php }

  get_footer();
 ?>
