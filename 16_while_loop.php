<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>While Loop</title>
  </head>
  <body>
    <?php

      $number = 5;
      $a = 1;

      while ($a <= 10) {
        // code...
        echo "{$a} <br> {$number} * {$a} =". $number * $a ."<br>";
        $a++;
      }

     ?>
  </body>
</html>
