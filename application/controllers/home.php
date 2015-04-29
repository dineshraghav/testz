<?php
require_once ('InterfaceController.php');

class Home extends InterfaceController {

	public function __construct() {
		parent::__construct();
		$this->validate_session();	
	}

	public function index() {
		$this->load_template('home');
               // print_r($this-session);
	}

}
/* End of file home.php */
/* Location: ./system/application/controllers/home.php */