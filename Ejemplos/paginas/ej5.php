<?php    
    $arr;
    
    for($i=0; $i<3; $i++){
        for($j=0; $j<5; $j++){
            $arr[$i][$j] = 0;
        }
    }

    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[0]);$j++){
            $arr[$i][$j] = ($j+1)+5;
        }
    }

    echo "Array:<br>";

?>
<table border=1>
<?php
    for($i=0;$i<count($arr[0]);$i++){
        echo "<tr>";
        for($j=0;$j<count($arr);$j++){
            echo "<td align='center'>".$arr[$j][$i]."</td>";
        }
        echo "</tr>";
    }
?>
</table>