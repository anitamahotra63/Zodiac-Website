<?php

	$emailreg = $_POST['getEmail'];
	$passwordreg = $_POST['getPassword'];

	$emailreg = stripcslashes($emailreg);
	$passwordreg = stripcslashes($passwordreg);
	$emailreg = mysql_real_escape_string($emailreg);
	$passwordreg = mysql_real_escape_string($passwordreg);

	$taken ="false";
	if($emailreg && $passwordreg){

		$con = mysql_connect("localhost","root","");
		@mysql_select_db("login",$con) or die("unable to connect");

		mysql_query("INSERT INTO `users` (`id`, `Email`, `password`) VALUES ('', '$emailreg', '$passwordreg')");
		echo "Account Created!";

		mysql_close($con);


	}else{
		echo "you need to have both username and password";
	}

?>