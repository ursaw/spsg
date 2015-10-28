<?php
/**
 *  maitofunction as Javascript adapted from PHP-Smarty
 */
function mailtoJS($address){
	$extra="";
	$text=$address;
	$string = 'document.write(\'<a href="mailto:' . $address . '" ' . $extra . '>' . $text . '</a>\');';

	$js_encode = '';
	for ($x = 0, $_length = strlen($string); $x < $_length; $x ++) {
		$js_encode .= '%' . bin2hex($string[$x]);
	}

	return '<script type="text/javascript">eval(unescape(\'' . $js_encode . '\'))</script>';
} //eof mailtoJS
?>