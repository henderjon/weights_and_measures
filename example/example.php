<?php

require "vendor/autoload.php";

date_default_timezone_set("America/Chicago");

$dt = new DateTime("Aug 13 1997 7:52pm");

// echo $dt->format(DATE_ATOM), PHP_EOL;
// echo $dt->format("U"), PHP_EOL;
echo "MYSQL_FORMAT_TIME:\t", $dt->format(\WM\MYSQL_FORMAT_TIME), PHP_EOL;
echo "MYSQL_FORMAT_DATE:\t", $dt->format(\WM\MYSQL_FORMAT_DATE), PHP_EOL;
echo "MYSQL_FORMAT_DATETIME:\t", $dt->format(\WM\MYSQL_FORMAT_DATETIME), PHP_EOL;
echo "ISO_YEARWEEK:\t", $dt->format(\WM\ISO_YEARWEEK), PHP_EOL;
echo "ISO_YEARWEEKDAY:\t", $dt->format(\WM\ISO_YEARWEEKDAY), PHP_EOL;
echo "ISO8601_YEARWEEK:\t", $dt->format(\WM\ISO8601_YEARWEEK), PHP_EOL;
echo "ISO8601_YEARWEEK_ALT1:\t", $dt->format(\WM\ISO8601_YEARWEEK_ALT1), PHP_EOL;
echo "ISO8601_YEARWEEKDAY:\t", $dt->format(\WM\ISO8601_YEARWEEKDAY), PHP_EOL;
echo "ISO8601_YEARWEEKDAY_ALT1:\t", $dt->format(\WM\ISO8601_YEARWEEKDAY_ALT1), PHP_EOL;
echo "DATETIME_FILENAME:\t", $dt->format(\WM\DATETIME_FILENAME), PHP_EOL;
echo "DATETIME_FILENAMEZ:\t", $dt->format(\WM\DATETIME_FILENAMEZ), PHP_EOL;














