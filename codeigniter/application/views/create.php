<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Codeigniter</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style>
		img.img-fluid {
			margin-top: 31px;
			margin-left: 36%;
			margin-bottom: -29px;
		}
	</style>
	</head>
		<body>

		<div class="container">
			<div class="col-md-8 offset-md-2">
				<img src="/codeigniter/application/views/images/logo.png" class="img-fluid" alt="Cinque Terre">
			<h2 class="text-center mt-5">Registration Form</h2>
				<form method="post">
				<?php echo validation_errors(); ?>  
					<div class="form-group">
					<label for="email">First Name:</label>
					<input type="text" class="form-control" placeholder="Enter First Name" name="first_name" 
					value = "<?php echo set_value('first_name'); ?>">
					<?php  if(form_error('first_name'))
					{ 
					echo "<span style='color:red'>".form_error('first_name')."</span>";
					} 
					?>
					</div>
					<div class="form-group">
					<label for="pwd">Last Name:</label>
					<input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" value = "<?php echo set_value('last_name'); ?>">
					<?php  if(form_error('last_name'))
					{ 
					echo "<span style='color:red'>".form_error('last_name')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="pwd">Email:</label>
					<input type="email" class="form-control" placeholder="Enter Email" name="email" value = "<?php echo set_value('email'); ?>">
					<?php  if(form_error('email'))
					{ 
					echo "<span style='color:red'>".form_error('email')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" placeholder="Enter Password" name="password" value = "<?php echo set_value('password'); ?>">
					<?php  if(form_error('password'))
					{ 
					echo "<span style='color:red'>".form_error('password')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="number">Mobile Number:</label>
					<input type="number" class="form-control" placeholder="Enter Number" name="mobile_number" value = "<?php echo set_value('mobile_number'); ?>">
					<?php  if(form_error('mobile_number'))
					{ 
					echo "<span style='color:red'>".form_error('mobile_number')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="pwd">Image:</label>
					<input type="file" class="form-control" placeholder="Enter Password" name="password" value = "<?php echo set_value('password'); ?>">
					<?php  if(form_error('password'))
					{ 
					echo "<span style='color:red'>".form_error('password')."</span>";
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
					<input type="date" class="form-control" placeholder="Enter DOB" name="dob" value = "<?php echo set_value('dob'); ?>">
					<?php  if(form_error('dob'))
					{ 
					echo "<span style='color:red'>".form_error('dob')."</span>";
					} 
					?>
					</div>
                    <div class="form-group">
					<label for="pwd">Address:</label>
					<input type="text" class="form-control" placeholder="Enter Address" name="address" value = "<?php echo set_value('address'); ?>">
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

		</body>
</html>
