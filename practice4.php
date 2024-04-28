<?php

function multiplicationTable($number) {
    echo "<table border=1>";
    for ($i = 0; $i <= $number; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= $number; $j++) {
            if ($i == 0 && $j == 0) {
                echo "<td></td>";
            } elseif ($i == 0) {
                echo "<td>$j</td>";
            } elseif ($j == 0) {
                echo "<td>$i</td>";
            } else {
                echo "<td>" . $i * $j . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
$size = isset($_POST['size']) ? intval($_POST['size']) : 0; // default size is 0
multiplicationTable($size);
?>