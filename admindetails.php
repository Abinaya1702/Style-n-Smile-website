<html>


<head>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
   

<table class="table table-striped">
<div class="table responsive">
    <tbody>
<?php
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

";}?>

<br><br>
                    </tbody>
                    </div>
                    </table>

<table class="table table-striped">
<div class="table responsive">
<tbody>

<?php

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

";}?>
</tbody>
                    </div>
                    </table>

?>

</body>
</html>