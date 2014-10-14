<?php

class SizeTest extends PHPUnit_Framework_TestCase{

	function getInst(){
		return new WM\Size;
	}

	function test_k($num = 1){
		$c = $this->getInst()->k(5);
		$expected = WM\ONE_K * 5;
		$this->assertEquals($expected, $c);
	}

	function test_kb($num = 1){
		$c = $this->getInst()->kb(5);
		$expected = WM\ONE_KB * 5;
		$this->assertEquals($expected, $c);
	}

	function test_m($num = 1){
		$c = $this->getInst()->m(5);
		$expected = WM\ONE_M * 5;
		$this->assertEquals($expected, $c);
	}

	function test_mb($num = 1){
		$c = $this->getInst()->mb(5);
		$expected = WM\ONE_MB * 5;
		$this->assertEquals($expected, $c);
	}

	function test_g($num = 1){
		$c = $this->getInst()->g(5);
		$expected = WM\ONE_G * 5;
		$this->assertEquals($expected, $c);
	}

	function test_gb($num = 1){
		$c = $this->getInst()->gb(5);
		$expected = WM\ONE_GB * 5;
		$this->assertEquals($expected, $c);
	}

}