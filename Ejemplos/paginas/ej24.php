<?php
    $familias = array(
        "Los Simpsons" => array(
            "padre" => "Homer",
            "madre" => "Marge",
            "hijo" => "Bart",
            "hija" => "Lisa",
            "bebe" => "Maggie",
        ),
        "Los Griffin" => array(
            "padre" => "Peter",
            "madre" => "Lois",
            "hijo" => "Chris",
            "hija" => "Megg",
            "bebe" => "Stewie",
        ),
    );
?>
<ul>
<?php
    foreach ($familias as $key1 => $value1) {
?>
    <li><?php echo $key1; ?>
        <ul>
<?php
        foreach ($familias[$key1] as $key2 => $value2) {
            ?>
            <li><?php echo $key2; ?> -> <?php echo $value2; ?></li>
        <?php
        }
?>
        </ul>
    </li>
<?php
    }
?>
</ul>