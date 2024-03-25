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
