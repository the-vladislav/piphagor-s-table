<?php
    $first_value = (int)$_POST["first"];
    $second_value = (int)$_POST["second"];

    $html = "<table>";

    $html .= "<tr><th></th>";
    for ($i = $first_value; $i <= $second_value; $i++) {
        $html .= "<th>$i</th>";
    }
    $html .= "</tr>";

    $html .= "<tr>";
    for ($i = $first_value; $i <= $second_value; $i++) {
        $html .= "<tr><th>$i</th>";
        for ($j = $first_value; $j <= $second_value; $j++) {
            $result = $i * $j;
            $html .= "<td>$result</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</tr>";

    $html .= "</table>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Таблица Пифагора</title>
        <link rel="stylesheet" href="css/piphagor.css">
    </head>
    <body>
        <div class="titleBox">
            <h2>Таблица Пифагора</h2>
        </div>
        <div class="tableBox">
            <?php
                echo $html;
            ?>
        </div>
    </body>
</html>
