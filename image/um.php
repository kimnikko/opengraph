<?php

// Osirish Library
function fetch_value($str, $find_start, $find_end) {
    $find_start = str_replace(array('\"', "\'"), array('"', "'"), $find_start);
    $find_end = str_replace(array('\"', "\'"), array('"', "'"), $find_end);
    $start = @strpos($str, $find_start);
    if ($start === false) {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str, $start + $length), $find_end);
    return trim(substr($str, $start + $length, $end));
}



while (true) {

echo "\nMasukan Link: ";

$a = trim(fgets(STDIN));
echo "Masukan Nama: ";
$i = trim(fgets(STDIN));
$b = fetch_value(file_get_contents($a),'<meta property="og:image" content="','" />');
$c = system("wget {$b} -O {$i}");
}
