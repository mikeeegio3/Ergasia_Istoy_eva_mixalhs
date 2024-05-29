<?php 
session_start(); 
require "require/connect_db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
    $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: admin_dashboard.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: admin_dashboard.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admins WHERE admin_username='$uname' AND admin_pass= password('$pass')";
	
		

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
           
            	$_SESSION['user_name'] = $row['admin_username'];
            	$_SESSION['name'] = $row['admin_first'];
				$_SESSION['last_name'] = $row['admin_last'];
				$_SESSION['profile_image']= $row['admin_img'];
            	
            	header("Location: admin_dashboard.php");
		        exit();
           
		}else{
			header("Location: admin_dashboard.php?error=Incorect User name or password".$sql."");
	        exit();
		}
	}
	
}else{
	header("Location: admin_dashboard.php");
	exit();
}