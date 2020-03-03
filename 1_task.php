<?php

function getPairs(array $arr1, array $arr2)
{
    $map = [];
    foreach ($arr1 as $i) {
        list($id, $login) = $i;
        $map[$login] = $id;
    }

    $pairs = [];
    foreach ($arr2 as $v) {
        list($id, $login) = $v;
        if (isset($map[$login])) {
            $pairs[] = [$map[$login], $id];
        }
    }
    return $pairs;
}
