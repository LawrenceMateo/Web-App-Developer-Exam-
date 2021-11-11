<?php

    $names = array('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');
    $uniqueNames = array_unique($names);
    $valuePairs = [];

    // Checks each occurence of names based on the unique names
    
    foreach ($uniqueNames as $name){
        $numOccured = 0;
        foreach ($names as $occurence){
            if ($occurence == $name){
                $numOccured++;
                if ($numOccured > 1){
                    $valuePairs[$name] = $numOccured;
                }
            }
        }
    }

    // Sort items in valuePairs variable based on the key
    ksort($valuePairs);

    foreach ($valuePairs as $key => $value){
        echo $key . "<br>";
    }
    
?>