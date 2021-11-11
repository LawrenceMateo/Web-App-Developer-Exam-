<?php

    $arrNums = array(9863, 7127, 2020, 80, 131, 55, 100);
    $roundedNums = [];

    // Checks if the array values are odd numbers and round them
    foreach ($arrNums as $num){
        if ($num%2 == 0) {
            array_push($roundedNums, $num);
        } else {
            array_push($roundedNums, round($num, -1));
        }
    }

    sort($roundedNums);

    foreach ($roundedNums as $num){
        echo $num . "<br>";
    }
     
?>