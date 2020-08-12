<?php require '../partials/head.php'; ?>
<title>IML Registration Page</title>
<?php require '../partials/header.php'; ?>
<body>
	<div class="container mt-5 mb-5" id="teaReg">
		<form method="POST" action="../forms/teacherRegistration.php">
			<div class="p-2 pt-3">
				<label for="Last name:">Last name: </label>
				<input class="form-control" type="text" name="lname" required>
			</div>
			<div class="p-2">
				<label for="First name">First name: </label>
				<input class="form-control" type="text" name="fname"required> 
			</div>
			<div class="p-2">
				<label for="Middle name">Middle name: </label>
				<input class="form-control" type="text" name="mname"required>
			</div> 
			<div class="p-2">
				<label for="Birthdate">Birthdate: </label>
				<input class="form-control" type="date" name="bdate"required>
			</div> 
			<div class="p-2">
				<label for="Username">Username: </label>
				<input class="form-control" type="text" name="username"required> 	
			</div>
			<div class="p-2">
				<label for="Email">Email: </label>
				<input class="form-control" type="email" name="email"required>
			</div>
			<div class="p-2">
				<label for="Password">Password: </label>
				<input class="form-control" type="password" name="password"required>
			</div>
			<div class="p-2">
				<label for="Confirm password">Confirm password: </label>
				<input class="form-control" type="password" name="cpassword"required>
			</div>
			<div class="mt-3 p-2 pb-5">
				<input class="form-control btn btn-dark" type="submit" name="submitBtn" value="Submit">
			</div>
		</form>
	</div>
	
<?php require '../partials/footer.php'; ?>