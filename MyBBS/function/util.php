<?php

// レイアウト崩れを防ぐ為にタスク名を短縮
function name_short($name, $nameLength){
    if (mb_strlen($name) > $nameLength) {
        return mb_substr($name, 0, $nameLength) . '...';
    }elseif (mb_strlen($name) <= $nameLength) {
        return $name;
    }
}