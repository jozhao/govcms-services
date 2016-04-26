<?php
function service_autoload($ServiceClass) {
	if (mb_strtolower ( $ServiceClass ) == 'firephp') {
		return;
	}
	include ($ServiceClass . ".class.php");
}
spl_autoload_register ( "service_autoload" );