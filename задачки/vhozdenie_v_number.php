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
  
    function number($s){
    $numb=158745875;
    $k=5;
    $s=0;
        for($i=1;$i<=strlen($numb);$i++){
            if($numb[$i]==$k){
                $s=$s+1;
            }
        }
        return $s;
    }
    echo number($s);
    ?>
</body>
</html>