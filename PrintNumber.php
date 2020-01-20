<?php

Class PrintNumber{
    function printNumber($number = 100)
    {
        try {
            for ($i = 1; $i <= $number; $i++) {
                echo "\t";
                if ($i % 3 == 0 || $i % 5 == 0 || ($i % 3 == 0 && $i % 5 == 0)) {

                    ((($i % 3 == 0 && $i % 5 == 0) && print('Linianos')) || (($i % 3 == 0 && print('IT')) || ($i % 5 == 0 && print('Linio'))));

                    continue;
                }
                echo $i ;
            }
            return "Success";
        }catch (\Exception $e){
            return "Failed";
        }
    }
}