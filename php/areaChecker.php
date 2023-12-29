<?php

function secondQuarter($x, $y, $r): bool{
    return ($y <= $r/2 + $x/2) && ($x <= 0 && $y >= 0);
}

function thirdQuarter($x, $y, $r): bool{
    return ($x >= -$r/2) && ($y >= -$r) && ($x <= 0 && $y <= 0);
}

function fourthQuarter($x, $y, $r): bool{
    return ($x * $x + $y * $y <= ($r * $r)/4) && ($x > 0 && $y<= 0);
}

function checkArea($x, $y, $r): string{
    if (secondQuarter($x, $y, $r)){
        return "2️⃣";
    }
    if (thirdQuarter($x, $y, $r)){
        return "3️⃣";
    }
    if (fourthQuarter($x, $y, $r)){
        return "4️⃣";
    }
    return "⛔️";
}

