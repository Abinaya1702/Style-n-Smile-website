<?php
$uname1=$_POST['uname1'];
$email=$_POST['email'];
$upswd1=$_POST['upswd1'];
$upswd2=$_POST['upswd2'];
$conn=mysqli_connect("localhost:3306","root","","walter white hotels");
if(!$conn)
die("connection error".mysqli_connect_error());
echo "connected successfully...!";
$sql="insert into register1(uname1,email,upswd1,upswd2) values('$uname1','$email','$upswd1','$upswd2')";
if(mysqli_query($conn,$sql))
echo "Insertion successfull";
//header("location:file:///D:/xampp/htdocs/Walter%20White%20Hotels/walter%20white%20resorts.html");
/*else
echo "Insertion failure";
*/?>