<?php
    if (isset($_REQUEST['register'])){

        $con = mysqli_connect("localhost", "root","","id15467790_bjb") or die ("could not connect to mysql");

        $username = $_REQUEST['username'];  
        $name = $_REQUEST['name'];          
        $email = $_REQUEST['email'];        
        $ic = $_REQUEST['ic'];            
        $pw = $_REQUEST['pw'];            
        $re_pw = $_REQUEST['re-pw'];        
        $bdate = $_REQUEST['bdate'];        
        $phone = $_REQUEST['phone'];       
        $address1 = $_REQUEST['address1'];          
        $address2 = $_REQUEST['address2'];          
        $postcode = $_REQUEST['postcode'];    
        $state = $_REQUEST['state'];       
        $gender = $_REQUEST['gender'];        
             
        
        if ($pw === $re_pw){
            $status = mysqli_query($con, "INSERT INTO account (username, pw, name, email, ic, bdate, phone, address1, address2, state, postcode, gender)
                                            VALUES ('$username', '$pw', '$name', '$email', '$ic', '$bdate', '$phone', '$address1', '$address2', '$state', '$postcode', '$gender')");
                       
            if ($status){
                echo "<script>";
                echo "alert('Your registration has been successful! Please log in with the User ID and Password you have chosen! ');";
                echo "location = 'index.php';";
                echo "</script>";
            }

            else
                echo "Error: " . $status . "<br>" . $con->error;
        }

        else{
            echo "<script>";
            echo "alert('Your Password confirmation is not in line with your Password. Please re-register.')";
            echo "</script>";
        }
        $con->close();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Sign Up Page</title>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="signup.css">
    <script src="js/signup.js"></script>
</head>

<body>
<div class="container">
            <form class="form-horizontal" role="form" action="<?php $_PHP_SELF ?>" method="POST">
                <h2>Register Account</h2>

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label"><b>Username</b></label>
                    <div class="col-sm-12">
                        <input type="text" name="username" placeholder="Username" class="form-control" autofocus required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label"><b>Name</b></label>
                    <div class="col-sm-12">
                        <input type="text" name="name" placeholder="Full Name" class="form-control" autofocus required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"><b>Email Address</b></label>
                    <div class="col-sm-12">
                        <input type="email" name="email" placeholder="@gmail.com" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ic" class="col-sm-10 control-label"><b>IC Number</b></label>
                    <div class="col-sm-12">
                        <input type="text" name="ic" placeholder="000000-00-0000" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label"><b>Password</b></label>
                    <div class="col-sm-12">
                        <input type="password" name="pw" placeholder="Password" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-10 control-label"><b>Password Re-confirmation</b></label>
                    <div class="col-sm-12">
                        <input type="password" name="re-pw" placeholder="Please enter password again" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label"><b>Birth Date</b></label>
                    <div class="col-sm-12">
                        <input type="date" name="bdate" placeholder="yyyy/mm/dd" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label"><b>Phone Number</b></label>
                    <div class="col-sm-12">
                        <input type="phoneNumber" name="phone" placeholder="011-1234567" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ic" class="col-sm-3 control-label"><b>Address 1 </b></label>
                    <div class="col-sm-12">
                        <input type="text" name="address1" placeholder="10, Jalan Bakti 1" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ic" class="col-sm-3 control-label"><b>Address 2</b></label>
                    <div class="col-sm-12">
                        <input type="text" name="address2" placeholder="Taman Universiti" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ic" class="col-sm-3 control-label"><b>City</b></label>
                    <div class="col-sm-12">
                        <input type="text" name="state" placeholder="Johor Bahru" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ic" class="col-sm-3 control-label"><b>Postcode</b></label>
                    <div class="col-sm-12">
                        <input type="number" name="postcode" placeholder="81100" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-3"><b>Gender</b></label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div> 
               
               

                <button type="submit" name="register" class="btn btn-primary btn-block signup_btn"><b>Register Now</b></button>
                
            </form> 
        </div> 
</body>
</html>