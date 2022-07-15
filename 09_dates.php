<?php

// Print current date

echo date('Y-m-d H:i:s').'<br>';

// Print yesterday
echo date('Y-m-d H:i:s', time() - 60*60*24).'<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('Y j M,H:i:s').'<br>';

// Print current timestamp
$time = date("H:i:s");
echo "The time is $time";

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$dateParsed = date_parse("2005-07-15 10:00:00");

echo '<pre>';
    var_dump($dateParsed);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

$date = "6.1.2009 13:00:00";
$datePasedFormat = date_parse_from_format("j n Y H:i:s",$date);

echo '<pre>';
    var_dump($datePasedFormat);
echo '</pre>';

?>