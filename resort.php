<?php
$fname1=$_POST['fname1'];
$lname1=$_POST['lname1'];
$email=$_POST['email'];
$noofrooms=$_POST['noofrooms'];
$cin=$_POST['cin'];
$cod=$_POST['cod'];
$conn=mysqli_connect("localhost:3306","root","","walter white hotels");
if(!$conn)
die("connection error".mysqli_connect_error());
echo "connected successfully...!";-
$sql="insert into resort1 (fname1,lname1,email,noofrooms,cin,cod) values ('$fname1','$lname1','$email',$noofrooms,'$cin','$cod')";

if(mysqli_query($conn,$sql)){
echo "Insertion successfull";
header("location:resort_success.html");
}
else{
echo "Insertion failure";}
?>