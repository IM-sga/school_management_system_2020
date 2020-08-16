<?php require '../partials/head.php'; ?>
<title>IML Log-In Page</title>
<?php require '../partials/header.php'; ?>

<body>
	<div class="container">
		<h2 class="mt-3">
			Log-in here
		</h2>
		<h4>Don't have an account?
			<a href="chooseRole.php">Sign-up here</a>
		</h4>
	</div>
	
	<div id="login-form" class="container">
		<form method="POST" action="../forms/login.php">
			<div class="p-2 pt-3">
				<label for="Username">Username:</label>
				<input class="form-control" type="text" name="username">	
			</div>
			<div class="p-2">
				<label for="Birthdate">Birthdate:</label>
				<input class="form-control" type="date" name="bdate">
			</div>
			<div class="p-2">
				<label for="Category">Category:</label>
				<select class="form-control" name="category">
					<option value="select category"><---Select Category---></option>
					<option value="student">Student</option>
					<option value="teacher">Teacher</option>	
				</select>
			</div>
			<div class="p-2">
				<label for="Password:">Password:</label>
				<input class="form-control" type="password" name="password">
			</div>
			<div class="btn-group btn-block p-2">
				<input class="btn btn-dark mt-3 mb-3" type="submit" name="login" value="Log In">
			</div>
		</form>	


	</div>
	
<?php require '../partials/footer.php'; ?>