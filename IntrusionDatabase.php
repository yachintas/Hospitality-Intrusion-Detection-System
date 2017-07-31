<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Intrusion Detection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href= "index.css">
</style>
</head>
<body>
<h1> Hospitality Intrusion Detection System </h1>
<table>
<tr>
        <td><strong><a href ="index.php">Home</a></strong></td>
        <td><strong><a href="GuestRegistration.php">Guest Database</a></strong></td>
        <td><strong><a href="IntrusionDatabase.php">Intrusion Detection </a></strong></td>
        <td><strong><a href="IntrusionData.php">Intrusion Results </a></strong></td>
</tr>
</table>
</br>

<form action ="Intrusion.php" method="post">
        <p>
                <label for="GuestName">Guest Name</label>
                <input type="text" name="guestname" id="GuestName"><br></br>

		 <label for="Hostel">Hostel</label>
                <input type="text" name="hotel" id="Hostel"><br><br/>

                <label for="Room">Room Number</label>
                <input type="text" name="room" id="Room"><br><br/>

		<label for="date">Date</label>
		<input type="date" name="date" id="date"><br><br/>

		<label for="time">Time</label>
		<input type="time" name="time" id="time"><br></br>

        	<input type ="submit" name="submit" value="Submit"><br><br/>

</form>
</p>
</body>
</html>
