<?php

$listMsg = array(
    "input_dividend" => "Введите делимое число",
    "input_divisor" => "Введите делитель",
    "err_input_num" => "Введенное значение не число",
    "err_zero" => "Делить на 0 нельзя",
);

$listValue = array(
    "dividend" => null,
    "divisor" => null,
);


function numberRequest($key_msg)
{
    global $listMsg;

    echo $listMsg[$key_msg] . PHP_EOL;

    $num = trim(fgets(STDIN));

    return $num;
}


function variableCheck($variable, $key_variable)
{
    global $listMsg;

    $num = intval($variable);

    if ($num === 0 && $variable !== "0") {
        fwrite(STDERR, $listMsg["err_input_num"] . PHP_EOL);
        return false;
    }

    if ($variable === "0" && $key_variable === "divisor") {
        fwrite(STDERR, $listMsg["err_zero"] . PHP_EOL);
        return false;
    }

    return $num;
}


function main($key_msg, $key_variable)
{
    global $listValue;

    $request_num = numberRequest($key_msg);

    $validationStatus = variableCheck($request_num, $key_variable);

    if ($validationStatus === false) {
        return main($key_msg, $key_variable);
    }

    $listValue[$key_variable] = $request_num;

    return;
}


main("input_dividend", "dividend");

main("input_divisor", "divisor");

$divisionResult = $listValue["dividend"] / $listValue["divisor"];

fwrite(STDOUT, "Результат деления >>> $divisionResult\n");

?>
