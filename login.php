<?php
$user=$_POST["uname"];
$pass=$_POST["upswd"];
$conn=mysqli_connect("localhost","root","","walter white hotels");
if(!$conn)
{
die('connection failed'.mysqli_connect_error());
}

if ($user=='admin' && $pass=='admin'){
echo "USER CREDENTIALS<br>";
 $sql="select * from register1";
                    $query=$conn->query($sql);
                    $iterate=1;
                    while($row=$query->fetch_array()){
                        echo "
                          <tr>
                            <td>$row[uname1]</td>
                            <td>$row[email]</td>
                            <td>$row[upswd1]</td>
                            <td>$row[upswd2]</td>
                            
                            
                            </tr>
<br>
";}


echo "<br><br>";
echo "ROOM BOOKINGS<br>";
$sql1="select * from resort1";
                    $query1=$conn->query($sql1);
                    $iterate=1;
                    while($row1=$query1->fetch_array()){
                        echo "
                          <tr>
                            <td>$row1[fname1]</td>
                            <td>$row1[lname1]</td>
                            <td>$row1[email]</td>
                            <td>$row1[noofrooms]</td>
			                      <td>$row1[cin]</td>
                            <td>$row1[cod]</td>
                            
                            </tr>
<br>
";}



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