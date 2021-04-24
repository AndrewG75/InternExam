<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $x = 0;
      $sum = 0;
      echo "$x<br>";

      while ($x < 10){
        $x+=2;
        $sum = $sum+$x;

        echo "$x<br>";
      }
      echo "$sum<br>";

    ?>
  </body>
</html>
