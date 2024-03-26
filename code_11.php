<?php

require_once './utility.php';

$arrayFirst = [22, 33, 44];

// var_dump($arrayFirst);
print_r($arrayFirst);

$arrayFirst[10] = 100;
print_r($arrayFirst);

unset($arrayFirst[10]);
print_r($arrayFirst);

cls("Удаляем элемент с индексом 0");
unset($arrayFirst[0]);
print_r($arrayFirst);

$arrayFirst[] = 100;
print_r($arrayFirst);

echo sizeof($arrayFirst), "\n";

cls("Перебор массива");

$arraySecond = [];
print_r($arraySecond);
for ($i = 0; $i < 10; $i++) {
    $arraySecond[] = $i + 10;
}
print_r($arraySecond);
echo "array length: ", count($arraySecond), "\n";

$arraySecond[100] = 50;
echo "array length: ", count($arraySecond), "\n";

foreach ($arraySecond as $key => $value) {
    echo "[$key]: ", $value, "\n";
}

cls("Выход из цикла перебора элементов по условию");
$i = 0;
$stop = 4;
foreach ($arraySecond as $value) {
    echo $value, "\n";
    $i++;
    if ($i === $stop) {
        break;
    }
}

cls("Сумма и произведение элементов массива");

$sum = 0;
$multi = 1;
foreach ($arraySecond as $value) {
    $sum += $value;
    $multi *= $value;
}
echo "Сумма элементов: ", $sum, "\n";
echo "Произведение элементов: ", $multi, "\n";

cls("Минимальный и максимальный элементы");

$i = 0;
foreach ($arraySecond as $key => $value) {
    if ($i == 0) {
        $min = $value;
        $indexMin = $key;
        $max = $value;
        $indexMax = $key;
        $i++;
    }
    if ($value > $max) {
        $max = $value;
    }
    if ($min > $value) {
        $min = $value;
    }
}
echo "min: ", $min, "\n";
echo "max: ", $max, "\n";

cls("Добавление элементов в конец массива");

$arrayFirst = [5, -23, 4, 55];
array_push($arrayFirst, 66, 77);
print_r($arrayFirst);

cls("Выборка из массива");

$arrayFirst = [2, 3, 5, 4, 10, 7, 6, 6, 7];
$result = [];
foreach ($arrayFirst as $value) {
    if ($value % 2) {
        continue;
    }
    $result[] = $value;
    // array_push($temp, $value);
}
$arrayFirst = $result;
print_r($arrayFirst);
