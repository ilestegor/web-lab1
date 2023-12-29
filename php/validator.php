<?php

function checkInput($x, $y): bool {

    if (!is_numeric($x) && !is_numeric($y)){
        return false;
    }
    if (!isset($x)){
        return false;
    }
    if ($y < -3 || $y > 3){
        return false;
    }
    return true;
}
