<?php

// $text = stream_get_contents(STDIN);
// fwrite(STDOUT, $text . PHP_EOL);
// fwrite(STDOUT, "Done" . PHP_EOL);


// $line = trim(fgets(STDIN)); // читает одну строку из STDIN
// echo "вывод строки >>> " . $line;

$num = fscanf(STDIN, "%d\n", $number); // читает число из STDIN
echo "вывод числа >>> " . $num;
