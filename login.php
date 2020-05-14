 
<?php 
session_start();
include_once 'user.php';
$user = new User();

if (isset($_POST['submit'])) { 
		extract($_POST);   
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	        // Registration Success
	       header("location:index.php");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign up</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/mdb/mdb.min.css">
		<script src="css/js/jquery.min.js"></script>
		  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		  
		  <style>
		  	.col-md-6{
		  		margin: 50px;
		  	}
		  		.col-md-6 form{
		  		margin: 60px;
		  	}
		  </style>
</head>

<body>




<div class="contaner-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
        	 <div class="card">


<form method="post" name="login">
	<p class="h4 mb-4 text-center">User Login</p>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailusername">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  &nbsp;
 <input class="btn btn-info" type="submit" name="submit" value="Login" onclick="return(submitlogin());">

<br>
 &nbsp;
 <a href="registration.php">Register new user</a>
</form>



</div>
</div>
</div>
</div>


















        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>