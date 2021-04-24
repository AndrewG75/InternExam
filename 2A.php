<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $name = array('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');
    asort ($name);
    array_shift ($name);
    print_r (array_count_values($name));
     ?>

  </body>
</html>
