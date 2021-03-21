<?php
    $array = array();
    $avg = 0;
    $contador = 0;

    for($i = 1; $i <= 10; $i++){
        array_push($array,$i);
    }

    for($i = 0; $i < count($array); $i++){
        if($i%2 != 0){
            $avg += $array[$i];
            $contador++;
        }else{
            echo $array[$i]." ";
        }
    }

    echo "<br><br>Media de los pares: ".($avg/$contador);
?>