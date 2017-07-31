<!DOCTYPE html>
<html>
<head>
<title>Results</title>
<link rel="stylesheet" type="text/css" href= "index.css">
</head>
<body>
<h1> Hospitality Intrusion Detection System</h1>
<table>
<tr>
	 <td><strong><a href ="index.php">Home</a></strong></td>
        <td><strong><a href="GuestRegistration.php">Guest Database</a></strong></td>
        <td><strong><a href="IntrusionDatabase.php">Intrusion Detection </a></strong></td>
        <td><strong><a href="IntrusionData.php">Intrusion Results </a></strong></td>
</tr>
</table> 
</br>

<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with toor)
*/
include 'database_conn.php';

$sqlIntrusion= "SELECT GuestName, HostelName, RoomNum, Date, Time, Image 
     FROM IntrusionDatabase i INNER JOIN  Image I
     ON i.IDSID = I.IDSID";
 $rsIntrusion = mysqli_query ($conn, $sqlIntrusion) or die(mysqli_error($conn));

/*-- PHP allows to print the data from nic_instrument using while loop--*/ 
 echo "<table border = '6'>
 <tr>
 <th> Guest Name </th>
 <th> Hostel </th>
 <th> Room Number </th>
 <th> Date </th>
 <th> Time </th>
 <th> Image </th>
 </tr>";
 
 while ($Intrusion= mysqli_fetch_assoc($rsIntrusion))
 {
     $guestName= $Intrusion['GuestName'];
     $hostel= $Intrusion['HostelName'];
     $room= $Intrusion['RoomNum'];
     $date= $Intrusion['Date'];
     $time= $Intrusion['Time'];
     $image= $Intrusion['Image'];
     echo "<tr><td>".$guestName."</td>";
     echo "<td>".$hostel."</td>";
     echo "<td>".$room."</td>";
     echo "<td>".$date."</td>";
     echo "<td>".$time."</td>";
     echo "<td>".$image."</td>";
     echo "</tr>";
 }
 echo "</table>";
 
 mysqli_free_result($rsIntrusion);
 mysqli_close($conn);
?>

</body>
</html>

