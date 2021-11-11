<?php 

    $colors = array('red', 'blue', 'black', 'blue', 'blue', 'red', 'gold');
    $uniqeColors = array_unique($colors);
    $nonRepeat = [];
    $outputColors = [];

    // Counts the number of occurence of each unique color
    foreach ($uniqeColors as $uniqueColor){
        $counter = 0;
        foreach ($colors as $color){
            if($uniqueColor == $color){
                $counter++;
                $nonRepeat[$color] = $counter;
            }
        }
    }

    // Places the least occuring colors to an array variable 
    foreach ($nonRepeat as $color => $value){
        if ($value < 2){
            array_push($outputColors, $color);
        }
    }

    // Prints the output to the screen
    foreach ($outputColors as $colors){
        echo $colors . "<br>";
    }
    
?>