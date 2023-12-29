<?php

require_once "validator.php";
require_once "areaChecker.php";

$start = microtime(true);
$current_time = date("H:i:s");


if (isset($_GET['x']) && isset($_GET['y']) && isset($_GET['r'])){
    $x = htmlentities($_GET['x']);
    $y = htmlentities($_GET['y']);
    $r = htmlentities($_GET['r']);

    if (checkInput($x, $y)){
        $result = checkArea($x, $y, $r);
        $end = round(microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"], 5);
        echo '<tr>
    <td>' . $x . ' </td>
    <td>' . $y . '</td>
    <td> ' . $r . '</td>
    <td>' . $current_time . '</td>
    <td>' . $end. '</td>
    <td>' . $result . '</td>
</tr>';
    }
}