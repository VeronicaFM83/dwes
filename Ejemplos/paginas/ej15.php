<?php
    $array = array("Pedro", "Ismael", "Sonia", "Clara", "Susana", "Alfonso", "Teresa");
?>
    <ul>
<?php
    foreach ($array as $value) {
?>
        <li><?php echo $value; ?></li>
<?php
    }
?>
    </ul>