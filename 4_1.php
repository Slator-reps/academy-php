<?php
//$simpleNumArr = [];
//for ($i=1; $i<=100;$i++){
//    $cnt=false;
//    for ($j=2; $j<=$i/2;$j++){
//        if ($i%$j==0)
//            $cnt=true;
//    }
//    if($cnt==false)
//        array_push($simpleNumArr, $i);
//}
//
//foreach ($simpleNumArr as $key => $sNum){
//    echo  $sNum . ' - это простое число №' . $key++ . "\n";
//}

function leapYear($year){
    $isLeap = DateTime::createFromFormat('Y', $year)->format('L') === "1";
    var_dump($isLeap); // bool(true)
}

leapYear(2020);