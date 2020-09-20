<?php get_header();

  while(have_posts()) {
    the_post(); ?>
    <h1>This is not a post</h1>
    <?php the_title(); ?>
    <p><?php the_content(); ?></p>
  <?php };


  if (true) {
    echo get_the_ID();
    echo " is the ID of the page <br>";
    echo wp_get_post_parent_id(get_the_ID());
  }

  echo "<br>";
  $animals = array(
    'cat' => 'meow',
    'dog' => 'woof',
    'pig' => 'oinc'
  );

  echo $animals['dog'];

  get_footer();

?>
