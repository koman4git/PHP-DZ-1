<?php
function myTime($hour, $minute) {
    $resulth = ($hour <= 10) ? $hour % 10 : $hour % 20;
    switch ($resulth) {
        case 1:
            echo "$hour час";
            break;
        case 2:
        case 3:
        case 4:
            echo "$hour часа";
            break;
        default:
            echo "$hour часов";
            break;
    }
    $resultm = ($minute <= 10) ? $minute % 10 : $minute % 20;
    switch ($resultm) {
        case 1:
            return "$minute минута";
        case 2:
        case 3:
        case 4:
            return "$minute минуты";
        default:
            return "$minute минут";
    }
}
date_default_timezone_set('Europe/Moscow');
$hour = date('H');
$minute = date('i');
echo myTime($hour, $minute);