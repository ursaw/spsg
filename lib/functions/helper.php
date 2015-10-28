<?php
// simple Helper functions

/**
 * http://stackoverflow.com/questions/834303/startswith-and-endswith-functions-in-php
 * @param unknown $haystack
 * @param unknown $needle
 * @return boolean
 */
function endsWith($haystack, $needle) {
	// search forward starting from end minus needle length characters
	return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
}
?>