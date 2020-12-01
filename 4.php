<?php
//for ($x=1; $x<=9; $x++) {
//    for ($y=1; $y<=9;$y++) {
//        echo $x . '*' . $y . '=' . $x*$y . "\n";
//    }
//    echo "\n";
//}

//$num = 1;
//while (true){
//    $square = $num**2;
//    if ($square > 100){
//        goto a;
//    }
//    else{
//        echo $square . "\n";
//        $num++;
//    }
//}
//a:
//echo 'Цикл завершен!';

function multiply($a,$b,$c=-5) {
    return $a*$b*$c;
}

$num = multiply(2,5);
echo $num;