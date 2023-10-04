<?php
    $year = 2020;
    $rem=$year%4;

    if ($rem == 0) 
    {
       echo $year." is a leap year.";
    } 
    else 
    {
       echo $year." is not a leap year.";
    }
?>