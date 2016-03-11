<?php
$servername = "localhost";
$username = "normal_user";
$password = "";
$dbname = "ireland";
$q = $_GET["loginUsername"];



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn, "SELECT Username FROM users_drink WHERE Username = '".$q."'");
if(mysqli_fetch_row($result)==1)
{
	header('Location: ../counter.html');
}
else
{	
	header('Location: ../home.html#');
}
	
//mysqli_free_result($result);
mysqli_close($conn);

?>