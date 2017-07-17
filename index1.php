<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blooddonation";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Name = $_POST["user_name"];
$Dob = $_POST["User_dob"];
$Age = $_POST["user_age"];
$Gender = $_POST["user_gender"];
$Address = $_POST["user_address"];
$Bloodgroup = $_POST["user_bloodgrp"];
$Phno = $_POST["user_phoneno"];

$sql="INSERT INTO registery(Name,Dob,Age,Gender,Address,Bloodgroup,Phno) VALUES('$Name','$Dob','$Age','$Gender','$Address','$Bloodgroup','$Phno')";
if(!mysqli_query($conn,$sql))
{
	echo 'Not Inserted';
}
else
{
	echo 'Thank You for Registering...... Successfully Registered';
}
?>

</body>
</html>