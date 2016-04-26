<?php
/*
 * Query example:
 * http://www.ccsinst.dev/service/?service=service_solr&servlet=admin/luke&docId=2&wt=json
 */
require_once dirname(__FILE__) . '/service_bootstrap.php';
require_once dirname(__FILE__) . '/service/service_autoload.php';

if (isset ( $_SERVER ['QUERY_STRING'] ) && ! empty ( $_SERVER ['QUERY_STRING'] )) {
	parse_str ( $_SERVER ['QUERY_STRING'], $params );
} else {
	die ( 'Bad request' );
}

$gccsi_service = new Gccsi_Service ();
$gccsi_service->setService ( $params ['service'] );
$gccsi_service->run();

$mobile = new Service_Mobile();
$mobile->run();