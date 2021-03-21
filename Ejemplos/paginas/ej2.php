<?php
    $principal = "";
    $secundaria = "";
    $contSec = 3;

    $arr = $_POST["arr"];

    for($i = 0; $i < count($arr) ; $i++){
        $principal .= "[".$arr[$i][$i]."] ";
    }

    for($i = 0, $j = count($arr)-1; $i < count($arr) ; $i++, $j--){
        $secundaria .= "[".$arr[$i][$j]."] ";
    }    

    echo "La diagonal principal es: ".$principal."<br>";
    echo "La diagonal secundaria es: ".$secundaria;
?>