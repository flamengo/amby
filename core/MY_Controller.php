<?php
class MY_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
	}

	protected function loadHead($active) {
		$this -> load -> view('lib');
		$this -> load -> view('header', array(
			'home' => array(
				'link' => '/home',
				'active' => $active == 'home' ? 'active' : ''
			),
			'products' => array(
				'link' => '/product',
				'active' => $active == 'products' ? 'active' : ''
			),
			'about' => array(
				'link' => '/home/about',
				'active' => $active == 'about' ? 'active' : ''
			),
			'contact' => array(
				'link' => '/home/contact',
				'active' => $active == 'contact' ? 'active' : ''
			)
		));
	}

}

//eof
