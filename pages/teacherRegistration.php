<?php require '../partials/head.php'; ?>
<title>IML Registration Page</title>
<?php require '../partials/header.php'; ?>
<body>
	<form method="POST" action="../forms/teacherRegistration.php">
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
   		<label for="Birthdate">Birthdate: </label>
	    <input type="date" name="bdate"required>
   	</div> 
   	<div>
   		<label for="Username">Username: </label>
	    <input type="text" name="username"required> 	
   	</div>
   	<div>
	    <label for="Email">Email: </label>
    	<input type="email" name="email"required>
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
	    <input class="btn btn-primary" type="submit" name="submitBtn" value="Submit">
    </div>
	</form>
<?php require '../partials/footer.php'; ?>