<?php

define('DS', '/');


function menu($menu)
{

    echo "<ul>";
    foreach ($menu as $key => $value) {
        echo sprintf("<li><a href='?id=%s'>%s</a></li>", $key, $value);
    }
    echo "</ul>";
}

function menuReq($menu)
{

    echo "<ul>";
    foreach ($menu as $key => $value) {
        if (!isset($value['sub']))
            echo sprintf("<li><a href='?id=%s'>%s</a></li>", $value['href'], $key);
        else {
            echo "<li>";
            menuReq($value['sub']);
            echo "</li>";
        }

    }
    echo "</ul>";
}

function tableMul($x, $y, $color = 'aqua')
{
    echo "<table border='1'>";
    for ($i = 1; $i < $x; $i++) {
        echo "<tr>";
        for ($j = 1; $j < $y; $j++) {
            if ($i == 1 || $j == 1) {
                echo "<th bgcolor='$color'>" . $i * $j . "</th>";
            } else {
                echo "<td>" . $i * $j . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
