<?php
    function isFibonacci($val){
    
        for ($i=1; $i<=$val; $i++){

            $numSqr = ((5*$i*$i)+4);
            $numSqr2 = ((5*$i*$i)-4);

            // Square roots the numSqr and numSqr2
            $sqr = sqrt($numSqr);
            $sqr2 = sqrt($numSqr2);

            // Checks if values are perfect squares
            if ( $sqr == floor($sqr) || $sqr2 == floor($sqr2) ){
                echo $i." is a Fibonacci Number<br>";
            } else {
                echo $i." is not a Fibonacci Number<br>";
            }
        }
    }

    echo isFibonacci(21);

?>