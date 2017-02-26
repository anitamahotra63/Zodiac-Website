<?php


	$email = $_POST['inputEmail'];
	$password = $_POST['inputPassword'];


	$email = stripcslashes($email);
	$password = stripcslashes($password);
	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);

	$link = mysql_connect("localhost","root","");
	mysql_select_db("login");
	
	
	$result = mysql_query(" select * from Users where Email = '$email' and password = '$password'");
	$row = mysql_fetch_array($result);

	if($row['Email']==$email && $row['password']==$password){
		echo "login succesfull";
	}else{
		echo "failed to login";
	}

	mysql_close($link);

?>