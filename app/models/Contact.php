<?php 
	
	Class Contact {
		private $db; 
		private $mail; 

		public function __construct(){
			$this->db = new Database; 
			$this->mail= new Mailer; 
		}
		//new contact
		public function newContact($contact){
			$this->db->query('INSERT INTO contacts (name, email, phone_number, message) values(:name, :email, :phone_number, :message)'); 
			//bind values
			$this->db->bind(':name', $contact['name']); 
			$this->db->bind(':email', $contact['email']); 
			$this->db->bind(':phone_number', $contact['phone_number']); 
			$this->db->bind(':message', $contact['message']); 
			//execute
			if($this->db->execute()){
				$this->contactEmail($contact); 
				return true; 
			} else {
				return false; 
			}
		}
		//new job applicant
		public function jobApplication($application){ 
			$this->db->query('INSERT INTO applicants (first_name, last_name, address, city, phone_number, email, position, reference, message) values(:first_name, :last_name, :address, :city, :phone_number, :email, :position, :reference, :message)'); 
			//bind values
			$this->db->bind(':first_name', $application['first_name']); 
			$this->db->bind(':last_name', $application['last_name']); 
			$this->db->bind(':address', $application['address']); 
			$this->db->bind(':city', $application['city']); 
			$this->db->bind(':phone_number', $application['phone_number']);
			$this->db->bind(':email', $application['email']); 
			$this->db->bind(':position', $application['position']); 
			$this->db->bind(':reference', $application['reference']); 
			$this->db->bind(':message', $application['message']); 
			//execute
			if($this->db->execute()){
				$this->jobEmail($application); 
				return true; 
			} else {
				return false; 
			}
		}
		public function quoteRequest($quote){
			//set up query 
			$this->db->query('INSERT INTO quote (company_name, email, phone_number, shipping_date, starting_location, zip_starting, state_starting, ending_location, zip_ending, state_ending, message) values(:company_name, :email, :phone_number, :shipping_date, :starting_location, :zip_starting, :state_starting, :ending_location, :zip_ending, :state_ending, :message)'); 
			//bind values
			$this->db->bind(':company_name', $quote['company_name']);
			$this->db->bind(':email', $quote['email']);
			$this->db->bind(':phone_number', $quote['phone_number']);
			$this->db->bind(':shipping_date', $quote['shipping_date']);
			$this->db->bind(':starting_location', $quote['starting_location']);
			$this->db->bind(':zip_starting', $quote['zip_starting']);
			$this->db->bind(':state_starting', $quote['state_starting']);
			$this->db->bind(':ending_location', $quote['ending_location']);
			$this->db->bind(':zip_ending', $quote['zip_ending']);
			$this->db->bind(':state_ending', $quote['state_ending']);
			$this->db->bind(':message', $quote['message']); 

			//execute
			if($this->db->execute()){
				$this->quoteEmail($quote); 
				return true;
			} else {
				return false; 
			}
		}
		//sends new contact email
		public function contactEmail($contact){
			$message; 
			if(empty($quote['message'])){
				$message = 'No message'; 
			} else {
				$message = $quote['message']; 
			}
 
			$body = 'You got a new contact<br><br>' . '<br><br><strong>Name: </strong>' . $contact['name'] . '<br><strong>Phone Number: </strong>' . $contact['phone_number'] . '<br><strong>Email: </strong>' . $contact['email'] . '<br><br><strong>Message</strong><br>' . $message;  
			$subject = 'New Contact';
			//Recipients
			$this->mail->from('ctopher.vargas@gmail.com', 'chris'); 
		    $this->mail->address('ctopher.vargas@gmail.com', 'chrisVV');     // Add a recipient
		    //Content
		    $this->mail->body($body, $subject); 
    		$this->mail->send();
		}
		//send job application email
		public function jobEmail($application){
			$reference; 
			$position;
			$message;
			if(empty($application['reference'])){
				$reference = 'No reference given'; 
			} else {
				$reference = $application['reference']; 
			}
			if(empty($application['position'])){
				$position = 'No position listed'; 
			} else {
				$position = $application['position']; 
			}
			if(empty($application['message'])){
				$message = 'No message/qualifications given'; 
			} else {
				$message = $application['message']; 
			}
 
			$body = $application['first_name'] . ' is interested in applying for the ' . $application['position'] . ' position. <br><br>' . '<strong>First Name: </strong>' . $application['first_name'] . '<br><strong>Last Name: </strong>' . $application['last_name'] . '<br><br><strong>Address: </strong>' . $application['address'] . '<br><strong>City: </strong>' . $application['city'] . '<br><br><strong>Phone Number: </strong>' . $application['phone_number'] . '<br><strong>Email: </strong>' . $application['email'] . '<br><br><strong>Position applying for: </strong>' . $position . '<br><strong>How they found out about the position: </strong>' . $reference . '<br><br><strong>Message: </strong><br>' . $message;
			
			//Recipients
			$this->mail->from('ctopher.vargas@gmail.com', 'chris'); 
		    $this->mail->address('ctopher.vargas@gmail.com', 'chrisVV');     // Add a recipient
		    //Content
		    $this->mail->body($body, $subject); 
    		$this->mail->send();
		}
		//send quote email
		public function quoteEmail($quote){
			$message; 
			if(empty($quote['message'])){
				$message = 'No message'; 
			} else {
				$message = $quote['message']; 
			}
 			$body = $quote['company_name'] . ' 	is requesting a quote. <br><br>' . '<strong>Name: </strong>' . $quote['company_name'] . '<br><strong>Email: </strong>' . $quote['email'] . '<br><strong>Phone Number: </strong>' . $quote['phone_number'] . '<br><br><strong>Starting Address: </strong>' . $quote['starting_location'] . '<br><strong>Zip: </strong>' . $quote['zip_starting'] . '<br><strong>State: </strong>' . $quote['state_starting'] . '<br><br><strong>Ending Address: </strong>' . $quote['ending_location'] . '<br><strong>Zip: </strong>' . $quote['zip_ending'] . '<br><strong>State: </strong>' . $quote['state_ending'] . '<br><br><strong>Message: </strong><br>' .  $message; 
			$subject = 'Quote Request';
			//Recipients
			$this->mail->from('ctopher.vargas@gmail.com', 'chris'); 
		    $this->mail->address('ctopher.vargas@gmail.com', 'chrisVV');     // Add a recipient
		    //Content
		    $this->mail->body($body, $subject); 
    		$this->mail->send();
		}
	}
?>