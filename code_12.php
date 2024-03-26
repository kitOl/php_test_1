<?php

require_once './utility.php';

cls("array_push() examples");

$arrayFirst = [22, 33, 44];

$res = array_push($arrayFirst, 55, 66);
print_r($arrayFirst);
echo $res, "\n";

$res = array_push($arrayFirst);
print_r($arrayFirst);
echo $res, "\n";

cls("array_pop() examples");

print_r($arrayFirst);
$res = array_pop($arrayFirst);
print_r($arrayFirst);
echo $res, "\n";

cls("array_unshift() function");

print_r($arrayFirst);
$res = array_unshift($arrayFirst, -5, -7);
print_r($arrayFirst);
echo $res, "\n";

$arrayFirst[100] = 88;
print_r($arrayFirst);
$res = array_unshift($arrayFirst, -55, -77);
print_r($arrayFirst);
echo $res, "\n";

cls("array_shift() function");

print_r($arrayFirst);
$res = array_shift($arrayFirst);
print_r($arrayFirst);
echo $res, "\n";

cls("in_array() - searching in array");

print_r($arrayFirst);
$res = in_array('55', $arrayFirst);
print_r($arrayFirst);
var_dump($res);
// echo $res, "\n";

$res = in_array('55', $arrayFirst, true);
print_r($arrayFirst);
var_dump("true option", $res);

$res = in_array(55, $arrayFirst);
print_r($arrayFirst);
var_dump($res);

cls("array_search()");

$res = array_search(55, $arrayFirst);
print_r($arrayFirst);
var_dump($res);

$res = array_search(5, $arrayFirst);
print_r($arrayFirst);
var_dump($res);

cls("array_unique()");

$arrayFirst = [2, 3, 55, 3, '2', 6, 8];

$res = array_unique($arrayFirst);
print_r($arrayFirst);
var_dump($res);

cls("array_filter()");

$arrayFirst = [22, 33, 55, 77, 99, 12];

function moreThan60($value)
{
    return $value > 60;
}

$res = array_filter($arrayFirst, 'moreThan60');
var_dump($res);

$res = array_filter($arrayFirst, function ($value) {
    return $value > 30;
});
var_dump($res);

$res = array_filter($arrayFirst, function ($value) {
    return $value > 100;
});
var_dump($res);

cls("array_map()");

$arrayFirst = [11, 22, 33];
$res = array_map(function ($value) {
    return $value + 1;
}, $arrayFirst);
print_r($res);
