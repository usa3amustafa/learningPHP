<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recursive Function</title>
  </head>
  <body>
    <?php


    #same as a loop
    function display($num){
        if ($num <= 5) {
          // code...
          echo "$num";
          display(++$num);
        }
      };

      display(1);

      echo "<br>";

// $n = 5;
// $ans = 1;
//
// for ($i=$n; $i > 0 ; $i--) {
//   // code...
//   // echo "$i , $ans <br>";
//   $ans = $ans * $i;
// }
// echo "$ans";



      function factorial ($n){
        if ($n == 0) {
          // code...
          return 1;
        }
          else {
            // code...
            return ($n * factorial($n - 1));
          }
        }

       $answer =  factorial(10);
       echo "$answer";


     ?>
  </body>
</html>
