<?php
    $agenda = array(
        "Madrid" => array(
            "Nombre" => "Pedro",
            "Edad" => 32,
            "Teléfono" => "91-999.99.99",
        ),
        "Barcelona" => array(
            "Nombre" => "Susana",
            "Edad" => 34,
            "Teléfono" => "93-000.00.00",
        ),
        "Toledo" => array(
            "Nombre" => "Sonia",
            "Edad" => 42,
            "Teléfono" => "925-09.09.09",
        ),
    );
?>
<ul>
<?php
    foreach ($agenda as $key1 => $value1) {
?>
    <li><?php echo $key1; ?>
        <ul>
<?php
        foreach ($agenda[$key1] as $key2 => $value2) {
            ?>
            <li><?php echo $key2; ?>: <?php echo $value2; ?></li>
        <?php
        }
?>
        </ul>
    </li>
<?php
    }
?>
</ul>