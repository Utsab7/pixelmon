<?php

$UserId = filter_input(INPUT_POST, User Id)
$EmailId= filter_input(INPUT_POST, Email Id)
$EnterPassword = filter_input(INPUT_POST, Enter Password)
if (!empty($UserId)){
if (!empty($EnterPassword)){
if (!empty($EmailId)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "yt";

//create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
	die('Connect Error ('.mysql_connect_errno().')'
		.mysqli_connect_error());
}
else{
	$sql = "INSERT INTO" registration (UserId, EmailId, EnterPassword)
	values ('$UserId','$EmailId', 'EnterPassword');
	if($conn->query($sql)){
		echo "New record is inserted Successfully";
	}
	else{
		echo "Error". $sql ."<br>". $conn->error;
	}
	$conn->close();
}
}
else{
	echo "Username should not be empty";
	die();
}
else{
	echo "Password should not be empty";
	die();
}
else{
	echo "Email should not be empty";
	die();
}
?>
