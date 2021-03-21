<?php
    $arr;

    for($i=0; $i<10; $i++){
        for($j=0; $j<10; $j++){
            $arr[$i][$j] = rand(1,999);
        }
    }

    $mayor = 0;
    $fila = 0;
    $columna = 0;

    for($i=0;$i<count($arr);$i++){
        if($mayor < max($arr[$i])){
            $mayor = max($arr[$i]);
            $fila = $i;
            for($j=0;$j<count($arr[$i]);$j++){
                if($mayor == $arr[$i][$j]){
                    $columna = $j;
                }
            }
        }
    }

    echo "Array:<br>";

?>
<table border = 1>
<?php
    for($i=0;$i<count($arr);$i++){
        echo "<tr>";
        for($j=0;$j<count($arr[0]);$j++){
            if($fila == $i or $columna == $j){
                echo "<td align='center' style='background-color: steelblue; color:white;'>".$arr[$i][$j]."</td>";
            }else{
                echo "<td align='center'>".$arr[$i][$j]."</td>";
            }            
        }
        echo "</tr>";
    }
?>
</table>