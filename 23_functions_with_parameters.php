<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Functions with parameters</title>
  </head>
  <body>
    <?php

      $fname = "walter";
      $num1 = 29;
      $num2 = 49;

     #function can be called before function definition
      sum(24 ,25);
      hello($fname);


      function hello($name="NAME"){ #default value
        echo "Hello $name<br>" ;
      }

      hello("usama");
      hello("John");
      hello("Skyler");
      hello("Jesse");
      hello($fname);
      hello();


      function sum($num1 , $num2){
        echo $num1 + $num2 . "<br>";
      }

      sum(24 ,26);
      sum(24 ,16);
      sum(24 ,25);
      sum($num1 ,$num2);


     ?>
  </body>
</html>
