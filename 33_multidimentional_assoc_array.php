<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Multidimentional Associative array</title>
  </head>
  <body>
    <?php

      $student_marks = [
        "john" => ["physics" => 85 ,"chemistry" => 89 ,"math" => 78] ,
        "mark" => ["physics" =>68 ,"chemistry" => 79 , "math" => 73] ,
        "kelly" => ["physics" =>62 , "chemistry" => 92 ,"math" => 67]
      ];

      // echo "<pre>";
      // print_r($student_marks);
      // echo "</pre>";

      echo "<table border='1' cellpadding = '10px' cellspacing = '0'> ";
      echo "<thead><tr><th>Student Name</th> <th>Physics</th> <th>chemistry</th> <th>math</th></tr></thead>";
      echo "<tr>";
      foreach ($student_marks as $std_name => $std_marks) {
        // code...
        echo "<td>$std_name</td>";
        foreach ($std_marks as $sbj => $marks) {
          // code...
          echo "<td>$marks</td>";
        }
        echo "</tr>";
      }
      echo "</table>";


     ?>
  </body>
</html>
