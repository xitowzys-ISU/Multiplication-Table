<?php
include("./multiplicationTable.php");

// Функция создание таблицы умножения
$multiplicationTable = createMultiplicationTable();

echo '<table>';

foreach ($multiplicationTable as $keyRow => $row) {

    echo '<tr>';

    foreach ($row as $keyCells => $cell)
        echo '<td style="background-color:', $cell['background'], '">' . $cell['number'] . '</td>';

    echo "</tr>";
}

echo '</table>';
