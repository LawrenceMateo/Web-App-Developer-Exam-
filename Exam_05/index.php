<?php

    function stringReversal($str){
        
        $reverse = "";
        // Concatinates the letters from end to star of the string
        for ( $i=(strlen($str) -  1); $i>=0; $i-- ){
            $reverse = $reverse.$str[$i];
        }

        return $reverse;
    }

    echo stringReversal('Car');

?>