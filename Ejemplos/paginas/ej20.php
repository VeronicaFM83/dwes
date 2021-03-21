<?php
    $animales = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");
    $numeros = array(12,34,45,52,12);
    $varios = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", 34);

    $mix = array();
    
    foreach ($animales as $value) {
        array_push($mix, $value);
    }
    
    foreach ($numeros as $value) {
        array_push($mix, $value);
    }
    
    foreach ($varios as $value) {
        array_push($mix, $value);
    }

    $mix = array_reverse($mix);
?>
<pre><?php var_export($mix); ?></pre>