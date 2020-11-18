<? php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Donate</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<body>
<nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="mission.php">Mission</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="donate.php">Donate</a></li>
                <li><a href="sponsor.php">Sponsors</a></li>
            </ul>
            <ul id="nav-mobile" class="sidenav">
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="mission.php">Mission</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="donate.php">Donate</a></li>
                <li><a href="sponsor.php">Sponsors</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
   	<div class="container">
   		<div class="section">
   			<form action="transfer.php" method="POST">
   				<label for="fname">First Name:</label>
   				<input type="text" id="fname" name="fname" placeholder="John" required><br><br>
				<label for="lname">Last name:</label>
				<input type="text" id="lname" name="lname" placeholder="Smith" required><br><br>
				<label for="phone">Phone Number:</label>
				<input type="number" id="phone" name="phone" placeholder="9999999999" required><br><br>
				<label for="email">Email Address:</label>
				<input type="text" id="email" name="email" placeholder="abc@example.com" required><br><br>
				<label for="location">Location:</label>
				<input type="text" id="location" name="location" placeholder="Mumbai, India" required><br><br>
				<label for="amount">Enter the amout to be donated:</label>
				<input type="number" name="amount" id="amount" placeholder="Amount(in ₹)"></input>
				<button type="submit" class="waves-effect waves-light btn">Proceed To Pay</button>
   			</form>
   			<br><br><br><br>
   			<form method="POST" action="pgRedirect.php">
				<label for="">Order ID</label>
			    <input id="ORDER_ID"  name="ORDER_ID" value="<?php echo "OD".rand(10000,500000) ?>" type="text"/><br><br>
			    <label for=""> Customer ID</label>
			    <input type="text" id="CUST_ID" name="CUST_ID" value="CUST001"/><br><br>
			    <label for="">INDUSTRY TYPE ID</label>
			    <input id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" type="text" value="Film" /><br><br>
			    <label for="">CHANNEL ID</label>
			    <input id="CHANNEL_ID" name="CHANNEL_ID" type="text" value="WEB"/><br><br>
			    <label for="">Transaction Amount</label>
			    <input type="text" id="TXN_AMOUNT" name="TXN_AMOUNT" value="1" /><br><br>
			    <button type="submit" class="btn btn-primary">Pay with Paytm</button>
			</form>
   		</div>
   	</div>
</body>
</html>