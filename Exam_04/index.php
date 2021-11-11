<?php

    function dateDifference($date1, $date2){
        
        // Absolute value of the difference of the dates
        $diff = abs(strtotime($date2) - strtotime($date1));
        
        // Calculates each date by year, month and days
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

        return $years . " Years," . $months . " Months," . $days . " Days";

    }

    echo dateDifference('2020-01-01', '2019-12-31');
?>