<?php require '../partials/head.php'; ?>
<title>IML Registration Page</title>
<?php require '../partials/header.php'; ?>
<body>
	<form method="POST" action="../forms/studentRegistration.php">
        <div>
        	<label for="Last name:">Last name: </label>
        	<input type="text" name="lname" required>
        </div>
        <div>
        	<label for="First name">First name: </label>
        	<input type="text" name="fname"required> 
        </div>
       	<div>
       		<label for="Middle name">Middle name: </label>
			<input type="text" name="mname"required>
       	</div> 
       	<div>
       		<label for="Name extension">Name extension: </label>
			<input type="text" name="nameext">
       	</div>
       	<div>
       		<label for="Username">Username: </label>
			<input type="text" name="username"required> 	
       	</div>
       	<div>
       		<label for="Birthdate">Birthdate: </label>
			<input type="date" name="bdate"required>
       	</div>
        <div>
        	<label for="Sex">Sex: </label>
			<select class="sex" name="sex" required>
				<option value="female"> Female </option>
				<option value="male"> Male </option>
				<option value="non-binary"> Non-binary </option>
			</select>
		</div>
		<div>
			<label for="Email">Email: </label>
        	<input type="email" name="email"required>
		</div>
        <div>
        	<label for="Contact number">Contact number: </label>
	        <input type="text" name="cnumber"required> 
        </div>
		<div>
			<label for="Address">Address: </label>
	        <input type="text" name="address"required> 
		</div>
		<div>
			<label for="Guardian's name">Guardian's name: </label>
        	<input type="text" name="gname"required>
		</div>
		<div>
			<label for="Relationship to student"required>Relationship to student: </label>
	        <input type="text" name="relstu"required>
		</div>
		<div>
			<label for="Guardian's contact number">Guardian's contact number: </label>
	        <input type="text" name="gnumber"required>
		</div>
		<div>
			<label for="Guardian's address: "></label>
	        <input type="text" name="gadd"required>
		</div>
		<div>
			<label for="Password">Password: </label>
	        <input type="password" name="password"required>
		</div>
		<div>
			<label for="Confirm password">Confirm password: </label>
        	<input type="password" name="cpassword"required>
		</div>
		<div>
			<input cass="btn btn-primary" type="submit" name="submitBtn" value="Submit">
		</div>
	</form>
<?php require '../partials/footer.php'; ?>