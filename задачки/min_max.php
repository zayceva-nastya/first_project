<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> <?php
    $arr=array(1,2,8,7,13,47,147,258,12,10,58,98,100);
   function max_v($arr){
       reset($arr);
       $max=current($arr);
       foreach($arr as $val){
           if($val>$max){
               $max=$val;
           }
       }
       return $max;
   }
   echo max_v($arr);
   echo "<br>";
    ?>

  
    <?php
    $my_arr=array(2,8,10,1,87,100);
    function min_v($my_arr){
        reset($my_arr);
        $min=current($my_arr);
        foreach($my_arr as $v){
            if($min>$v){
                $min=$v;
            }
        }
        return $min;
    }
echo min_v($my_arr);
?>
</body>
</html>