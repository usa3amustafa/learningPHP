<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
  </head>
  <body>
    <?php

      // $numbers = array(47 , 23.5, 57,4,56 , 32,42 ,46 ,78,56 , 65 ,7);
      $numbers =[47 , 23.5, 57,4,56 , 32,42 ,46 ,78,56 , 65 ,7];

      $colors[0] = 'red';
      $colors[1] = 'green';
      $colors[2] = 'yellow';
      $colors[3] = 'violet';
      $colors[4] = 'indigo';

      echo "<pre>";
      print_r($colors);
      echo "</pre>";

      #print_r
      echo "<pre>";
      print_r($numbers);
      echo "</pre>";


      #accessing the array elements using index
      echo "$numbers[0]<br>";

      #calculating the numbers of elements in the array
      $arrLength = count($numbers);
      echo "$arrLength <br>";
      #accessing the array using for EvLoop
      for ($i=0; $i < $arrLength; $i++) {
        // code...
        echo "Student " . $i+1 ." scored $numbers[$i] <br>";
      }

     ?>

  </body>
</html>
