<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Associative Array</title>
  </head>
  <body>
    <?php

    #key => value pair : keys can be in any order and can be strings or numbers.

      $ages = [
        'mark' => 20,
        'john' => 23,
        'ellon' => 26
      ];

      echo "<pre>";
      print_r($ages);
      echo "</pre>";

      echo "<pre>";
      var_dump($ages);
      echo "</pre>";


      echo $ages['mark'] . "<br>";
      echo $ages['john']. "<br>";
      echo $ages['ellon']. "<br>";


     ?>
  </body>
</html>
