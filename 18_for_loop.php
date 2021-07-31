<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>For Loop</title>
  </head>
  <body>
    <?php

      $number = 3;

      echo "<ul>";
      for ($i=1; $i < 11; $i++) {
        // code...
        echo "<li>iteration number {$i}</li>";
      }
      echo "</ul>";

      echo "<br>";

      echo "<ol>";
      for ($i=10; $i > 0; $i--) {
        // code...
        echo "<li>iteration number {$i}</li>";
      }
      echo "<ol>";



     ?>
  </body>
</html>
