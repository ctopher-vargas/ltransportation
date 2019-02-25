<section class="contact">	
	<div class="row">
		<div class="col-md-7 mx-auto">
			<div class="container">
				<div class="card">
					<div class="card-body bg-light">
						<form action="<?php echo URLROOT; ?>contacts/jobs" method="POST">
							<div class="form-group">
								<label for="name">Name: <sup>*</sup></label>
								<input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
								<span class="invalid-feedback"><?php echo $data['name_error']; ?></span>
							</div>
							<div class="form-group">
								<label for="email">Email: <sup>*</sup></label>
								<input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
								<span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
							</div>
							<div class="form-group">
								<label for="phone_number">Phone Number: <sup>*</sup></label>
								<input type="tel" name="phone_number" class="form-control form-control-lg <?php echo (!empty($data['phone_number_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone_number']; ?>">
								<span class="invalid-feedback"><?php echo $data['phone_number_error']; ?></span>
							</div>
							<div class="form-group">
								  <textarea class="form-control" name="message" rows="5" placeholder="Please any questions here..."></textarea>
							</div>
							<div class="row">
								<div class="col">
									<input type="submit" value="Submit" class="btn btn-success">
								</div>
							</div>
						</form>
					</div> 
				</div>
			</div>
		</div>
</section>