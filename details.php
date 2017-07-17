<!DOCTYPE html>
<html>
<head>
<style>
table {
      font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;
}
th{
  background-color:#5D6D7E  ;
    border: 1px solid #dddddd;
    text-align: left;
    color:#FDFEFE  ;
    padding: 15px;
}

 td {
     border: 1px solid #dddddd;
    text-align: left;
    padding: 15px;
    color:#000000;
}
tr:nth-child(odd) {
    background-color: #dddddd;
}
tr:nth-child(even) {
    background-color: #ffffff;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
if($q==1){
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
$sql="SELECT * FROM registery where Bloodgroup='O+'";
$result = $conn->query($sql);
echo "<table>
<tr>
<th>Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Bloodgroup</th>
<th>Phone No</th>
</tr>";
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) 
{
      echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Dob'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Gender'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "<td>" . $row['Bloodgroup'] . "</td>";
    echo "<td>" . $row['Phno'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
$conn->close();
}
?>
<?php
$q1 = intval($_GET['q']);
if($q1==2){
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blooddonation";

// Create connection
$conn1 = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
}
$sql1="SELECT * FROM registery where Bloodgroup='O-'";
$result1 = $conn1->query($sql1);
echo "<table>
<tr>
<th>Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Bloodgroup</th>
<th>Phone No</th>
</tr>";
if ($result1->num_rows > 0) 
{
while($row1 = $result1->fetch_assoc()) 
{
      echo "<tr>";
    echo "<td>" . $row1['Name'] . "</td>";
    echo "<td>" . $row1['Dob'] . "</td>";
    echo "<td>" . $row1['Age'] . "</td>";
    echo "<td>" . $row1['Gender'] . "</td>";
    echo "<td>" . $row1['Address'] . "</td>";
    echo "<td>" . $row1['Bloodgroup'] . "</td>";
    echo "<td>" . $row1['Phno'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
$conn1->close();
}
?>
<?php
$q2 = intval($_GET['q']);
if($q2==3){
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blooddonation";

// Create connection
$conn2 = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}
$sql2="SELECT * FROM registery where Bloodgroup='A+'";
$result2 = $conn2->query($sql2);
echo "<table>
<tr>
<th>Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Bloodgroup</th>
<th>Phone No</th>
</tr>";
if ($result2->num_rows > 0) 
{
while($row2 = $result2->fetch_assoc()) 
{
      echo "<tr>";
    echo "<td>" . $row2['Name'] . "</td>";
    echo "<td>" . $row2['Dob'] . "</td>";
    echo "<td>" . $row2['Age'] . "</td>";
    echo "<td>" . $row2['Gender'] . "</td>";
    echo "<td>" . $row2['Address'] . "</td>";
    echo "<td>" . $row2['Bloodgroup'] . "</td>";
    echo "<td>" . $row2['Phno'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
$conn2->close();
}
?>
<?php
$q3 = intval($_GET['q']);
if($q3==4){
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blooddonation";

// Create connection
$conn3 = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn3->connect_error) {
    die("Connection failed: " . $conn3->connect_error);
}
$sql3="SELECT * FROM registery where Bloodgroup='A-'";
$result3 = $conn3->query($sql3);
echo "<table>
<tr>
<th>Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Bloodgroup</th>
<th>Phone No</th>
</tr>";
if ($result3->num_rows > 0) 
{
while($row3 = $result3->fetch_assoc()) 
{
      echo "<tr>";
    echo "<td>" . $row3['Name'] . "</td>";
    echo "<td>" . $row3['Dob'] . "</td>";
    echo "<td>" . $row3['Age'] . "</td>";
    echo "<td>" . $row3['Gender'] . "</td>";
    echo "<td>" . $row3['Address'] . "</td>";
    echo "<td>" . $row3['Bloodgroup'] . "</td>";
    echo "<td>" . $row3['Phno'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
$conn3->close();
}
?>
<?php
$q4 = intval($_GET['q']);
if($q4==5){
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blooddonation";

// Create connection
$conn4 = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn4->connect_error) {
    die("Connection failed: " . $conn4->connect_error);
}
$sql4="SELECT * FROM registery where Bloodgroup='B+'";
$result4 = $conn4->query($sql4);
echo "<table>
<tr>
<th>Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Bloodgroup</th>
<th>Phone No</th>
</tr>";
if ($result4->num_rows > 0) 
{
while($row4 = $result4->fetch_assoc()) 
{
      echo "<tr>";
    echo "<td>" . $row4['Name'] . "</td>";
    echo "<td>" . $row4['Dob'] . "</td>";
    echo "<td>" . $row4['Age'] . "</td>";
    echo "<td>" . $row4['Gender'] . "</td>";
    echo "<td>" . $row4['Address'] . "</td>";
    echo "<td>" . $row4['Bloodgroup'] . "</td>";
    echo "<td>" . $row4['Phno'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
$conn4->close();
}
?>
<?php
$q5 = intval($_GET['q']);
if($q5==6){
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blooddonation";

// Create connection
$conn5 = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn5->connect_error) {
    die("Connection failed: " . $conn5->connect_error);
}
$sql5="SELECT * FROM registery where Bloodgroup='B-'";
$result5 = $conn5->query($sql5);
echo "<table>
<tr>
<th>Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Bloodgroup</th>
<th>Phone No</th>
</tr>";
if ($result5->num_rows > 0) 
{
while($row5 = $result5->fetch_assoc()) 
{
      echo "<tr>";
    echo "<td>" . $row5['Name'] . "</td>";
    echo "<td>" . $row5['Dob'] . "</td>";
    echo "<td>" . $row5['Age'] . "</td>";
    echo "<td>" . $row5['Gender'] . "</td>";
    echo "<td>" . $row5['Address'] . "</td>";
    echo "<td>" . $row5['Bloodgroup'] . "</td>";
    echo "<td>" . $row5['Phno'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
$conn5->close();
}
?>
<?php
$q6 = intval($_GET['q']);
if($q6==7){
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blooddonation";

// Create connection
$conn6 = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn6->connect_error) {
    die("Connection failed: " . $conn6->connect_error);
}
$sql6="SELECT * FROM registery where Bloodgroup='AB+'";
$result6 = $conn6->query($sql6);
echo "<table>
<tr>
<th>Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Bloodgroup</th>
<th>Phone No</th>
</tr>";
if ($result6->num_rows > 0) 
{
while($row6 = $result6->fetch_assoc()) 
{
      echo "<tr>";
    echo "<td>" . $row6['Name'] . "</td>";
    echo "<td>" . $row6['Dob'] . "</td>";
    echo "<td>" . $row6['Age'] . "</td>";
    echo "<td>" . $row6['Gender'] . "</td>";
    echo "<td>" . $row6['Address'] . "</td>";
    echo "<td>" . $row6['Bloodgroup'] . "</td>";
    echo "<td>" . $row6['Phno'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
$conn6->close();
}
?>
<?php
$q7 = intval($_GET['q']);
if($q7==8){
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blooddonation";

// Create connection
$conn7 = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn7->connect_error) {
    die("Connection failed: " . $conn7->connect_error);
}
$sql7="SELECT * FROM registery where Bloodgroup='AB-'";
$result7 = $conn7->query($sql7);
echo "<table>
<tr>
<th>Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Gender</th>
<th>Address</th>
<th>Bloodgroup</th>
<th>Phone No</th>
</tr>";
if ($result7->num_rows > 0) 
{
while($row7 = $result7->fetch_assoc()) 
{
      echo "<tr>";
    echo "<td>" . $row7['Name'] . "</td>";
    echo "<td>" . $row7['Dob'] . "</td>";
    echo "<td>" . $row7['Age'] . "</td>";
    echo "<td>" . $row7['Gender'] . "</td>";
    echo "<td>" . $row7['Address'] . "</td>";
    echo "<td>" . $row7['Bloodgroup'] . "</td>";
    echo "<td>" . $row7['Phno'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}
$conn7->close();
}
?>



</body>
</html>


