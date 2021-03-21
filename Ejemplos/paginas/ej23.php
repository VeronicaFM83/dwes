<?php
    $array = array(
        5 => 1, 
        12 => 2, 
        13 => 56, 
        "x" => 42,
    );
?>
<pre><?php var_export($array); ?></pre><br>

<?php
    echo "El array contiene ".count($array)." elementos";

    unset($array[5]);
?>

<br><pre><?php var_export($array); ?></pre><br>

<?php
    unset($array);
?>

<br><pre><?php var_export($array); ?></pre>