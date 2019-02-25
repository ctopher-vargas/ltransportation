<?php 
	class Contacts extends Controller {
		public function __construct(){
			 $this->contactModel = $this->model('Contact'); 
		}

		public function help(){
			$page_description = [
				'title' => 'How can we help you?', 
				'description' => 'Fill out the short form below and one of our experts will be in touch with you shortly'
			];
			//check for POST
			if($_SERVER['REQUEST_METHOD']=='POST'){	
				//sanitize post data
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);  
				//init data
				$contact = [
						'name' => trim($_POST['name']), 
						'email' => trim($_POST['email']), 
						'phone_number' => trim($_POST['phone_number']), 
						'name_error' => '', 
						'email_error' => '', 
						'phone_number_error' => '', 
						'message' => trim($_POST['message'])
				];

				//validate fields
				if(empty($contact['email'])){
						$contact['email_error'] = 'Please enter email'; 
				}
				if(empty($contact['name'])){
						$contact['name_error'] = 'Please enter name'; 
				}
				if(empty($contact['phone_number'])){
					$contact['phone_number_error'] = 'please enter a phone number'; 
				}
				//make sure errors are empty 
				if(empty($contact['email_error'])&&empty($contact['name_error'])&&empty($contact['phone_number_error'])){
					if($this->contactModel->newContact($contact)){
						flash('contact_success', 'Thank you for reaching out, we will get back to you shortly'); 
						redirect('pages/index'); 
					} else { //redirects if there are errors in the db??
						redirect('pages/about');
					}
				} else {
					//load vies with errors
					$data = $page_description+$contact; 
					$this->view('contacts/help', $data);
				}
			} 
			else {
			 $contact = [
					'name' => '', 
					'email' => '', 
					'phone_number' => '', 	
					'name_error' => '', 
					'email_error' => '', 
					'phone_number_error' => '', 
					'message' => ''
				];
				$data = $page_description + $contact; 
				$this->view('contacts/help', $data); 
			}
		}
		//edit all this nonsense 
		public function careers(){		 
			$page_description = [
				'title' => 'Careers at Lightning Transportation',
				'description' => 'We are a fast pace, fast growing company'
			];  			
			//check for POST
			if($_SERVER['REQUEST_METHOD']=='POST'){
				//sanitize post data
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);  
				//init data
				$applicant = [
					'first_name' => trim($_POST['first_name']),
					'last_name' => trim($_POST['last_name']), 
					'address' => trim($_POST['address']), 
					'city' => trim($_POST['city']), 
					'phone_number' => trim($_POST['phone_number']), 
					'email' => trim($_POST['email']), 
					'position' => trim($_POST['position']), 
					'reference' => trim($_POST['reference']), 
					'message' => trim($_POST['message']), 
					// erros
					'first_name_error' => '', 
					'last_name_error' => '', 
					'address_error' => '', 
					'city_error' => '', 
					'phone_number_error' => '', 
					'email_error' => '', 
	
				]; 
				//validate fields
				if(empty($applicant['first_name'])){
						$applicant['first_name_error'] = 'Please enter a first name'; 
				}
				if(empty($applicant['last_name'])){
						$applicant['last_name_error'] = 'Please enter a last name'; 
				}
				if(empty($applicant['address'])){
						$applicant['address_error'] = 'Please enter an address'; 
				}
				if(empty($applicant['city'])){
						$applicant['city_error'] = 'Please enter a city'; 
				}
				if(empty($applicant['email'])){
						$applicant['email_error'] = 'Please enter your email'; 
				}
				if(empty($applicant['phone_number'])){
						$applicant['phone_number_error'] = 'Please enter a phone number'; 
				}
				//make sure errors are empty 
				if(empty($applicant['first_name_error'])&&empty($applicant['last_name_error'])&&empty($applicant['address_error'])&&empty($applicant['city_error'])&&empty($applicant['phone_number_error'])&&empty($applicant['email_error'])){
					if($this->contactModel->jobApplication($applicant)){
						flash('contact_success', 'Thank you for filling out an application, we will get back to you shortly');
						redirect('pages/index'); 
					} else { //redirects if there are errors in the db??
						redirect('contacts/careers');
					}
				} else {
					//load view with errors
					$data = $page_description+$applicant; 
					$this->view('contacts/careers', $data);
				}
			}
			else {
				$applicant = [
					'first_name' => '', 
					'last_name' => '', 
					'address' => '', 
					'city' => '', 
					'phone_number' => '', 
					'email' => '', 
					'position' => '', 
					'reference' => '',
					'message' => '',
					// erros
					'first_name_error' => '', 
					'last_name_error' => '', 
					'address_error' => '', 
					'city_error' => '', 
					'phone_number_error' => '', 
					'email_error' => ''
				]; 
				$data = $page_description+$applicant;  
				$this->view('contacts/careers', $data); 
			}
		}
		public function quote(){
			$page_description = [
				'title' => 'Get A Quote',
				'description' => 'Leave us some information to get an estimate'
			];  			
			//check for POST
			if($_SERVER['REQUEST_METHOD']=='POST'){
				//sanitize post data
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);  
				//init data
				$quote = [
					'company_name' => trim($_POST['company_name']),
					'email' => trim($_POST['email']),
					'phone_number' => trim($_POST['phone_number']),
					'shipping_date' => trim($_POST['shipping_date']),
					'starting_location' => trim($_POST['starting_location']),
					'zip_starting' => trim($_POST['zip_starting']),
					'state_starting' => $_POST['state_starting'],
					'ending_location' => trim($_POST['ending_location']),
					'zip_ending' => trim($_POST['zip_ending']),
					'state_ending' => $_POST['state_ending'],
					'message' => trim($_POST['message']), 
					//errors
					'email_error' => '',
					'phone_number_error' => '', 
					'shipping_date_error' => '',
					'starting_location_error' => '',
					'zip_starting_error' => '',
					'state_starting_error' => '',
					'ending_location_error' => '',
					'zip_ending_error' => '', 
					'state_ending_error' => ''
				];

		
				//validate fields ==
				if(empty($quote['email'])){
						$quote['email_error'] = 'Please enter an email'; 
				}
				if(empty($quote['phone_number'])){
						$quote['phone_number_error'] = 'Please enter a phone number'; 
				}
				if(empty($quote['shipping_date'])){
						$quote['shipping_date_error'] = 'Please enter a shipping date'; 
				}
				if(empty($quote['starting_location'])){
						$quote['starting_location_error'] = 'Please enter a pickup address'; 
				}
				if(empty($quote['zip_starting'])){
						$quote['zip_starting_error'] = 'Please enter a zip for the pickup address'; 
				}
				if(empty($quote['state_starting'])){
						$quote['state_starting_error'] = 'Please enter a state'; 
				}
				if(empty($quote['ending_location'])){
						$quote['ending_location_error'] = 'Please enter the drop off address'; 
				}
				if(empty($quote['zip_ending'])){
						$quote['zip_ending_error'] = 'Please enter a zip for the drop off address'; 
				}
				if($quote['state_ending'] == ''){
						$quote['state_ending_error'] = 'Please enter a state'; 
				}
				//make sure errors are empty 
				if(empty($quote['email_error'])&&empty($quote['phone_number_error'])&&empty($quote['shipping_date_error'])&&empty($quote['starting_location_error'])&&empty($quote['zip_starting_error'])&&empty($quote['state_starting_error'])&&empty($quote['ending_location_error'])&&empty($quote['zip_ending_error'])&&empty($quote['state_ending_error'])){
					if($this->contactModel->quoteRequest($quote)){
						flash('contact_success', 'Thank you for requesting a quote, we will get back to you shortly'); 				
						redirect('pages/index'); 
					} else { //redirects if there are errors in the db??
						redirect('contacts/quote');
					}
				} else {
					//load view with errors
					$data = $page_description+$quote; 
					$this->view('contacts/quote', $data);
				}
			} 
			else {
				$quote = [
					'company_name' => '',
					'email' => '',
					'phone_number' => '',
					'shipping_date' => '',
					'starting_location' => '',
					'zip_starting' => '',
					'state_starting' => '',
					'ending_location' => '',
					'zip_ending' => '',
					'state_ending' => '',
					'message' => '', 
					//errors
					'email_error' => '',
					'phone_number_error' => '', 
					'shipping_date_error' => '',
					'starting_location_error' => '',
					'zip_starting_error' => '',
					'state_starting_error' => '',
					'ending_locatation_error' => '',
					'zip_ending_error' => '', 
					'state_ending_error' => ''
				];
				$data = $page_description + $quote; 
				$this->view('contacts/quote', $data); 
			}
		}
	}
?>