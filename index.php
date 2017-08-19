<?php

require 'logdir.php';

if (!($images = logDir('images'))) {
  die('Could not load images.');
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
  </head>
  <body>
    <?php foreach ($images as $image): ?>
      <img src="<?php echo $image; ?>" alt="">
    <?php endforeach; ?>
  </body>
</html>
