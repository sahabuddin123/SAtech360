<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LOGIN</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<!-- css style -->
	<link rel="stylesheet" type="text/css" href="login.css" />
</head>

<body>
<header>
 <!-- nav bar , header part -->
        <nav class="fbheader" style="padding: 0px 184px 0px 150px ;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7" style="margin-top: 29px"><h3>SA INSTITUTE</h3></div>
						<div class="col-lg-5" style="margin-top: 1px">
                        	<div class="row">
                            	<div class="col-lg-5"><label> Email or Phone </label></div>
                                <div class="col-lg-5"><label> Password </label></div>
                           	</div>
                                <div class="row">
                            		<div class="col-lg-5">
                       	 				<input type="text" name="phone_number_or_email"  placeholder="Enter Email"  class="form-control form-controlsetting"  autocomplete="off">		
									</div>
									<div class="col-lg-5">
											<input type="password" name="password"  placeholder="Enter Password"  class="form-control form-controlsetting"  autocomplete="off">		
									</div>
										<div class="col-lg-2">
											<a href="#"><input type="submit" name="" class="btn text-white form-controlsetting" value="LogIn" style="background-color:#CC6600; line-height: 0px"></a>
										</div>
                                			
                            </div>
                            
								<div class="row">
									<div class="col-lg-5"></div>
								  	<div class="col-lg-5">
										<a href="#" style="color: #9cb4d8;"> Forgotten account? </a>
									</div>
                        		</div>
                    	</div>
                </div>
            </div>
        </nav>
</header>

 <!-- ragister -->
    <section style="background-color: #f3f4f9; height: 620px; padding: 30px 154px">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 float-left;" style="margin-left: 0px;">
					 <h2 style="color: #0e385f; font-size: 20px;">SA Institute helps you learn and earn with IT Information in your life.</h2>
                    <br>
                    <img src="register.jpg" width="535px" height="300px">
                </div>
                <div class="col-lg-5 " style="margin-left:  80px!important;">
					<h2> Create an account </h2>
                    <h5 style="    font-size: 19px!important;     color: #333!important; margin-bottom: 15px; "> It's free and always will be.</h5>
					 
					 <!-- php from action -->
					<form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
						</hr>
						<?php 
						if(isset($successMsg)){
						?>
						<div class="alert alert-success">
						<span class="glyphicon glyphicon-info-sign"></span>
						<?php echo $successMsg; ?>
						</div>
						<?php
						}
						?>
                    	<div class="row">
                        	<div class="col-lg-6 form-group">
                            <input type="text" name="name1" placeholder="Fist name" autocomplete="off"  class="form-control">
							<span class="text-danger"><?php if(isset($errorFirstname)) echo $errorFirstname; ?></span>
                        	</div>
							<div class="col-lg-6 form-group">
                            <input type="text" name="name2" placeholder="Last name" autocomplete="off" class="form-control">
							<span class="text-danger"><?php if(isset($errorLastname)) echo $errorLastname; ?></span>
                        	</div>
                    	</div>
						<div class="row">
							<div class="col-lg-12 form-group">
                            	<input type="text" name="email" placeholder="Email"  class="form-control">
								<span class="text-danger"><?php if(isset($errorEmail)) echo $errorEmail; ?></span>
                        	</div>
                    	</div>
                    	<div class="row">
                        	<div class="col-lg-12 form-group">
                            	<input type="password" name="password" placeholder="Create a New Password"  class="form-control">
								<span class="text-danger"><?php if(isset($errorPassword)) echo $errorPassword; ?></span>
                        	</div>
                    	</div>
                    	<div class="row">
                        	<div class="col-lg-4">
                            	<h5> Birthday </h5>
                        	</div>
                    	</div>


    <!-- Birth day part -->
                    <div class="row">
                        <div class="form-group col-lg-8">
                            <div class="row">
                             	<div class="col-lg-4 form-group">
                            		<input type="text" name="day" placeholder="dd"  class="form-control">
								</div>
								<div class="col-lg-4 form-group">
                            		<input type="text" name="month" placeholder="mm"  class="form-control">
								</div>
								<div class="col-lg-4 form-group">
                            		<input type="text" name="year" placeholder="yyyy"  class="form-control">
								</div>
                            </div>
	                    </div>
                        		<div class="col-lg-5">
                            		<a href="#" style="color: #365899;font-size: 11px;"> Why do I need to provide my date of birth? </a> 
    							</div>
                       

                   </div>

                    <div class="row">
                        <div class="col-lg-9">
                                <input type="text" name="gender" placeholder="Gender" class="form-control">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-10">
                            <a href="#" class="datafb"> By clicking Create Account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy.</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"><br><button class="btn btn-success" name="submit"> Register Naw </button></div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loging";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
			echo 'Connection Error '.mysqli_connect_error();
		  }
?>

<?php

$error = false;

if(isset($_POST['submit']))
{
					$firstname = $_POST['name1'];
					$firstname = strip_tags($firstname);
					$firstname =  htmlspecialchars($firstname);
															
					$lastname = $_POST['name2'];
					$lastname = strip_tags($lastname);
					$lastname =  htmlspecialchars($lastname);
					
					$email = $_POST['email'];
					$email = strip_tags($email);
					$email =  htmlspecialchars($email);
					
					$password = $_POST['password'];
					$password = strip_tags($password);
					$password =  htmlspecialchars($password);
					
					$day = $_POST['day'];
					$day = strip_tags($day);
					$day =  htmlspecialchars($day);

					$month = $_POST['month'];
					$month = strip_tags($month);
					$month =  htmlspecialchars($month);

					$year = $_POST['year'];
					$year = strip_tags($year);
					$year =  htmlspecialchars($year);
					
					$gender = $_POST['gender'];
					$gender = strip_tags($gender);
					$gender =  htmlspecialchars($gender);
					
					if(empty($firstname)){
					$error = true;
					$errorFirstname = 'Please input Firstname';
					}
					if(empty($lastname)){
					$error = true;
					$errorLastname = 'Please input Lastname';
					}
					 
					if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$error = true;
					$errorEmail = 'Please input a vlid email';
					}
					if(empty($password)){
					$error = true;
					$errorPassword = 'Please input password';
					}elseif(strlen($password) < 8){
					$error = true;
					$errorPassword = 'Please input must at least 8 characters';
					}
					$password = md5($password);
					
					if(!$error){
								$sql = "insert into `login`(`firstname`,`lastname`,`email`,`password`,`Birthday`,`Birth_month`,`Birth_year`,`gender`) values('$firstname','$lastname','$email','$password','$day','$month','$year','$gender')";
								if(mysqli_query($conn, $sql)){
								$successMsg = 'Register successfully';
								}else{
								echo 'error'.mysqli_error($conn);
									  }
								}
}
					

?>
