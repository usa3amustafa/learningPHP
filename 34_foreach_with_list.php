<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foreach with list</title>
  </head>
  <body>
    <?php

      // $numbers = [
      //   [1 , 2 ,  3 , 4],
      //   [5 , 6 , 7 , 8],
      //   [9 , 10 , 11 , 12]
      // ];
      //
      // foreach ($numbers as list($a , $b , $c , $d)) {
      //   // code...
      //   echo "$a $b $c $d" . "<br>";
      // }


      $array = [
        [1 , "John" ,  "Manager" , 50000] ,
        [2 , "Mark" ,  "Salesman" , 20000] ,
        [3 , "Kelly" ,  "Computer Operator" , 12000 ] ,
        [4 , "Stella" ,  "Driver" , 5000] ,
      ];

      echo "<table border='1' cellpadding = '10px' cellspacing = '0'> ";
      echo "<thead><tr><th>Employee id</th> <th>Name</th> <th>designation</th> <th>salary</th></tr></thead>";
      echo "<tbody><tr>";
      foreach ($array as list($a , $b , $c , $d)) {
        // code...
        echo "<tr><td>$a</td> <td>$b</td><td> $c</td><td> $d</td></tr></tbody>";
      }
      echo "</table>";

      // list with associative array
      $student_marks = [
        ["physics" => 85 ,"chemistry" => 89 ,"math" => 78] ,
        ["physics" =>68 ,"chemistry" => 79 , "math" => 73] ,
        ["physics" =>62 , "chemistry" => 92 ,"math" => 67]
      ];

      echo "<table border='1' cellpadding = '10px' cellspacing = '0'> ";
      echo "<thead><tr><th>Physics</th> <th>Chemistry</th> <th>Maths</th></tr></thead>";
      echo "<tbody><tr>";
      foreach ($student_marks as list("physics" => $a ,"chemistry" => $b ,"math" => $c )) {
        // code...
        echo "<tr><td>$a</td><td> $b</td><td> $c</td></tr></tbody>";
      }
      echo "</table>";
     ?>
  </body>
</html>
