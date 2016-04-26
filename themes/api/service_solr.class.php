<?php
class Service_Solr {
	function __construct() {
		echo hi;
	}
	function example() {
		$xml = NULL;
		try {
			$solr = apachesolr_get_solr ();
			$response = $solr->makeServletRequest ( 'admin/luke', array (
					'docId' => '41261',
					'wt' => 'json' 
			) );
			// $xml = simplexml_load_string ( $response->getRawResponse () );
			$json = $response->getRawResponse ();
		} catch ( Exception $e ) {
			watchdog ( 'Apache Solr', nl2br ( check_plain ( $e->getMessage () ) ), NULL, WATCHDOG_ERROR );
			drupal_set_message ( nl2br ( check_plain ( $e->getMessage () ) ), "warning" );
		}
		if ($json) {
			print_r ( $json );
			die ();
		}
	}
}