<!-- html:5 -->
<?php get_header();
  require_once('wp-load.php');
  require('vars.php');

  while(have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>
    <hr>
  <?php };

  // function testfunction() {
  //   global $wpdb;
  // }

  $get = $wpdb->get_results(" SELECT * FROM ".$wpdb->prefix."posts WHERE post_type='post' AND post_status='publish' ");

  // echo "<pre>";print_r($wpdb);echo"</pre>";

  $value = get_object_vars($get[2])['post_content'];

  echo "<pre>";
  print_r($get[0]->post_content);
  echo"</pre>";

  get_footer();

  echo "A {$color} {$fruit}."
?>
