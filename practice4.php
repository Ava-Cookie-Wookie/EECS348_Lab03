<?php
$num = isset($_GET['num']) ? intval($_GET['num']) : 0;

if ($num > 0) {
    echo "<h2>Multiplication Table for $num</h2>";
    echo "<table border='1' cellpadding='5'>";

    echo "<tr><th>&times;</th>";
    for ($col = 1; $col <= $num; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    for ($row = 1; $row <= $num; $row++) {
        echo "<tr><th>$row</th>";
        for ($col = 1; $col <= $num; $col++) {
            echo "<td>" . ($row * $col) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Please enter a valid positive number.</p>";
}
?>