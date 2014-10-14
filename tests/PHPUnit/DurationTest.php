<?php

class DurationTest extends PHPUnit_Framework_TestCase{

	function getInst(){
		return new WM\Duration;
	}

	function test_second(){
		$c = $this->getInst()->second(5);
		$expected = WM\ONE_SECOND * 5;
		$this->assertEquals($expected, $c);
	}

	function test_minute(){
		$c = $this->getInst()->minute(5);
		$expected = WM\ONE_MINUTE * 5;
		$this->assertEquals($expected, $c);
	}

	function test_hour(){
		$c = $this->getInst()->hour(5);
		$expected = WM\ONE_HOUR * 5;
		$this->assertEquals($expected, $c);
	}

	function test_day(){
		$c = $this->getInst()->day(5);
		$expected = WM\ONE_DAY * 5;
		$this->assertEquals($expected, $c);
	}

	function test_week(){
		$c = $this->getInst()->week(5);
		$expected = WM\ONE_WEEK * 5;
		$this->assertEquals($expected, $c);
	}

	function test_month(){
		$c = $this->getInst()->month(5);
		$expected = WM\ONE_MONTH * 5;
		$this->assertEquals($expected, $c);
	}

}