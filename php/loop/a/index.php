<?php

    function sumEven(){
        
        $i =0;
        $sum = 0;

        while ($i < 11){
        //CHECK VALUE OF VARIABLE i WITH MODULO OPERATOR IF NUMBER IS EVEN
            if ($i%2 == 0){
                
                $sum = $sum + $i;
        
            }
        
            $i++;
        }
        
        return $sum;
    }
    
    echo sumEven();

?>