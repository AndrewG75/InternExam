<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $a = 0;
    $b = 1;
    $c = 10;
    echo "$a<br>";
    echo "$b<br>";
    for($x=2; $x < $c; $x++){
      $d = $a+=$b;
      $a = $b;
      $b = $d;
      echo "$d<br>";
    }
     ?>
  </body>
</html>
