<?php

	include 'functions.php';

	$username = $_POST['username'];
	$password = $_POST['password'];


	dbConnect();


	// generate code for checking invalid username

	$query = "select * from employee where username = \"$username\"";

	$result = execute($query);
	$num = total_rows($result);

	
	if ($num == 0) 
	{
		$_SESSION['invalidUser']="This user do not exists ";
		header("Location:login.php");
		exit;
	}

	// generate code for checking invalid password

	$query1 = "select * from employee where username = \"$username\" and password = \"$password\"";

	
	$result2 = execute($query1);
	$num = total_rows($result2);
	if ($num == 0) 
	{
		$_SESSION['invalidUser']="Username and password do not match";
		header("Location:login.php");
		exit;
	}

	// redirect to admin's homepage

		$query = "select username,id, isAdmin from employee where username = \"$username\"" ;
		$res = execute($query);
		$arr = fetch_array($res);
		$_SESSION['loggedInUser'] = $arr['username'];
		$_SESSION['id'] = $arr['id'];
		$id= $arr['id'];
		if($arr['isAdmin']) {
            header("location:admin/home.php?id=$id");
            exit;
        }
        else{
            header("location:user/home.php?id=$id");
            exit;
        }


?>