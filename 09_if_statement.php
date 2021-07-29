<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>If Statement</title>
  </head>
  <body>
    <?php

      $a = 10;
      $b = 5;

      if ($a > $b) {
        echo "ten is greater than 5";
      }

      if ($a !== $b):
        echo "<br>";
        echo "ten is not equal to " , $b;
      endif;

     ?>
  </body>
</html>
