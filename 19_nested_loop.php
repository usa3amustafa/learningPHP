<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nested Loop</title>
  </head>
  <body>
    <?php

      for ($i=1; $i <= 100 ; $i += 10) {
        // code...
        echo "{$i}";
        for ($j=$i+1; $j < $i + 10; $j++) {
          // code...
          echo " {$j} ";
        }
        echo "<br>";
      }


     ?>
  </body>
</html>
