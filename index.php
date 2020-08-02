<!DOCTYPE html>
<html>
<head>
	<title>IML Acad</title>
	<!-- <link rel="stylesheet" type="text/css" href="public/css/IML.css"> -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<script href="public/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
  <a class="navbar-brand" href="#">IML Academy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="pages/chooseRole.php">Sign Up <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/imlogin.php">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Enroll Now</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
    <a class="btn btn-lg btn-primary" href="{{ site.baseurl }}/docs/{{ site.docs_version }}/components/navbar/" role="button">View navbar docs &raquo;</a>
  </div>
</main>

	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
	  <header class="masthead mb-auto">
	    <div class="inner">
	      <h1 class="masthead-brand text-center">IML Academy</h1>
	      <nav class="nav nav-masthead justify-content-center">
	        <a class="nav-link" href="#">Home</a>
	        <a class="nav-link" href="#">About Us</a>
	        <a class="nav-link" href="#">Contact</a>
	        <a class="nav-link" href="#">Campus Branch</a>
	        <a class="nav-link" href="pages/imlogin.php">Log In</a>
	        <a class="nav-link" href="pages/chooseRole.php">Sign Up</a>
	      </nav>
	    </div>
	  </header>
	</div>

	<div id= "main-art">
		<h2 class="page-header">LOREM IPSUM</h2>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua.</p>
		<p class="text-justify">
		 Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
	</div>
	<div>
		<h3>DOLOR SIT</h3>
		<p  class="bg-defaut">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod.</p>
	</div>
</body>
</html>