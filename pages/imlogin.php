<?php require '../partials/head.php'; ?>
<title>IML Log-In Page</title>
<?php require '../partials/header.php'; ?>

<body>
	<h2>
		Log-in here
	</h2>
	<h4>Don't have an account?
		<a href="chooseRole.php">Sign-up here</a>
	</h4>
	<form id="login" method="POST" action="../forms/login.php">
		<div>
			<label for="Username">Username:</label>
			<input class="form-control" type="text" name="username">	
		</div>
		<div>
			<label for="Birthdate">Birthdate:</label>
			<input class="form-control" type="date" name="bdate">
		</div>
		<div>
			<label for="Category">Category:</label>
			<select class="form-control" name="category">
				<option value="select category"><---Select Category---></option>
				<option value="student">Student</option>
				<option value="teacher">Teacher</option>	
			</select>
		</div>
		<div>
			<label for="Password:">Password:</label>
			<input class="form-control" type="password" name="password">
		</div>
		<div>
			<input class="btn btn-primary" type="submit" name="login" value="log-in">
		</div>
	</form>	
<?php require '../partials/footer.php'; ?>