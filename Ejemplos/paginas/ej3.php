<?php
    $arr;

    for($i=0;$i<3;$i++){
        for($j=0;$j<5;$j++){
            $arr[$i][$j] = rand(0,100);
        }
    }

    echo "Array:<br>";

?>
<table border = 1>
<?php
    for($i=0;$i<count($arr);$i++){
        echo "<tr>";
        for($j=0;$j<count($arr[$i]);$j++){
            echo "<td align='center'>".$arr[$i][$j]."</td>";
        }
        echo "</tr>";
    }
?>
</table>
<br><br>Apartado a<br>
<?php
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
            echo $arr[$i][$j]." ";
        }
    }
?>
<br><br>Apartado b<br>
<?php
    for($i=0;$i<count($arr[0]);$i++){
        for($j=0;$j<count($arr);$j++){
            echo $arr[$j][$i]." ";
        }
    }
?>