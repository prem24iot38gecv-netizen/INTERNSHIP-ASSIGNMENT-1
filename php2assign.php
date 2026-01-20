<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $a=10;
       $b=20;
       $c=$a;
       $a=$b;
       $b=$c;
    
      echo("The value after swapping a is $a <br>");
      echo("The value after swapping b is $b ");
    ?>
</body>
</html>