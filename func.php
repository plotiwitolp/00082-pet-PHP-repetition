<?php
function foo_fum()
{
    global $x;
    $x .= ' рублей';
    return $x;
}

function show_login()
{
    return LOGIN;
}

function count_up()
{
    static $count = 0;
    $count++;
    echo $count;
}
