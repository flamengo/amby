<?
class Home extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this -> loadHead('home');
		$this -> load -> view('home/index');
		$this -> load -> view('footer');
	}

	function about() {
		$this -> loadHead('about');
		$this -> load -> view('home/about');
		$this -> load -> view('footer');
	}

	function contact() {
		$this -> loadHead('contact');
		$this -> load -> view('home/contact');
		$this -> load -> view('footer');
	}

}
?>