<?php require '../partials/head.php'; ?>
<title>IML Registration Page</title>
<?php require '../partials/header.php'; ?>
<body>
	<div class="container mt-5">
		<h2>Choose your role:</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="card p-4 bg-warning mr-auto" style="width: 18rem;">
					<img class="card-img-top" src="../public/assets/images/student.png" alt="Student reading a books. PNG file">
					<div class="card-body">
						<a class="pull-left btn btn-primary btn-block" href="studentRegistration.php">I'm a Student</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="card p-4 bg-info ml-auto" style="width: 18rem;">
						<img class="card-img-top" src="../public/assets/images/teacher.png" alt="Teacher with eyeglasses. PNG file">
						<div class="card-body">
							<a class="pull-left btn btn-danger btn-block" href="teacherRegistration.php">I'm a Teacher</a>
						</div>
					</div>
				</div>
			</div>
	</div>

<?php require '../partials/footer.php'; ?>