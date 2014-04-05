<?php

/**
 * a set of useful numbers defined as constants
 */
$weights_and_measures = array(
	"ONE_SECOND" => 1,
	"ONE_MINUTE" => 60,
	"ONE_HOUR"   => 3600,
	"ONE_DAY"    => 86400,
	"ONE_WEEK"   => 604800,
	"ONE_MONTH"  => 2419200,
	"ONE_K"      => 1000,
	"ONE_KB"     => 1024,
	"ONE_M"      => 1000000,
	"ONE_MB"     => 1048576,
	"ONE_G"      => 1000000000,
	"ONE_GB"     => 1073741824,
	"MYSQL_FORMAT_TIME"     => "H:i:s",
	"MYSQL_FORMAT_DATE"     => "Y-m-d",
	"MYSQL_FORMAT_DATETIME" => "Y-m-d H:i:s",
);

foreach($weights_and_measures as $key => $value){
	if(!defined($key)){
		define($key, $value);
	}
}

unset($weights_and_measures);