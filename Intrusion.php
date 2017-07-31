<!DOCTYPE html>
<html>
<head>
<title>Guest Verification</title>
<link rel="stylesheet" type="text/css" href= "index.css">
</head>
<body>
<h1> Hospitality Intrusion Detection System </h1>
<table>
<tr>
        <td><strong><a href ="index.php">Home</a></strong></td>
        <td><strong><a href="GuestRegistration.php">Guest Database</a></strong</td>
        <td><strong><a href="IntrusionDatabase.php">Intrusion Detection </a></strong></td>
         <td><strong><a href="IntrusionData.php">Intrusion Results</a></strong></td>
</tr>
</table>
</br>

<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with toor)
*/
$link = mysqli_connect("localhost", "root", "toor", "HIDS");

// Check connection
if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$guestname = mysqli_real_escape_string($link, $_POST['guestname']);
$hostel = mysqli_real_escape_string($link, $_POST['hotel']);
$room_num = mysqli_real_escape_string($link, $_POST['room']);
$date = mysqli_real_escape_string($link, $_POST['date']);
$time = mysqli_real_escape_string($link, $_POST['time']);

// attempt insert query execution
$sql = "INSERT INTO IntrusionDatabase (GuestName, HostelName, RoomNum, Date, Time) VALUES ('$guestname', '$hostel', '$room_num', '$date', '$time')";

if(mysqli_query($link, $sql))
{
    echo "Data has been inserted successfully.";
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
