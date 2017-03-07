<?php

namespace WM;

/**
 * time
 */
const ONE_SECOND_NANO  = 1000000000; // one second in microseconds
const ONE_SECOND_MICRO = 1000000; // one second in microseconds
const ONE_SECOND       = 1;
const ONE_MINUTE       = 60;
const ONE_HOUR         = 3600;
const ONE_DAY          = 86400;
const ONE_WEEK         = 604800;
const ONE_MONTH        = 2419200;

/**
 * size
 */
const ONE_K  = 1000;
const ONE_KB = 1024;
const ONE_M  = 1000000;
const ONE_MB = 1048576;
const ONE_G  = 1000000000;
const ONE_GB = 1073741824;

/**
 * formats
 */
const MYSQL_FORMAT_TIME        = "H:i:s";
const MYSQL_FORMAT_DATE        = "Y-m-d";
const MYSQL_FORMAT_DATETIME    = "Y-m-d H:i:s";
const ISO_YEARWEEK             = "oW";
const ISO_YEARWEEKDAY          = "oWN";
const ISO8601_YEARWEEK         = "o-\WW";
const ISO8601_YEARWEEK_ALT1    = "o\WW";
const ISO8601_YEARWEEKDAY      = "o-\WW-N";
const ISO8601_YEARWEEKDAY_ALT1 = "o\WWN";
const DATE_FILENAME            = "Ymd";
const TIME_FILENAME            = "His";
const DATETIME_FILENAME        = "Ymd\THis";
const DATETIME_FILENAMEZ       = "Ymd\THisO";

/**
 * http://us3.php.net/manual/en/class.datetime.php#datetime.constants.types
 *
 * DateTime::ATOM    -- DATE_ATOM    -- Atom (example: 2005-08-15T15:52:01+00:00)
 * DateTime::COOKIE  -- DATE_COOKIE  -- HTTP Cookies (example: Monday, 15-Aug-05 15:52:01 UTC)
 * DateTime::ISO8601 -- DATE_ISO8601 -- ISO-8601 (example: 2005-08-15T15:52:01+0000)
 * DateTime::RFC822  -- DATE_RFC822  -- RFC 822 (example: Mon, 15 Aug 05 15:52:01 +0000)
 * DateTime::RFC850  -- DATE_RFC850  -- RFC 850 (example: Monday, 15-Aug-05 15:52:01 UTC)
 * DateTime::RFC1036 -- DATE_RFC1036 -- RFC 1036 (example: Mon, 15 Aug 05 15:52:01 +0000)
 * DateTime::RFC1123 -- DATE_RFC1123 -- RFC 1123 (example: Mon, 15 Aug 2005 15:52:01 +0000)
 * DateTime::RFC2822 -- DATE_RFC2822 -- RFC 2822 (Mon, 15 Aug 2005 15:52:01 +0000)
 * DateTime::RFC3339 -- DATE_RFC3339 -- Same as DATE_ATOM (since PHP 5.1.3)
 * DateTime::RSS     -- DATE_RSS     -- RSS (Mon, 15 Aug 2005 15:52:01 +0000)
 * DateTime::W3C     -- DATE_W3C     -- World Wide Web Consortium (example: 2005-08-15T15:52:01+00:00)
 *
 */




