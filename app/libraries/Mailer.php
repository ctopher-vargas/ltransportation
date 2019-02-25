<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer{
	                  
	private $mail; 
	       
	public function __construct(){
		require 'phpmailer/src/Exception.php';
		require 'phpmailer/src/PHPMailer.php';
		require 'phpmailer/src/SMTP.php';
		$this->mail = new PHPMailer(true);       					  // Passing `true` enables exceptions
		//Server settings
		$this->mail->SMTPDebug = 1;                                 // Enable verbose debug output
		$this->mail->isSMTP();                                      // Set mailer to use SMTP
		$this->mail->Host = 'smtp.gmail.com.';  					  // Specify main and backup SMTP servers
		$this->mail->SMTPAuth = true;                               // Enable SMTP authentication
		$this->mail->Username = SMTP_USER; 			              // SMTP username
		$this->mail->Password = SMTP_PASS;                           // SMTP password
		$this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$this->mail->Port = 587;                                    // TCP port to connect to
	}
	public function from($email, $name){
		$this->mail->setFrom($email, $name); 
	}
	public function address($email, $name){
		$this->mail->addAddress($email, $name); 
	}
	public function body($body, $subject){
		 $this->mail->isHTML(true);
		 $this->mail->Subject = $subject;    
		 $this->mail->Body = $body; 
	}
	public function send(){
		try{
			$this->mail->send(); 
		} catch (Exception $e) {
			echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo; 
		}
	}
}