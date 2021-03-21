<div style="position: absolute; top: 0px; left 0px;">
    <pre>
        <?php
            $array = array("Pedro","Ana",34,1);

            echo "Con print_r: <br><br>";
            print_r($array);

            echo "<br><br>Con var_dump: <br><br>";
            var_dump($array);

            echo "<br><br>Con var_export: <br><br>";
            var_export($array);
        ?>
    </pre>
</div>
<div style="position: absolute; top:140px; left: 200px;">
    La función print_r() nos muestra los valores del array mostrando las claves entre corchetes y 
    los valores asignados tras una flecha.
    <br><br><br><br><br><br><br><br><br><br>
    La función var_dump() nos muestra de forma más detallada el contenido del array. Muestra la dimensión, las claves 
    entre corchetes, y el valor almacenado seguido de una flecha y el tipo de contenido. 
    <br><br><br><br><br><br><br><br>
    Por último la función var_export() nos muestra de forma similar a print_r() el array, la única diferencia son los 
    corchetes de las claves, que no aparecen.
</div>