<?php
    
    function fibonacciSequence(){
        
        $prevNum = 0;
        $nextNum = 1;
        $fibonacciNumber = 0;
        
        for($i=0; $i<10; $i++){
            
            /*
            prevNum HOLDS THE PREVIOUS VALUE OF THE SUM OF THE NEXT NUNNMBER 
            AND THE FIBONACCI NUNMBER, THEN PRINTS THE RESULT
            */
            echo $fibonacciNumber . "<br>";
            $prevNum = $fibonacciNumber + $nextNum;
            $fibonacciNumber = $nextNum;
            $nextNum = $prevNum;
        }
    }

    fibonacciSequence();

?>