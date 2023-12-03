<?php 

session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['email'])
    && isset($_POST['password']) && isset($_POST['re_password'])) {
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		 }
	 
		 $uname = validate($_POST['uname']);
		 $pass = validate($_POST['password']);
		 $re_pass = validate($_POST['re_password']);
		 $name = validate($_POST['name']);
		 $email = validate($_POST['email']);
		 $code = validate($_POST['code']);
	 
		 $user_data = 'uname='. $uname. '&name='. $name;
	 
	 
		 if (empty($uname)) {
			 header("Location: signup.php?error=Phone number is required&$user_data");
			 exit();
		 }else if(empty($pass)){
			 header("Location: signup.php?error=Password is required&$user_data");
			 exit();
		 }
		 else if(empty($re_pass)){
			 header("Location: signup.php?error=Re Password is required&$user_data");
			 exit();
		 }
		 else if(empty($email)){
			header("Location: signup.php?error=Email is required&$user_data");
			exit();
		}
		 else if($pass !== $re_pass){
			 header("Location: signup.php?error=The confirmation password  does not match&$user_data");
			 exit();
		 }
		 
	 
		 else{

	 
			 $sql = "SELECT * FROM users WHERE user_name='$uname' ";
			 $result = mysqli_query($conn, $sql);
	 
			 if (mysqli_num_rows($result) > 0) {
				 header("Location: signup.php?error=Phone number is taken try another&$user_data");
				 exit();
			 }else {
				$sql2 = "INSERT INTO users(user_name, password, email, code) VALUES('$uname', '$pass', '$email', '$code')";
				$result2 = mysqli_query($conn, $sql2);
				if ($result2) {
					 header("Location: signup.php?success=Your account has been created successfully");
				  exit();
				}else {
						header("Location: signup.php?error=unknown error occurred&$user_data");
					 exit();
				}
			 }
			}
		}
else 
		echo "wtf";	

