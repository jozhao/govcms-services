<?php
class Gccsi_Service implements Gccsi_Service_interface {
	private $_service;
	/**
	 *
	 * @return the $_service
	 */
	public function getService() {
		return $this->_service;
	}
	
	/**
	 *
	 * @param field_type $_service        	
	 */
	public function setService($_service) {
		$this->_service = $_service;
	}
	public function run() {
		require_once $this->getService(). ".class.php";
	}
}