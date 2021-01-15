<?php
session_start();
$_SESSION['username'] = "none";
if (isset($_REQUEST['signin']))
{

    $con = mysqli_connect("localhost", "root","","id15467790_bjb") or die ("could not connect to mysql");

    $username = $_REQUEST['username'];
    $pw = $_REQUEST['pw'];

    $result = mysqli_query($con, "SELECT * FROM account 
                                    WHERE username = '" . $username . "' and pw = '" . $pw . "'");

    $row = mysqli_fetch_array($result);

    if(is_array($row))
    {
		echo "<script>";
			echo "location = 'signup.php';";
			echo "</script>";
	}

    else
    {
        echo "<script>";
        echo "alert('You have entered an invalid User ID or Password. Please log in again.')";
        echo "</script>";
	}
           
    $con->close();
}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="assets/img/bjb7.jpg" />
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Log  In</h3>
            </div>
            
			<div class="card-body">
                <form action="<?php $_PHP_SELF ?>" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Username">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="pw" class="form-control" placeholder="Password">
					</div>

					<div class="row align-items-center remember">
						<input type="checkbox">Remember username
					</div>
					<div class="form-group">
						<input type="submit" name="signin" value="LogIn" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
                    Doesn't have account? Click<a href="signup.php">here</a> 
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>