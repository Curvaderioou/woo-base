<?php 
// Template name: Home
get_header(); ?>

  <?php if(have_posts()) { while (have_posts()) { the_post(); ?>

    <h1><?= the_title(); ?></h1>
    <main><?= the_content(); ?></main>

  <?php }} ?>

<?php get_footer(); ?>