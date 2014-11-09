<?
class Home extends MY_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this -> load -> view('lib');
		$this -> load -> view('header2');
		$this -> load -> view('home/carousel');
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