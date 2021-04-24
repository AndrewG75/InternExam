<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function colors ($color1, $color2) {
      if ($color1 === $color2)
      {
        return 0;
      }
      return ($color1 > $color2)?1: - 1;
    }

    $color1 = array ('Red', 'Blue', 'Black', 'Red', 'Blue', 'Blue', 'Red', 'Gold');
    $color2 = array ('Red', 'Blue', 'Red');

    $nonrepcol = array_udiff ($color1, $color2, "colors");
    print_r ($nonrepcol);
     ?>

  </body>
</html>
