<?php
function firstDuplicate($a) {
    $repetidos=array_diff_assoc($a, array_unique($a));
    ksort($repetidos);
    return ($repetidos)?current($repetidos):-1;
}