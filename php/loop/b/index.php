<?php
    
    function printOdd(){
        //VARIABLE DECLARATION
        $i = 0;

        do {
        //CHECK IF THE VALUE OF i USING MODULO OPERATOR IF NUMBER IS ODD
            if ($i%2 != 0){    
                echo $i . "<br>";
            }

            $i++;
        } while($i<11);
    }
    //EXECUTE FUNCTION
    printOdd();

?>