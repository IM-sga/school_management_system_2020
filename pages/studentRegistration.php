<?php require '../partials/head.php'; ?>
<title>IML Registration Page</title>
<?php require '../partials/header.php'; ?>
<body>
	<div class="container mt-5 mb-5" id="stuReg">
		<form method="POST" action="../forms/studentRegistration.php">
			<div class="p-2 pt-3">
				<h1 id="f-back">PERSONAL BACKGROUND</h1>
			</div>
			<div class="p-2">
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
				<label for="Name extension">Name extension: </label>
				<input class="form-control" type="text" name="nameext">
			</div>
			<div class="p-2">
				<label for="Username">Username: </label>
				<input class="form-control" type="text" name="username"required> 	
			</div>
			<div class="p-2">
				<label for="Birthdate">Birthdate: </label>
				<input class="form-control" type="date" name="bdate"required>
			</div>
			<div class="p-2">
				<label for="Sex">Sex: </label>
				<select class="form-control" name="sex" required>
					<option value="female"> Female </option>
					<option value="male"> Male </option>
					<option value="non-binary"> Non-binary </option>
				</select>
			</div>
			<div class="p-2">
				<label for="Email">Email: </label>
				<input class="form-control" type="email" name="email"required>
			</div>
			<div class="p-2">
				<label for="Contact number">Contact number: </label>
				<input class="form-control" type="text" name="cnumber"required> 
			</div>
			<div class="p-2">
				<label for="Address">Address: </label>
				<input class="form-control" type="text" name="address"required> 
			</div>
			<div class="p-2">
				<h1 id="f-back">GUARDIAN'S BACKGROUND</h1>
			</div>
			<div class="p-2">
				<label for="Guardian's name">Guardian's name: </label>
				<input class="form-control" type="text" name="gname"required>
			</div>
			<div class="p-2">
				<label for="Relationship to student"required>Relationship to student: </label>
				<input class="form-control" type="text" name="relstu"required>
			</div>
			<div class="p-2">
				<label for="Guardian's contact number">Guardian's contact number: </label>
				<input class="form-control" type="text" name="gnumber"required>
			</div>
			<div class="p-2">
				<label for="Guardian's address:">Guardian's address:</label>
				<input class="form-control" type="text" name="gadd"required>
			</div>
			<div class="p-2">
				<label for="Password">Password: </label>
				<input class="form-control" type="password" name="password"required>
			</div>
			<div class="p-2 pb-3">
				<label for="Confirm password">Confirm password: </label>
				<input class="form-control" type="password" name="cpassword"required>
			</div>
			<div class="p-2 pb-5">
				<input class="form-control btn btn-dark" type="submit" name="submitBtn" value="Submit">
			</div>
		</form>
	</div>
	
<?php require '../partials/footer.php'; ?>