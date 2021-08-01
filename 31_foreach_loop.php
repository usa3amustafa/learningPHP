<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach Loop</title>
  </head>
  <body>
    <?php

      $colors = ['violet' , 'indigo' , 'blue' , 'green' , 'yellow' , 'orange' , 'red'];

      foreach ($colors as $color) {
        // code...
        echo "$color <br>";
      }

      $students = [
      'viola' => 20,
      'bill' => 23,
      'jannet' => 28,
      'mark' => 25,
      'jackson' => 21,
      'norah' => 22
    ];
    echo "<ul>";
    foreach ($students as $student => $marks) {
      // code...
      echo "<li>$student : $marks </li>";
    }
    echo "</ul>";



     ?>
  </body>
</html>
