<?php
$servername = "localhost";
$username = "normal_user";
$password = "";
$dbname = "ireland";
$q = $_GET["loginUsername"];//change this to the register name var from form
$d = $_GET[""] //change this to register display name var from the form
//TG 3-11


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn, "SELECT Username FROM users_drink WHERE Display_Name = '".$d."' Username = '".$q."'");
if(mysqli_fetch_row($result)==1)
{
	header('Location: ../home.html');
	echo alert("Username already taken!")
}
else
{	//TODO
	//create a new user and tell the user that they
	//have been successfully added to DB
	//TG 3-11
}
	
//mysqli_free_result($result);
mysqli_close($conn);

?>