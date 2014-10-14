<?php

namespace WM;

class Duration {

	function second($num = 1){
		return ONE_SECOND * $num;
	}

	function minute($num = 1){
		return ONE_MINUTE * $num;
	}

	function hour($num = 1){
		return ONE_HOUR * $num;
	}

	function day($num = 1){
		return ONE_DAY * $num;
	}

	function week($num = 1){
		return ONE_WEEK * $num;
	}

	function month($num = 1){
		return ONE_MONTH * $num;
	}

}

