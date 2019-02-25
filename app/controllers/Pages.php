<?php
	class Pages extends Controller {
		public function __construct(){
			 $this->pageModel = $this->model('Page'); 
		}
		public function index(){
			
			$this->view('pages/index');
		}
		public function about(){
			$data = [
				'title' => 'We Are A Different Logistics Company',
				'description' => 'Learn What Sets us Apart',
				'version' => APPVERSION
			]; 

			$this->view('pages/about', $data); 		 
		}
		public function faqs(){
			$data = [
				'title' => 'Frequently Asked Question', 
				'description' => 'Some answers to questions to make it easier for you '
			];
			$this->view('pages/faqs', $data); 
		}
	}			
?>
 