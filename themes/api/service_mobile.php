<?php
define ( 'DOC_ROOT', $_SERVER ['DOCUMENT_ROOT'] );
$_dest = DOC_ROOT . '/service/data/json/login.json';
$token = $_GET ['token'];
if ($token == '999') {
	$result = 'authenticated';
	$cook = json_encode ( $result );
	$local = file_put_contents ( $_dest, $cook, LOCK_EX );
	echo 'your desktop is loading now';
} else {
	echo 'failed';
}