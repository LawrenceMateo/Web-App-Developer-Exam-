<?php

    function isPalindrome($val) {
        //Removes white spaces from the string
        $string = str_replace(' ', '', $val);
        
        /*
        Compares the first and the last letters of the string through the middle 
        */ 
        
        for ($i=0; $i<strlen($string); $i++){
            if ($string[$i] != $string[(strlen($string) - 1)- $i]){
                return false;
            }
        }

        return true;
    }

    if(isPalindrome('mada mn')){
        echo 'Palindrome';
    } else {
        echo 'Not Palindrome';
    }
    
?>