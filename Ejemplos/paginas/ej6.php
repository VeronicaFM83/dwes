<?php
    $arr = $_POST["arr"];

    $mayor = array(0,0,0,0);
    $avg = array(0,0,0,0);

    echo "Array:<br>";

?>
<table border = 1>
<?php
    for($i=0;$i<4;$i++){
        echo "<tr>";
        for($j=0;$j<3;$j++){
            if ($mayor[$i] < $arr[$i][$j]){
                $mayor[$i] = $arr[$i][$j];
            }
            $avg[$i] += $arr[$i][$j];
            echo "<td align='center'>".$arr[$i][$j]."</td>";
        }
        $avg[$i] /= 3;
        echo "</tr>";
    }
?>
</table>
<br><br>
<?php
    echo "Mayores   ------>  ";
    for($i = 0; $i<count($mayor); $i++){
        echo $mayor[$i].", ";
    }
    
    echo "<br>Media   ------>  ";
    for($i = 0; $i<count($avg); $i++){
        echo $avg[$i].", ";
    }
?>