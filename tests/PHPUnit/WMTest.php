<?php

date_default_timezone_set("America/Chicago");

class WMTest extends PHPUnit_Framework_TestCase {
	function test_1(){

		$dt = new DateTime("Jan 1 2016 11:11am");

		$this->assertEquals("2016-01-01T11:11:00-06:00", $dt->format(DATE_ATOM));
		$this->assertEquals("1451668260", $dt->format("U"));
		$this->assertEquals("11:11:00", $dt->format(\WM\MYSQL_FORMAT_TIME), "failure: MYSQL_FORMAT_TIME");
		$this->assertEquals("2016-01-01", $dt->format(\WM\MYSQL_FORMAT_DATE), "failure: MYSQL_FORMAT_DATE");
		$this->assertEquals("2016-01-01 11:11:00", $dt->format(\WM\MYSQL_FORMAT_DATETIME), "failure: MYSQL_FORMAT_DATETIME");
		$this->assertEquals("201553", $dt->format(\WM\ISO_YEARWEEK), "failure: ISO_YEARWEEK");
		$this->assertEquals("2015535", $dt->format(\WM\ISO_YEARWEEKDAY), "failure: ISO_YEARWEEKDAY");
		$this->assertEquals("2015-W53", $dt->format(\WM\ISO8601_YEARWEEK), "failure: ISO8601_YEARWEEK");
		$this->assertEquals("2015W53", $dt->format(\WM\ISO8601_YEARWEEK_ALT1), "failure: ISO8601_YEARWEEK_ALT1");
		$this->assertEquals("2015-W53-5", $dt->format(\WM\ISO8601_YEARWEEKDAY), "failure: ISO8601_YEARWEEKDAY");
		$this->assertEquals("2015W535", $dt->format(\WM\ISO8601_YEARWEEKDAY_ALT1), "failure: ISO8601_YEARWEEKDAY_ALT1");
		$this->assertEquals("20160101", $dt->format(\WM\DATE_FILENAME), "failure: DATETIME_FILENAME");
		$this->assertEquals("111100", $dt->format(\WM\TIME_FILENAME), "failure: DATETIME_FILENAME");
		$this->assertEquals("20160101T111100", $dt->format(\WM\DATETIME_FILENAME), "failure: DATETIME_FILENAME");
		$this->assertEquals("20160101T111100-0600", $dt->format(\WM\DATETIME_FILENAMEZ), "failure: DATETIME_FILENAMEZ");

	}

	function test_2(){

		$dt = new DateTime("Aug 13 1997 7:52pm");

		$this->assertEquals("1997-08-13T19:52:00-05:00", $dt->format(DATE_ATOM));
		$this->assertEquals("871519920", $dt->format("U"));
		$this->assertEquals("19:52:00", $dt->format(\WM\MYSQL_FORMAT_TIME), "failure: MYSQL_FORMAT_TIME");
		$this->assertEquals("1997-08-13", $dt->format(\WM\MYSQL_FORMAT_DATE), "failure: MYSQL_FORMAT_DATE");
		$this->assertEquals("1997-08-13 19:52:00", $dt->format(\WM\MYSQL_FORMAT_DATETIME), "failure: MYSQL_FORMAT_DATETIME");
		$this->assertEquals("199733", $dt->format(\WM\ISO_YEARWEEK), "failure: ISO_YEARWEEK");
		$this->assertEquals("1997333", $dt->format(\WM\ISO_YEARWEEKDAY), "failure: ISO_YEARWEEKDAY");
		$this->assertEquals("1997-W33", $dt->format(\WM\ISO8601_YEARWEEK), "failure: ISO8601_YEARWEEK");
		$this->assertEquals("1997W33", $dt->format(\WM\ISO8601_YEARWEEK_ALT1), "failure: ISO8601_YEARWEEK_ALT1");
		$this->assertEquals("1997-W33-3", $dt->format(\WM\ISO8601_YEARWEEKDAY), "failure: ISO8601_YEARWEEKDAY");
		$this->assertEquals("1997W333", $dt->format(\WM\ISO8601_YEARWEEKDAY_ALT1), "failure: ISO8601_YEARWEEKDAY_ALT1");
		$this->assertEquals("19970813", $dt->format(\WM\DATE_FILENAME), "failure: DATETIME_FILENAME");
		$this->assertEquals("195200", $dt->format(\WM\TIME_FILENAME), "failure: DATETIME_FILENAME");
		$this->assertEquals("19970813T195200", $dt->format(\WM\DATETIME_FILENAME), "failure: DATETIME_FILENAME");
		$this->assertEquals("19970813T195200-0500", $dt->format(\WM\DATETIME_FILENAMEZ), "failure: DATETIME_FILENAMEZ");

	}
}



