<?php

    $arr_double = [

        [1 ,2 , 3] , [4 ,5 , 6]

    ];

    for($i = 0 ; $i <= (count($arr_double) -1 );$i++){

        for($z = 0;$z<=(count($arr_double[$i]) - 1) ;$z++){

            echo $arr_double[$i][$z]."</br>";


        }
        

    }

?>