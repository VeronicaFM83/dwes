<?php
    $deportes = array("futbol", "baloncesto", "natación", "tenis");
    $puntero;

    for($i = 0; $i < count($deportes); $i++){
        echo $deportes[$i]."<br>";
    }

    echo "<br>El array contiene ".count($deportes)." elementos";
    
    $puntero = 0;
    echo "<br><br>Moviendo el puntero a la primera posición obtengo ".$deportes[$puntero];
    
    $puntero++;
    echo "<br><br>Moviendo el puntero una posición obtengo ".$deportes[$puntero];
    
    $puntero = count($deportes)-1;
    echo "<br><br>Moviendo el puntero a la última posicion y obtengo ".$deportes[$puntero];
    
    $puntero--;
    echo "<br><br>Moviendo retrocedo una posición el puntero y obtengo ".$deportes[$puntero];
?>