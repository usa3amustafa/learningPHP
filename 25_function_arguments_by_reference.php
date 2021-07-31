<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions Argument By Reference</title>
  </head>
  <body>
    <?php

      $name = "Usama";
      $name2 = "usama";

      echo "$name  <br>";

      #function argument  by reference , it also changes the origional value
      #it stores the address of the passed argument
      function sayHello (&$nameP){
        $nameP .= " Mustafa";
        return  "$nameP  <br>";
      }

      #function argument  by reference , it doesnot change the origional value
      #it stores the value of the passed argument
      function sayHello2 ($nameP){
        $nameP .= " Mustafa";
        return  "$nameP  <br>";
      }

      $result = sayHello($name);
      $result2 = sayHello2($name2);

      echo "$result";
      echo "$name <br>";
      echo "$result2";
      echo "$name2";


     ?>
  </body>
</html>
