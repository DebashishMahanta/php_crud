<html>
    <head>
        <title>Dev</title>
        <style>
            body{
                background: rgba(64,60,6,0.84);
            }    
            table{
background-color: white;
            }
           

        </style>
    </head>
</html>
<?php
include("connection.php");
error_reporting(0);

$query= "SELECT * From form";
$data= mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);

//echo $result['fname']." ".$result['lname']." ".$result['gender']." ".$result['email']." ".$result['phone']." ".$result['address'];

if($total != 0)
{
?>
    
<h2 align="center"><mark>displaying all records</h2>
<center><table border="20px solid red" cellspacing="5" width"90%">
<tr>

<th width="10%">fname</th>
<th width="10%">lname</th>
<th width="10%">gender</th>
<th width="10%">email</th>
<th width="10%">phone</th>
<th width="10%">address</th>

</tr>

<?php
while($result = mysqli_fetch_assoc($data))

{
    echo "<tr>

          <td> ".$result ['fname']."</td>
          <td> ".$result ['lname']."</td>
          <td> ".$result ['gender']."</td>
          <td> ".$result ['email']."</td>
          <td> ".$result ['phone']."</td>
          <td> ".$result ['address']."</td>
</tr>";

}
}
    else{
        echo "record not found";
    }
?>
</table>
</center>