<?php
	include_once "/var/www/html/codeigniter/application/views/partials/header.php";
	include_once "/var/www/html/codeigniter/application/views/partials/footer.php";
	include_once "/var/www/html/codeigniter/application/views/partials/navbar.php";
	
?>

		<div class="container">
			<div class="col-md-8 offset-md-2">
				<img src="/codeigniter/application/views/images/logo.png" class="img-fluid" alt="Cinque Terre">
			<h2 class="text-center mt-5">Registration Form</h2>
				<form method="post" id="registration_form" enctype="multipart/form-data">
					<div class="form-group">
					<label for="email">First Name:</label>
					<input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" value = "<?php echo set_value('first_name'); ?>">
					<?php  if(form_error('first_name'))
					{ 
					echo "<span style='color:red'>".form_error('first_name')."</span>";
					} 
					?>
					</div>
					<div class="form-group">
					<label for="pwd">Last Name:</label>
					<input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" value = "<?php echo set_value('last_name'); ?>">
					<?php  if(form_error('last_name'))
					{ 
					echo "<span style='color:red'>".form_error('last_name')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="pwd">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value = "<?php echo set_value('email'); ?>">
					<?php  if(form_error('email'))
					{ 
					echo "<span style='color:red'>".form_error('email')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" value = "<?php echo set_value('password'); ?>">
					<?php  if(form_error('password'))
					{ 
					echo "<span style='color:red'>".form_error('password')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="number">Mobile Number:</label>
					<input type="number" class="form-control" id="mobile_number" placeholder="Enter Number" name="mobile_number" value = "<?php echo set_value('mobile_number'); ?>">
					<?php  if(form_error('mobile_number'))
					{ 
					echo "<span style='color:red'>".form_error('mobile_number')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="pwd">Image:</label>
					<input type="file" class="form-control" id="image" placeholder="Select Image" name="image" value = "<?php echo set_value('image'); ?>">
					<?php  if(form_error('image'))
					{ 
					echo "<span style='color:red'>".form_error('image')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="pwd">Gender:</label>
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
					</div>
                    <div class="form-group">
					<label for="pwd">DOB:</label>
					<input type="date" class="form-control" id="dob" placeholder="Enter DOB" name="dob" value = "<?php echo set_value('dob'); ?>">
					<?php  if(form_error('dob'))
					{ 
					echo "<span style='color:red'>".form_error('dob')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="pwd">Address:</label>
					<input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value = "<?php echo set_value('address'); ?>">
					<?php  if(form_error('address'))
					{ 
					echo "<span style='color:red'>".form_error('address')."</span>";
					} 
					?>
					</div>
					
					<!-- <button type="submit" name="save" class="col-md-8 offset-md-2 btn btn-success">Submit</button> -->
                    <input type="submit" name="save" class="col-md-8 offset-md-2 btn btn-success">
				</form>
			</div>
		</div>
					
		