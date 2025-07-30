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


function numberRequest($key_msg) {
    global $listMsg;

    echo $listMsg[$key_msg] . PHP_EOL;

    $num = trim(fgets(STDIN));

    $check = variableCheck($num);

    if (!$check && $num !== "0") {
        return numberRequest($key_msg);
    }

    return $check;
}


function variableCheck($variable) {
    global $listMsg;

    $num = intval($variable);

    if ($num === 0) {
        fwrite(STDERR, $listMsg["err_input_num"] . PHP_EOL);
        return false;
    }

    return $num;
}


function main($key_msg, $key_variable) {
    global $listValue;

    $request_num = numberRequest($key_msg);

    $listValue[$key_variable] = $request_num;

    // $validationStatus = variableCheck($request, $key_msg);

    // echo "result main>>> " . $request_num . PHP_EOL;
}


main("input_dividend", "dividend");

print_r($listValue);

?>
