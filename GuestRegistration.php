<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href= "index.css">
</style>
</head>
<h1> Hospitality Intrusion Detection System </h1>
<body>
<table>
<tr>
	<td><strong><a href ="index.php">Home</a></strong></td>
	<td><strong><a href="GuestRegistration.php">Guest Database</a></strong></td>
	<td><strong><a href="IntrusionDatabase.php">Intrusion Detection </a></strong></td>
	<td><strong><a href="IntrusionData.php">Intrusion Results </a></strong></td>
</tr>
</table> 
</br>

<form action ="Guest.php" method="post">
	<p>	
		<label for="GuestName">Guest Name</label>
		<input type="text" name="guestname" id="GuestName"><br></br>

                <label for="Country">Country of Residence</label>
                <select name="country" id="Country">
		<option value ="Country">Country</option>
		<option value ="Australia">Australia</option>
		<option value ="Austria">Austria</option>
		<option value ="Belgium">Belgium</option>
		<option value ="Brunei">Brunei</option>
		<option value ="Canada">Canada</option>
		<option value ="China">China</option>
		<option value ="Denmark">Denmark</option>
		<option value ="Finland">Finland</option>
		<option value ="France">France</option>
		<option value ="Germany">Germany</option>
		<option value ="Greece">Greece</option>
		<option value ="Hong Kong">Hong Kong</option>
		<option value ="India">India</option>
		<option value ="Indonesia">Indonesia</option>
		<option value ="Italy">Italy</option>
		<option value ="Japan">Japan</option>
		<option value ="Malaysia">Malaysia</option>
		<option value ="Myanmar">Myanmar</option>
		<option value ="New Zealand">New Zealand</option>
		<option value ="Netherlands">Netherlands</option>
		<option value ="Norway">Norway</option>
		<option value ="Poland">Poland</option>
		<option value ="Republic of Ireland">Republic of Ireland</option>
		<option value ="Russia">Russia</option>
		<option value ="South Africa">South Africa</option>
		<option value ="South Korea">South Korea</option>
		<option value ="Spain">Spain</option>
		<option value ="Switzerland">Switzerland</option>
		<option value ="Sweden">Sweden</option>
		<option value ="Thailand">Thailand</option>
		<option value ="Turkey">Turkey</option>
		<option value ="United Kingdom">United Kingdom</option>
		<option value ="United States of America">United States of America</option>
		</select><br></br>
                <label for "National">Nationality</label>
                <input type="text" name="nationality" id "National"><br></br>
	        
		<label for="Passport">Passport Number</label>
                <input type="text" name="passport" id="Passport"><br><br/>
		

		<label for="Email">Email Address</label>
                <input type="text" name="email" id="Email"><br></br>

		<label for="Hostel">Hostel Name</label>
                <input type="text" name="accommodation" id="Hostel"><br><br/>
	
		<label for="Room">Room Number</label>
                <input type="text" name="room" id="Room"><br><br/>
	
		<label for="Contact">Contact Number</label>
                <input type="text" name="contact" id="Contact"><br><br/>
	
		<label for="HotelContact">Hotel Contact Number</label>
                <input type="text" name="hotelphone" id="HotelContact"><br><br/>
	
		<label for="Checkin">Check-in Date</label>
                <input type="date" name="checkin" id="Checkin"><br><br/>
	
		<label for="Checkout">Check-out Date</label>
                <input type="date" name="checkout" id="Checkout"><br><br/>
	
		<button type="Submit" value="Submit">Submit</button><br><br/>
	</p>
        </table>
</form>

</body>
</html>
