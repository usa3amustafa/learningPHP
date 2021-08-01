<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Multidimentional Arrays</title>
  </head>
  <body>
    <?php

    #mutidimentional indexed array
      $array = [
        [1 , "John" ,  "Manager" , 50000] ,
        [2 , "Mark" ,  "Salesman" , 20000] ,
        [3 , "Kelly" ,  "Computer Operator" , 12000 , "married"] ,
        [4 , "Stella" ,  "Driver" , 5000] ,
      ];

      echo "<pre>";
      print_r($array) ;
      echo "</pre>";

      // echo "<pre>";
      // var_dump($array) ;
      // echo "</pre>";

      $arrLength = count($array);

      for ($i=0; $i < $arrLength ; $i++) {
        // code...
        $arrLength2 = count($array[$i]);
        for ($j=0; $j < $arrLength2 ; $j++) {
          // code...
          echo $array[$i][$j]." ";
        }
        echo "<br>";
      }

      echo "<br>";

      echo "<table border = '5px'>";
      echo "<tr>";
      echo "<th>Employee ID</th>";
      echo "<th>Employee Name</th>";
      echo "<th>Designation</th>";
      echo "<th>Salary</th>";
      echo "<th>Martial Status</th>";
      echo "</tr>";
      foreach ($array as $row) {
        echo "<tr>";
        foreach ($row as $col) {
            echo "<td>" .$col. "</td> ";
          }
          echo "</tr>";
      }
      echo "</table>";

    ?>
  </body>
</html>
