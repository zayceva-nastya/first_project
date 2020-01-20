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
    function sum($s){
        $start=20;
        $end=45;
        $s=0;
        for($i=20;$i<=$end;$i++){
            if(Fmod($i,5)==0){
                $s+=$i;
            }

        }
        return $s;
    }
    echo sum($s);
    ?>
</body>
</html>