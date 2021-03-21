<?php
    $arr = array();
    $numeros = 1;
    $cont = 0;

    do{
        if($numeros%2 == 0){
            array_push($arr,$numeros);
            $cont++;
        }
        $numeros++;
    }while($cont != 10);

    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i]."<br>";
    }
?>