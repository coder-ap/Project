<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "details";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$name=$_POST['Name'];
$email=$_POST['Email'];
$pswd=$_POST['Password'];
$phn=$_POST['Phone No'];

$s="select * from sign1 where Name = '$name'";

$result=mysqli_query($conn , $s);

$num=mysqli_num_rows($result);

if(num==1)
{
    echo "User Name Already Taken";
}
else
{
    $reg="insert into sign1(Name,Password,Email,Phone No) values('$name','$email','$pswd','$phn')";
    
    mysql_query($conn , $reg);
    echo "Registration Successful";
}

?>