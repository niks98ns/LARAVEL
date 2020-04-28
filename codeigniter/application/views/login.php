<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Bootstrap Example</title>
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
			<h2 class="text-center mt-5">Login Form</h2>
				<form method="post">
					<div class="form-group">
					<label for="email">Username:</label>
					<input type="text" class="form-control" placeholder="Enter Email" name="username">
					</div>
					<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="text" class="form-control" placeholder="Enter Password" name="password">
					</div>
					
					<button type="submit" name="save" class="col-md-8 offset-md-2 btn btn-success">Submit</button>
				</form>
			</div>
		</div>

		</body>
</html>
