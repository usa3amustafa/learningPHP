<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Do While</title>
  </head>
  <body>
    <?php

      $a = 10;

      $number = 2;

      do {
        // code...
        echo "{$a} <br> {$number} * {$a} = ". $number * $a ."<br>";
        $a--;
      } while ($a >= 1);

     ?>
  </body>
</html>
