<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
   echo 'Hello, World';
   echo '<br>'
   ?>
   <?php 
   $a=5;
  $a=$a<<1;
   echo $a;
   echo '<br>'
   ?>
   <?php
   $b=5;
   $a=~$b;
   echo $a;
   echo '<br>';
   ?>
   <?php 
   $bool= TRUE;
   $str = "foo";
   $int = 12;
   echo gettype ($bool); //выводит boolean
   echo gettype ($str); //выводит string
   // усли это целое увелич на 4
   if (is_int($int)){
       $int +=4;
       echo $int;
   }
   //eсли $bool это строка вывести её
   //ничего не выводит
   if (is_string($bool)){
       echo 'Строка; $bool';
   }



   ?>
      <?php 
      $a=123;
      echo $a;
      echo '<br>';
      $b=-123;
      echo $b;
      echo '<br>';
      $c=0123;
      echo $c;
      echo '<br>';
      $d=0x1A;
      echo $d;
      echo '<br>';
      ?>

      <?php
      $a=1.234;
      echo $a;
      echo '<br>';
      $b=1.2e3;
      echo $b;
      echo '<br>';
      $c=7e-10;
     
      echo number_format($c);
      ?>

      <?php 
    //   echo 'чтобы вывести \ 'надо перед ней поставить \\';
    //   ?>

    //   <?php 
    //   echo 'Это не вставит: \n новую строку';
    //   ?>
      <?php
      $a=3;
      echo "\$a=$a";
      ?>

</body>
</html>