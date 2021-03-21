<?php
    $animales = array("Lagartija", "Araña", "Perro", "Gato", "Ratón");
    $numeros = array(12,34,45,52,12);
    $varios = array("Sauce", "Pino", "Naranjo", "Chopo", "Perro", 34);

    $mix = array_merge($animales,$numeros,$varios);
?>
<pre><?php var_export($mix); ?></pre>