<?php
	
	$menu = $_SERVER['PHP_SELF'];
	$actual = explode("/",strrev($menu), -1);
	$actual = strrev($actual[0]);

?>