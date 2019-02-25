<?php require APPROOT . '\views\inc\header.php'; ?>

<div class="img-holder" data-image="<?php echo URLROOT; ?>public/images/containers.jpg">
	<div class="layer">
	</div>
</div>

<div class="title">
	<div class="container">
		<h1><?php echo $data['title']; ?></h1>
		<h3><?php echo $data['description']; ?></h3>
	</div>
</div>
<div class="mid-section">
	<div class="container">
		<div class="content">
				<form class="form-horizontal" action="<?php echo URLROOT; ?>contacts/help" method="POST">
					<div class="row">
						<div class="side-bar col-md-4">
							<p>
								<label for="name">Name <sup>*</sup></label>
								<input type="text" name="name" class="form-control form-control-sm <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
								<span class="invalid-feedback help-block">
										<?php echo $data['name_error']; ?> </span>
							</p>	
							<p>
								<label for="email">Email: <sup>*</sup></label>
								<input type="email" name="email" class="form-control form-control-sm <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
								<span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
							</p>
							<p>
								<label for="phone_number">Phone Number: <sup>*</sup></label>
								<input type="tel" name="phone_number" class="form-control form-control-sm <?php echo (!empty($data['phone_number_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone_number']; ?>">
								<span class="invalid-feedback"><?php echo $data['phone_number_error']; ?></span>
							</p>
						</div>
						<div class="contact col-md-8">
							  <h3>Leave your details and a question</h3>
							  <div class="form-group">
							  		<textarea class="form-control" name="message" rows="9" placeholder="Please any questions here..."></textarea>
							  </div>
							  <button type="submit" class="btn btn-outline-primary">Submit</button>
						</div>
					</div>
				</form>
			
		</div>
	</div>
</div>

<div class="bottom-section">
	<div class="container">
		<h1>Contact Information</h1>
		<div class="row">
			<div class="col-md-4">
				<h4>Phone Number</h4>
				<p>(949)394-4065</p>
				<h4>Fax Number</h4>
				<p>(877)263-6373</p>
			</div>
			<div class="col-md-4">
				<h4>Emails</h4>
				<p>contacts@ltransportation.com</p>
				<p>careers@ltransportation.com</p>
			</div>
			<div class="col-md-4">
				<h4>Have an Emergency?</h4>
				<p>for a quick reply, email us at: </p>
				<p>emergency@ltransportation.com</p>
			</div>
		</div>
	</div>
</div>

<?php require APPROOT . '\views\inc\footer.php' ; ?>