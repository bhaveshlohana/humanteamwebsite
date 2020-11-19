<?php 
	include('db_connect.php');
	session_start();
	if($_SERVER["REQUEST_METHOD"]=='POST'){
		$senderfname = $_POST['fname'];
		$senderlname = $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$location = $_POST['location'];
		$amount = $_POST['amount'];
		$_SESSION["fname"] = $senderfname;
		$_SESSION["lname"] = $senderlname;
		$_SESSION["amount"] = $amount;
		$sql = "INSERT INTO donation (fname, lname, phone, email, location, donation_amount)
				VALUES ('{$senderfname}', '{$senderlname}', {$phone}, '{$email}', '{$location}', {$amount})";
		$transaction=mysqli_query($conn, $sql);
		if (!$transaction) {
		  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		$_SESSION["transaction"]=$transaction;
		mysqli_close($conn);
        

	} 

?>

<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
    <title>Transfer</title>
</head>
<body>
	<?php include('navbar.php'); ?>
    <div class="container">
    	<div class="section">
    		<form action="transferComplete.php" method="POST">
    		<label for="cname">Name:</label>
   				<input type="text" id="cname" name="cname" placeholder="John Doe Smith" required><br><br>
   			<label for="cnumber">Phone Number:</label>
				<input type="number" id="cnumber" name="cnumber" placeholder="0123 4567 8910 1112" required><br><br>
			<label for="expiration">Expiration (mm/yy)</label>
			<input type="month" id="expiration" name="month" placeholder="12/25"><br><br>
			<label for ="code">Security Code</label>
			<input type="number" max=999 id="code" name="code" placeholder="999"><br><br>
			<button type="submit" class="waves-effect waves-light btn">Pay</button>
		</form>

    	</div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>