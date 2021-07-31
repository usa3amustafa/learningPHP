<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Continue and Break</title>
  </head>
  <body>
    <?php

    for ($i=0; $i < 11; $i++) {
      // code...
    if($i === 3) {
      continue;
    }
    // if ($i === 5) {
    //   // code...
    //   Break;
    // }
      echo "{$i} <br>";
    }

     ?>
  </body>
</html>
