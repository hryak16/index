<?php
$a = 20;
$b = 80;
$c = 60;

if(($a > $b) and ($a > $c)){
 echo "$a MAX";
}
elseif(($b > $a) and ($b > $c)){
    echo "$b MAX";
}
elseif(($c > $a) and ($c > $b)){
    echo "$c MAX";
}
else {
    echo "Введите числа";
}


?>