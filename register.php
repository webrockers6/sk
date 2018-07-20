<?php
$serveraname="localhost";

$dbname="table";

$uname=$_POST["name"];
$mail=$_POST["mail"];
$pno=$_POST["phone"];
$gender=$_POST["gender"];
$pwd=$_POST["password"];
$rpwd=$_POST["rpassword"];
 
$con=mysqli_connect($servername,$dbname);
if(!$con)
{
 die("Connection Failed:".mysqli_connect_error());
}

$sql="INSERT INTO web VALUES ('$uname,$mail,$pno,$gender,$pwd,$rpwd)";

if  (mysqli_query($con,$sql))
{
  echo "New Record Created successfully";
}
else
{
 echo "Error: ". $sql ."<br>" .mysqli_error($con);
}

mysqli_close($con);
?>