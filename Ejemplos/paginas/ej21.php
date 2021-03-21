<?php
    $estados_futbol = array(
        "Barcelona" => "Camp Nou",
        "Real Madrid" => "Santiago Bernabeu",
        "Valencia" => "Mestalla",
        "Real Sociedad" => "Anoeta",
    );
?>
<table border="1">
    <tr><th>Equipo de fútbol</th><th>Estadio</th></tr>
<?php
    foreach ($estados_futbol as $key => $value) {
?>
    <tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
<?php
    }
?>
</table>
<?php
    unset($estados_futbol["Real Madrid"]);
?>
<ol>
<?php
    foreach ($estados_futbol as $key => $value) {
?>
    <li><?php echo $key." - ".$value; ?></li>
<?php
    }
?>
</ol>