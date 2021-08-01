<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Global and local variables</title>
  </head>
  <body>
    <?php

      $a = 10;
      $b = 15;

      function sum(){
        global $a , $b;
        return $a + $b;
      }

      echo sum();

     ?>
  </body>
</html>
