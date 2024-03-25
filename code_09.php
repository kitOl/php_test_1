<?php

$string = "Long String";

echo "\n\n === Длина строки === \n";

echo strlen($string), "\n";

echo "\n\n === Получение символа строки === \n";

echo $string[0];
echo "\n";
echo $string[strlen($string) - 1];

echo "\n\n ===  Перебор строки === \n";

$out = "";
for ($i = 0; $i < strlen($string); $i++) {
    $out .= $string[$i] . "-";
}
echo $out;

echo "\n\n ===  Реверс строки === \n";

$out = "";
for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $out .= $string[$i];
}
echo $out;
echo "\n |- функция реверса \n";

echo strrev($string);

echo "\n\n ===  Перебор строки с перестановкой === \n";

$out = "";
for ($i = 0; $i < strlen($string); $i++) {
    if ($i % 2) {
        $_char = $string[$i];
        $out .= $string[$i + 1];
        $string[$i + 1] = $_char;
    } else {
        $out .= $string[$i];
    }
}
echo $out;

echo "\n\n ====  Поиск подстроки === \n";

$string = "Long String";
$result = str_contains($string, 'n');
var_dump($result);

$string = "Long String";
$result = str_contains($string, 'N'); // Регистрозависимая
var_dump($result);

$result = str_contains($string, 'ng');
var_dump($result);

$result = str_contains($string, 'w');
var_dump($result);

echo "\n\n ====  Поиск подстроки - индекс === \n";

$result = strpos($string, 'ng');
var_dump($result);

$result = strpos($string, 'N'); // Регистрозависимая
var_dump($result);

$result = strpos($string, 'w');
var_dump($result);

$result = stripos($string, 'N'); // РегистроНЕзависимая
var_dump($result);

// Реверсные функции (поиск с конца строки)

$result = strrpos($string, 'n'); // РегистроЗАвисимая
var_dump($result);

$result = strrpos($string, 'N'); // РегистроЗАвисимая
var_dump($result);

$result = strripos($string, 'N'); // РегистроЗАвисимая
var_dump($result);

echo "\n\n ==== Замена символа (подстроки) === \n";

$result = $string;
$result[4] = '|';
var_dump($result);

$result = str_replace('|', ' ', $string);
var_dump($string, $result);

echo "\n\n ==== Преобразование регистра симоволов === \n";

echo strtoupper($string);
echo "\n";

$result = strtolower($string);
echo $result, "\n";

echo ucfirst($result), "\n";

echo "\n\n ==== Удаление симоволов === \n";

$str = '  Trait it  ';
var_dump($str);

$out = trim($str);
var_dump($out);

$out = ltrim($str);
var_dump($out);

$out = rtrim($str);
var_dump($out);

echo "\n\n ==== Экранирование управляющих симоволов === \n";

$input = "Let's \ | 'come' /n together`";
$out = addslashes($input);
var_dump($input, $out);

$out = stripcslashes($out);
var_dump($out);

echo "\n\n ==== Экранирование тегов === \n";

$input = '<span><b>go went 444 price</b></span>';
$out = htmlspecialchars($input);
var_dump($out);

$html_strip = strip_tags($input);
var_dump($html_strip);

echo "\n\n ==== Форматирование вывода === \n";

$price = 122234.5558;
echo number_format($price, 2, ',', ' ');

echo "\n\n ==== Замена подстроки === \n";

$in = "Very cover lover";
echo str_ireplace('ve', 'ma', $in), "\n";
echo str_replace('ve', 'ma', $in), "\n";
