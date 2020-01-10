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
    $s=1000;
    $k=6;
    $n=9;
    for(; $n<=9;){
        $s=$s+($s*($k/12));
        $n++;
    }
    echo $s?>
</body>
</html>