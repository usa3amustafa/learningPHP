<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>If else-if</title>
  </head>
  <body>
    <?php

      $marks = 132;

      if ($marks >= 80 && $marks <= 100) {
        // code...
        echo "Merit";
      }elseif ($marks < 80 and $marks >= 60) {
        // code...
        echo "1st division";
      }elseif ($marks < 60 && $marks >= 45 ) {
        // code...
        echo "2nd division";
      }elseif ($marks < 45 && $marks >= 33) {
        // code...
        echo "3rd division";
      }else if ($marks < 33) {
        // code...
        echo "fail";
      }else {
        // code...
        echo "please enter correct percentage";
      }

     ?>
  </body>
</html>
