<?php
    $mesPelicula = array(
        "enero" => 9,
        "febrero" => 12,
        "marzo" => 0,
        "abril" => 17,
    );

    foreach ($mesPelicula as $key => $value) {
        if($value != 0){
            echo "En ".$key." he visto ".$value." películas<br>";
        }
    }
?>