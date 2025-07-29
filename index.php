<?php


$numDividend = null;

$numDivisor = null;


function numberRequest($text) {

    echo $text . PHP_EOL;
    $num = fgets(STDIN);

    $num = intval(trim($num));

    echo gettype($num) . "\n". $num . PHP_EOL;

    return $num;
}


function variableCheck($variable) {

    if (is_int($variable)) {
        fwrite(STDERR, "Целое число\n");

        return true;
    } elseif (is_float($variable)) {
        fwrite(STDERR, "Дробное число\n");

        return false;
    }

    fwrite(STDERR, "Это не число\n");

    return false;
}

function saveVariable(){

}


function main($message) {
    // Запрашиваем делимое
    $request = numberRequest($message);

    // Проверяем переменную на соответствие `int`
    $validationStatus = variableCheck($request);
    echo $validationStatus . PHP_EOL;
}

$message = "Введите делимое число";
main($message);

// echo "Проверка скрипта numDividend >>>" . $numDividend . PHP_EOL;
