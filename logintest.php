
<?php
$user=$_POST["uname"];
$pass=$_POST["upswd"];
$conn=mysqli_connect("localhost","root","","walter white hotels");
if(!$conn)
{
die('connection failed'.mysqli_connect_error());
}

if ($user=='admin' && $pass=='admin'){
header ("location:admindetails.php");

}


$sql="SELECT * FROM register1 WHERE uname1='$user' and upswd1='$pass'";
if($result=mysqli_query($conn,$sql))
{
if(mysqli_num_rows($result)>0)
{
echo "success";
header("location:http://localhost//Walter%20White%20Hotels/resort.html");
}
else
echo "";
}
?>
