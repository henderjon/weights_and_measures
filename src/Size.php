<?php

namespace WM;

class Size {

	function k($num = 1){
		return ONE_K * $num;
	}

	function kb($num = 1){
		return ONE_KB * $num;
	}

	function m($num = 1){
		return ONE_M * $num;
	}

	function mb($num = 1){
		return ONE_MB * $num;
	}

	function g($num = 1){
		return ONE_G * $num;
	}

	function gb($num = 1){
		return ONE_GB * $num;
	}

}
