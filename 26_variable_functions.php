<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Variable Functions</title>
  </head>
  <body>
    <?php

    #variable functions

    function sayHello($name){
      echo "Hello Mr. $name <br>";
    }

    $helloMr = "sayHello";

    // sayHello("john jones");
    $helloMr('Usama Mustafa');


    #variable functions : anonymous Functions
    $greetings = function ($name){
      echo "Hello Mr. $name";
    };

    $greetings('Usama Mustafa');


     ?>
  </body>
</html>
