<?php 
	session_start();
	include('db_connect.php');
	$amount=$_SESSION["amount"];
	$senderfname=$_SESSION["fname"];
	$senderlname=$_SESSION["lname"];
	$transaction=$_SESSION["transaction"];
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
    <title>Transfer Completion</title>
</head>
<body>
	<?php include('navbar.php'); ?>
    <div class="container" style="margin-bottom: 70vh;">
    	<div class="section">
    		<?php 
    			if($transaction) {
    				echo "<h3 class=\"green-text\"> Transaction Successful!</h3>";
					echo "<h5>₹{$amount} has been deducted from your account i.e. {$senderfname} {$senderlname} and the fund is succesfully transfered to the Foundation.</h5>";
    			}
    			else {
    				echo "<h3 class=\"red-text accent-3\"> Transaction Failed!</h3>";
    			}

    			echo "<p>Redirecting to home, please wait. <a href=\"home.php\">Click here</a> to redirect manually</p>";
				header( "refresh:7;url=index.php" );
    		?>
    	</div>

    </div>
    <?php include('footer.php'); ?>
</body>
</html>