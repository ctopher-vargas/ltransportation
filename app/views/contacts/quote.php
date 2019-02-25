<?php require APPROOT . '\views\inc\header.php'; ?>

 <div class="img-holder" data-image="<?php echo URLROOT; ?>public/images/quote.jpg">
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
			<form class="form-horizontal" action="<?php echo URLROOT; ?>contacts/quote" method="POST">
				<div class="row">
					<div class="contact col-md-8">
						<p>
							<label for="company_name">Company Name: </label>
							<input type="text" name="company_name" class="form-control form-control-sm" value="<?php echo $data['company_name']; ?>">
						</p>
						<div class="row">
							<p class="col-md-6">
								<label for="email">Email: <sup>*</sup></label>
								<input type="email" name="email" class="form-control form-control-sm <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
								<span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
							</p>
							<p class="col-md-6">
								<label for="phone_number">Phone Number: <sup>*</sup></label>
								<input type="tel" name="phone_number" class="form-control form-control-sm <?php echo (!empty($data['phone_number_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone_number']; ?>">
								<span class="invalid-feedback"><?php echo $data['phone_number_error']; ?></span>
							</p>
						</div>
						<p>
							<label for="shipping_date">Shipping Date: <sup>*</sup></label>
							<input type="date" name="shipping_date" class="form-control form-control-sm <?php echo (!empty($data['shipping_date_error'])) ? 'is-invalid' : ''; ?>" value="dd/mm/yyyy">
							<span class="invalid-feedback help-block">
									<?php echo $data['shipping_date_error']; ?> </span>
						</p>	
						<p>
							<label for="starting_location">Starting Location: <sup>*</sup></label>
							<input type="text" name="starting_location" class="form-control form-control-sm <?php echo (!empty($data['starting_location_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['starting_location']; ?>">
							<span class="invalid-feedback help-block">
									<?php echo $data['starting_location_error']; ?> </span>
						</p>	
						<div class="row">
							<!--long beach state zip -->
							<p class="grom-group col-md-6">
								<label for="zip_starting">Zipcode: <sup>*</sup></label>
								<input type="text" name="zip_starting" class="form-control form-control-sm <?php echo (!empty($data['zip_starting_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['zip_starting']; ?>">
								<span class="invalid-feedback help-block">
									<?php echo $data['zip_starting_error']; ?> </span>	
							</p>
							<p class= "form-group col-md-6">
								<label for="state_starting">State: </label>
								<select name="state_starting" class="form-control form-control-sm <?php echo (!empty($data['state_starting_error'])) ? 'is-invalid' : ''; ?>">
									<option value="" selected="selected">---</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District Of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select>	
								<span class="invalid-feedback help-block">
									<?php echo $data['state_starting_error']; ?> </span>	
							</p>
						</div>
						<p>
							<label for="ending_location">Ending Location: <sup>*</sup></label>
							<input type="text" name="ending_location" class="form-control form-control-sm <?php echo (!empty($data['ending_location_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['ending_location']; ?>">
							<span class="invalid-feedback help-block">
									<?php echo $data['ending_location_error']; ?> </span>
						</p>	
						<div class="row">
							<p class="form-group col-md-6">
								<label for="zip_ending">Zipcode: <sup>*</sup></label>
								<input type="text" name="zip_ending" class="form-control form-control-sm <?php echo (!empty($data['zip_ending_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['zip_ending']; ?>">
								<span class="invalid-feedback help-block">
									<?php echo $data['zip_ending_error']; ?> </span>	
							</p>
							<p class= "form-group col-md-6">
								<label for="state_ending">State: </label>
								<select name="state_ending" class="form-control form-control-sm <?php echo (!empty($data['state_ending_error'])) ? 'is-invalid' : ''; ?>">
									<option value="" selected="selected">---</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District Of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select>	
								<span class="invalid-feedback help-block">
									<?php echo $data['state_ending_error']; ?> </span>		
							</p>
						</div>		  	
					</div>
					<div class="company-info col-md-4">
						
						<h3>Notes</h3>
				  		<div class="form-group">
				  			<textarea class="form-control" name="message" rows="15" placeholder=""></textarea>
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
		<h4>A quote is an estimation and may be subject to change</h4>	
	</div>
</div>


<?php require APPROOT . '\views\inc\footer.php' ; ?>