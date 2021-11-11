<?php
$cities = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Калининградская область' => ['Калининград', 'Озерск', 'Светлогорск', 'Черняховск', 'Гусев']
];

function showCity($arr) {
    foreach ($arr as $key => $value) {
        echo $key . PHP_EOL;
        for ($i = 0; $i < $arrLength = count($arr[$key]); $i++)  {
            if ($i == $arrLength - 1) {
                echo $arr[$key][$i] . '.' . PHP_EOL;
            } else echo $arr[$key][$i] . ', ';
            
        }
    }
}
showCity($cities);