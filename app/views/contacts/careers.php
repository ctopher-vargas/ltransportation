<?php require APPROOT . '\views\inc\header.php'; ?>

 <div class="img-holder" data-image="<?php echo URLROOT; ?>public/images/career.jpg">
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
			<div class="row">
				<div class="side-bar col-md-3">
					<h3>Join Us </h3>	
					<p>If you are interested in joinging the Lightning Transportation family, leave us your information.</p>	
				</div>
				<div class="contact col-md-9">
					<h3>Personal Information</h3>
					<form class="form-horizontal" action="<?php echo URLROOT; ?>contacts/careers" method="POST">
						<div class="row">
			  				<p class="col-md-6">
			  					<label for="first_name">First Name </label>
			  					<input type="text" name="first_name" class="form-control <?php echo (!empty($data['first_name_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['first_name']; ?>">
			  					<span class="invalid-feedback help-block">
			  						<?php echo $data['first_name_error']; ?> </span>
			  				</p>	
			  				<p class="col-md-6">
			  					<label for="last_name">Last Name </label>
			  					<input type="text" name="last_name" class="form-control <?php echo (!empty($data['last_name_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['last_name']; ?>">
			  					<span class="invalid-feedback help-block"> <?php echo $data['last_name_error'] ?></span>
			  				</p>
						</div>		
						<div class="row">
							<p class="col-md-12">	
								<label for="address">Address </label>
								<input type="text" name="address" class="form-control <?php echo (!empty($data['address_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['address']; ?>">
								<span class="invalid-feedback help-block">
								<?php echo $data['address_error'] ?></span>
							</p>
						</div>	
						<div class="row">
							<p class="col-md-6">
								<label for="city">City </label>
								<input type="text" name="city" class="form-control <?php echo (!empty($data['city_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['city']; ?>">
								<span class="invalid-feedback help-block"><?php echo $data['city_error']; ?></span>
							</p>
						</div>
						<div class="row">
			  				<p class="col-md-6">
			  					<label for="phone_number">Phone Number </label>
			  					<input type="text" name="phone_number" class="form-control <?php echo (!empty($data['phone_number_error'])) ? 'is-invalid' : '' ?>">
			  					<span class="invalid-feedback help-block"><?php echo $data['phone_number_error']; ?></span>
			  				</p>
			  				<p class="col-md-6">
			  					<label for="email">Email Address </label>
			  					<input type="email" name="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : '' ; ?>">
			  					<span class="invalid-feedback help-block"><?php echo $data['email_error']?></span>
			  				</p>
		  				</div>
			  			<div class="row">
			  				<p class="col-md-6">
			  					<label for="position">Position </label>
			  					<input type="text" name="position" class="form-control">
			  				</p>
			  			</div>
			  			<div class="row">
			  				<p class="col-md-6">
			  					<label for="reference">Reference </label>
			  					<input type="text" name="reference" class="form-control" placeholder="How did you hear about us?">
			  				</p>
			  			</div>
			  			<div class="form-group">
							  <textarea class="form-control" name="message" rows="10" placeholder="Please list some of your qualifications!"></textarea>
						</div>
						<button type="submit" class="btn btn-outline-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="bottom-section">
	<div class="container">
		<h4>Lightning Transportation is an equal opportunity employer. This application will not be used for limiting or exculding any applicant from consideration for employment on a basis prohibited by local, state, or federal law. Should an applicant need reasonable accomidation in the application process, he or she should contact a company representative. 
		</h4>
	</div>	
</div>

<?php require APPROOT . '\views\inc\footer.php' ; ?>