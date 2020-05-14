 
<?php 
include_once 'user.php';
$user = new User();
// Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
if (isset($_POST['submit'])){
        extract($_POST);
        $register = $user->reg_user($fullname, $uname, $upass, $uemail);
        if ($register) {
            // Registration Success
            echo "<div style='text-align:center'>Registration successful <a href='login.php'>Click here</a> to login</div>";
        } else {
            // Registration Failed
            echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
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

  <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><h3>Login Register System PHP</h3></a>
          </div>
              <ul class="nav navbar-nav pull-right h4 text-dark">
                <li><a href="profile.php"> Profile </a> </li>
                <li><a href="profile.php"> Logout </a> </li>
                <li><a href="login.php"> Login </a> </li>
                <li><a href="register.php"> Register </a> </li>
              </ul>

        </div>
      </nav>
    </div>




<div class="contaner-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
        	 <div class="card">

<form  method="post" name="reg">
	<p class="h4 mb-4 text-center">User Register</p>
	 <div class="form-group">
    <label for="exampleInputEmail1">Your Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fullname">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uemail">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="upass">
  </div>
  &nbsp;
   <input class="btn" type="submit" name="submit" value="Register" onclick="return(submitreg());">


<br>
   &nbsp;
<a href="login.php">Already registered? Click Here!</a>

</form>

&nbsp;
<a href="login.php">Already registered? Click Here!</a>


</div>
    <script>
      function submitreg() {
        var form = document.reg;
        if (form.name.value == "") {
          alert("Enter name.");
          return false;
        } else if (form.uname.value == "") {
          alert("Enter username.");
          return false;
        } else if (form.upass.value == "") {
          alert("Enter password.");
          return false;
        } else if (form.uemail.value == "") {
          alert("Enter email.");
          return false;
        }
      }
    </script>
</div>
</div>
</div>


















        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>