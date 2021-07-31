<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>functions with returning values</title>
  </head>
  <body>
    <?php

      function operation($op_name , $op_1 , $op_2){
        switch ($op_name) {
          case 'sum':
            // code...
            return $op_1 + $op_2;
            break;
          case 'subtract':
            // code...
            return $op_1 - $op_2;
            break;
          case 'multiply':
            // code...
            return $op_1 * $op_2;
            break;
          case 'divide':
            // code...
            return $op_1 / $op_2;
            break;

          default:
            // code...
            echo "Nothing";
            break;
        }
      }

      $result = operation("sum" , 10 , 10);
      echo $result . "<br>";
      $result = operation("subtract" , 10 , 10);
      echo $result . "<br>";
      $result = operation("multiply" , 10 , 10);
      echo $result . "<br>";
      $result = operation("divide" , 10 , 10);
      echo $result . "<br>";
      $result = operation("hunh" , 10 , 10);
      echo $result . "<br>";

     ?>
  </body>
</html>
