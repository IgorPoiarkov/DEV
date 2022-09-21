<?php
function breakToWords($string)
{
	$string = mb_strtolower($string);
	$string = str_replace('.', '', $string);
	$string = str_replace('-', '', $string);
	return explode(' ', $string);
}
?>