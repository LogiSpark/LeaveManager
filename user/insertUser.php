<?php

	include("../functions.php");

	

	require_once('../libs/phpmailer/class.phpmailer.php');
	require_once("../libs/phpmailer/class.smtp.php");
	require ("../libs/phpmailer/PHPMailerAutoload.php");
//	session_start();
	$validation = 0;

	foreach ($_POST as $key => $value) 
	{
			$$key = $value; 
	}

	$_SESSION['Data']=$_POST;
	if(empty($name))
	{
		$_SESSION['errors'][] = "Empty Name" ;
		$validation = 1;
	}
	if(empty($password))
	{
		$_SESSION['errors'][] = "Empty Password" ;
		$validation = 1;
	}
	if(empty($username))
	{
		$_SESSION['errors'][] = "Empty Email" ;
		$validation = 1;
	}
	if(empty($contactNo))
	{
		$_SESSION['errors'][] = "Empty contact number" ;
		$validation = 1;
	}

	$query = "select * from employee where username = '$username'";
	$res = execute($query);
	$num = total_rows($res);
	if($num>0)
	{
		$_SESSION['errors'][] = "An account for this email already exists" ;
		$validation = 1;
	}


	if($validation == 1)
	{
//		header("Location:addUser.php");
        print_r($_POST);
		exit;
	}
echo("ghusgaya");
	insert($_SESSION['Data'], "employee");
//
//	$condition =array('username' => $username );
//
//	$rs=listWhere("employee",$condition);
//
//	$result = fetch_array($rs);
//
//	$id = $result['id'];
//
//	$email='leaveapplicationforms@gmail.com';
//	$emailOfRec = $username;
//	$mailer = new PHPMailer();
//	$mailer->IsSMTP();
//	$mailer->SMTPSecure = 'tls';
//	$mailer->Host = 'smtp.gmail.com';
//	$mailer->SMPTDebug = 2;
//	$mailer->Port = 587;
//	$mailer->Username = $email;//NepHelp Email Address.
//	$mailer->Password = "Sheru!@#4";//NepHelp Password
//	$mailer->SMTPAuth = true;
//	$mailer->From = $email;////NepHelp Email Address
//	$mailer->FromName = "Leave application";
//	$mailer->Subject = 'Leave Form - Registration';
//	$mailer->isHTML(true);
//	$localIP = getHostByName(getHostName());
//
//
//	$mailer->Body="Hello Sir,<p> This is verification email. Click this <a href='$localIP/LeaveApp/statusChange.php?id=$id'>link</a> to complete registration.<br><br>Thanks,<br>Leave Application";
//	$mailer->AddAddress($emailOfRec,'Leave Manager');
//
//	if($mailer->Send()){
//
//	}else{
//	    $_SESSION['error'][] = "An attempt to send a registration email to $emailOfRec failed" ;
//	   	delete("student",$condition);
//	   	header("Location:addUser.php");
//		exit;
//	}

?>

<html>
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device, initial-sctiale=1.0">
      <title>Add User</title>
       <link href="../libs/css/bootstrap.min.css" rel="stylesheet">
      <!-- in server <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->


  </head>
  <div class="container">
	<body class= "bg-info">
		<nav class="navbar navbar-default navbar-static-top">
		    <div class = "navbar-header">
		      <a class = "navbar-brand" href = "http://www.dwit.edu.np">College site</a>
		    </div>



		      <ul class = "nav navbar-nav">
		         <li class = "active"><a href = "http://www.classroom.dwit.edu.np">The Classroom site</a></li>
		         <li><a href = "#">About us</a></li>
		      </ul>
		</nav>
		<div class="jumbotron well-lg ">
				<div class = "row">
					<h1 class = "text-success col-md-9 ">Leave application Form</h1>

				</div>
		</div>
		<p><h3>An email is sent to <?php echo $username;?>. Follow the instructions in the email to complete your registration.</b></h3><p>


		<br>

	</body>
</div>
</html>


