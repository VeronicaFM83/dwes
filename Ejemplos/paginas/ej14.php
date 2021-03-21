<?php
    $array = array(
        "MD" => "Madrid", 
        "BC" => "Barcelona", 
        "LN" => "Londres", 
        "NY" => "New York", 
        "LA" => "Los Ángeles", 
        "CH" => "Chicago",
    );

    foreach ($array as $key => $value) {
        echo "La ciudad con el nombre ".$value." tiene la clave ".$key."<br>";
    }
?>