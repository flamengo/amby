<?
class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
		// Your own constructor code
	}

	function index() {
		$this -> load -> view('lib');
		$this -> load -> view('header');
		$this -> load -> view('home');
		$this -> load -> view('footer');
	}

}
?>