<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Array functions</title>
  </head>
  <body>
    <?php

      $food1 = ['taco' , "pizza" , 'bread' , 'choclate'];

      // echo count($food);
      // echo sizeof($food);

      $food2 = [
        "fruits" => ['mango' , 'apple' , 'banana'],
        "vegetables" => ['cucumber' , 'tomato' , 'broccli'],
        'drinks' => ['juice' , 'smoothie' , 'shake']
      ];

      echo count($food2);  //number of elements(arrays) in food
      echo "<br>";
      echo sizeof($food2 , 1); //sum of elements in food array as well inner arrays elements
      echo "<br>";
      echo sizeof($food2['vegetables']); //number of elements in food['vegetables'] array

      echo "<pre>";
      print_r(array_count_values($food1)); //returns an array with the number of instances for each value
      echo "</pre>";



     ?>
  </body>
</html>
