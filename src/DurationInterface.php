<?php

namespace WM;

interface DurationInterface {

	function second($num);

	function minute($num);

	function hour($num);

	function day($num);

	function week($num);

	function month($num);

}

