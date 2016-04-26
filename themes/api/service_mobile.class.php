<?php
class Service_Mobile {
	function run() {
		echo 'Shake your mobile to login';
		$this->login ();
	}
	function login() {
		$uid = '7426';
		$params = array(
				'mail'   => 'joseph.zhao@globalccsinstitute.com',
				'name'   => 'joseph.zhao',
				'pass'   => 'sh78!@ZY,./',
				'status' => 1,
		);

		$account = user_authenticate($params);
		global $user;
		$user = user_load($account->uid);
		//drupal_session_regenerate();
		sess_regenerate();
		drupal_goto('http://www.ccsinst.dev');
	}
}