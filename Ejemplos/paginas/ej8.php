<?php
    $arr;

    for($i=0; $i<20; $i++){
        for($j=0; $j<20; $j++){
            $arr[$i][$j] = rand(1,100);
        }
    }

    $suma = 0;
    $mayor = 0;
    $columna = 0;

    for($i=0; $i<count($arr[0]); $i++){
        for($j=0; $j<count($arr); $j++){
            $suma += $arr[$j][$i];
        }
        if($suma > $mayor){
            $mayor = $suma;
            $columna = $i;
        }
        $suma = 0;
    }

    echo "Array:<br>";

?>
<table border = "1" style="margin:0px; padding:0px;">
<?php
    for($i=0;$i<count($arr);$i++){
        echo "<tr style=''>";
        for($j=0;$j<count($arr[0]);$j++){
            if($columna == $j){
                echo "<td align='center' style='margin:0px; padding:0px; background-color: steelblue; color:white;'>".$arr[$i][$j]."</td>";
            }else{
                echo "<td align='center'style='margin:0px; padding:0px;'>".$arr[$i][$j]."</td>";
            }            
        }
        echo "</tr>";
    }
?>
    <tr style="border-top: 1px solid red;">
<?php
    for($i=0;$i<count($arr);$i++){
        if($i == $columna){
            echo "<td>".$mayor."</td>";
        }else{
            echo "<td></td>";
        }
    }
?>
    </tr>
</table>