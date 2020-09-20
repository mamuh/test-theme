Hello world! ha

<?php
  function myFunction($name) {
    echo "<h2>Hi from the paragraph $name</h2>";
  }

  $names = array('brad', 'jane', 'mel', 'meow');

  myFunction('melissa');
  myFunction('jennifer');
  myFunction('jessica');


?>

<h1><?php echo $names[1]; ?></h1>
<?php
  $count = 0;
  while($count < count($names)) {
    echo "<li>$names[$count]</li>";
    $count++;
  }
?>
