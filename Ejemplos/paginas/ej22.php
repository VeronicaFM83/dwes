<?php
    $numeros=array(3,2,8,123,5,1);
    asort($numeros);
?>
<table border="1">
<?php
    foreach ($numeros as $value) {
?>
    <tr>
        <td><?php echo $value; ?></td>
    </tr>
<?php
    }
?>
</table>