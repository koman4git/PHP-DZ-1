<?php
$menuArr = [
    'Item 1',
    'Item 2' => ['Subitem 1', 'Subitem 2', 'Subitem 3'],
    'Item 3' => ['Subitem 4' => ['One level deeper 1', 'One level deeper 2']]
];

function menuRender($arr)
{

    if (!is_array($arr)) {
        return 'incorrect argument';
    }

    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {
        //перебираем массив, если значение - массив, то обрабатываем его нашей функцией
        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menuRender($menuArr);