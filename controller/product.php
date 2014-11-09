<?
class Product extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
		// Your own constructor code
	}

	function index() {
		$this -> loadHead('product');
		$this -> load -> view('product');
		$this -> load -> view('footer');
	}

	function chandelier() {
		$this -> index();
	}

	function lamp() {
		$this -> index();
	}

}
?>