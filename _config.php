<?php

use SilverStripe\Dev\Debug;

function ssd($arg) {
	echo Debug::create_debug_view()->renderVariable($arg, Debug::caller());
}

function ssdd($arg) {
	ssd($arg);
	die();
}
