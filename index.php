<?php 
session_start();
    include_once 'user.php';
    $user = new User();

    $id = $_SESSION['id'];

    if (!$user->get_session()){
       header("location:index.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:register.php");
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
		  
</head>

<body>
	<div class="container">
      <nav class="navbar navbar-default">
      	<div class="container-fluid">
      		<div class="navbar-header">
      			<a class="navbar-brand" href="index.php"><h3>Login Register System PHP</h3></a>
      		</div>
              <ul class="nav navbar-nav pull-right h4 text-dark">
              	<li><a href="profile.php"> Profile </a> </li>
              	<li> <a href="home.php?q=logout">LOGOUT</a></li>
              	<li><a href="login.php"> Login </a> </li>
              	<li><a href="register.php"> Register </a> </li>
              </ul>

      	</div>
      </nav>

      <div class="panel panel-default">
      	<div class="panel-heading">
      		<h2>User List <span class="pull-right"><strong>Welcom</strong> <?php $user->get_fullname($id); ?> </span></h2>
      	</div>
      	<div class="panel-body">
      		<table class="table table-striped text-dark">
      			<th width="20%">Serial</th>
      			<th width="20%">Name</th>
      			<th width="20%">UserName</th>
      			<th width="20%">Email Address</th>
      			<th width="20%">Active</th>

      			<tr>
      				<td>01</td>
      				<td>Minhajur</td>
      				<td>Rahman</td>
      				<td>min@gmail.com</td>
      				<td><a class="btn btn-danger" href="profile.php?id=1">View</a></td>
      			</tr>

      			<tr>
      				<td>01</td>
      				<td>Minhajur</td>
      				<td>Rahman</td>
      				<td>min@gmail.com</td>
      				<td><a class="btn btn-danger" href="profile.php?id=1">View</a></td>
      			</tr>
      		</table>
      	</div>
      </div>

<div class="well">
	<h3>Website:
        <span class="pull-right">Like Us:</span>
	</h3>
	
</div>


	</div>







        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>