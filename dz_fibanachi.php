<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--  -->
 <?php
 function fib($n){
     if($n<3){
         return 1;
     }else{
         return $k=fib($n-1)+fib($n-2);
     }
 }
 $n=8;
 echo $k;
 ?>   
</body>
</html>