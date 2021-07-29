<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logical Operators</title>
  </head>
  <body>
    <?php
      $age = 25;

      if ($age < 30 && $age > 18) {
        // code...
        echo "and : User is eligible";
        echo "<br>";
      }

      if ($age < 21 || $age > 18):
        // code...
        echo "OR : User is eligible";
        echo "<br>";

      endif;

      if (!($age < 18)) {
        // code...
        echo "NOT : User is eligible";
        echo "<br>";
      }


      // xor truth table
      // 0 0 = 0
      // 0 1 = 1
      // 1 0 = 0
      // 1 1 = 0
      if ($age < 18 xor $age < 30) {
        // code...
        echo "xor : User is eligible";
        echo "<br>";
      }
     ?>
  </body>
</html>
