<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    function printArr($number)
    {
        foreach ($number as $num)
        {
            echo $num . "<br>";
        }
    }

    function largest($number)
    {
        echo 'The largest value in the array is ' . max($number ) . '.<br>';
    }

    function average($number)
    {
        $counter = count($number);
        $average = array_sum($number)/$counter;
        echo 'The average of the values is ' . $average . '.<br>';
    }

    function removeDups($number)
    {
        $numb = array_unique($number);
        echo 'After remove duplicate numbers ' . '<br>';
        foreach ($numb as $num)
        {
            echo $num . '<br>';
        }
    }