<?php
    $lenguajesServidor = array(
        "php" => "Hypertext Preprocessor",
        "j2EE" => "Java 2 Platform, Enterprise Edition",
        "asp" => "application service provider",
        "mySQL" => "Structured Query Language",
        "rb" => "Ruby on Rails",
    );

    $lenguajesCliente = array(
        "html" => "HyperText Markup Language",
        "css" => "Cascading Style Sheets",
        "js" => "JavaScript",
    );

    $lenguajes = array_merge($lenguajesCliente,$lenguajesServidor);
?>
<table border=1>
    <tr>
        <th>Extensión</th>
        <th>Lenguaje</th>
    </tr>
    <?php
        foreach ($lenguajes as $key => $value) {
    ?>
    <tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php
        }
    ?>
</table>