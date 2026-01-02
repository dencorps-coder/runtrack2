<?php

$bool = true;
$int = 10;
$string = "Bonjour";
$float = 3.14;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 03</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>boolean</td>
            <td>$bool</td>
            <td><?php echo $bool; ?></td>
        </tr>
        <tr>
            <td>integer</td>
            <td>$int</td>
            <td><?php echo $int; ?></td>
        </tr>
        <tr>
            <td>string</td>
            <td>$string</td>
            <td><?php echo $string; ?></td>
        </tr>
        <tr>
            <td>float</td>
            <td>$float</td>
            <td><?php echo $float; ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
