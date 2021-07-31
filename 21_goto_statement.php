<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>goto Statement</title>
  </head>
  <body>
    <?php

    goto a;
    echo 'Foo';

    a:
    echo 'Bar <br>';


    for ($i=0; $i < 11 ; $i++) {
      // code...
      if ($i === 3) {
        // code...
        goto case3; #code in case 3 will be executed and rest of the loop code will be skipped
      }

      echo "{$i} <br>";
    }
    case3:
    echo "Number is 3";




     ?>
  </body>
</html>
