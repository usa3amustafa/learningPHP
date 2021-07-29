<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>If Else Statement</title>
  </head>
  <body>
    <?php

      $a = 10;

      $name =  "Usama Mustafa";
      $age = 25;

      if ($a < 5) {
        // code...
        echo "x is smaller than 5";
        echo "<br>";

      }else {
        // code...
        echo "x is not smaller than 5";
        echo "<br>";
      }

      if ($age > 18) {
        // code...
        echo "Hello Mr, {$name} you are Eligible" ;
      }else {
        // code...
        echo "Hello Mr. {$name} you are not Eligible";
      }

    ?>
  </body>
</html>
