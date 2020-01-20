<?php 
$a=81;
$b=70;
$c=102;
$d=94;
$e=117;
echo '<pre>';
if ($a>$b){
    echo "\$a is bigger than \$b";
}elseif ($a===$b){
   echo "\$a is equal \$b";
}else echo "\$b is bibber \$a";
echo '<br>';
if ($a>$c){
    echo "\$a is bigger \$c";
}elseif ($a===$c){
    echo "\$a is equal \$c";
}else  echo "\$c is bigger \$a";
echo '<br>';
if ($c>$d){
    echo "\$c is bigger \$d";
}elseif ($c===$d){
    echo "\$c is equal \$d";
}else  echo "\$c is bigger \$d";
echo '<br>';
if ($c>$e){
    echo "\$c is bigger \$e";
}elseif ($c===$e){
    echo "\$c is equal \$e";
}else  echo "\$e is bigger \$c";
echo '<br>';
echo "\$e=117 and is the larger of the variables";
echo '</pre>';
