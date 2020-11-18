<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
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
    		<form action="" method="POST">
    		<label for="cname">Name:</label>
   				<input type="text" id="cname" name="cname" placeholder="John Doe Smith" required><br><br>
   			<label for="cnumber">Phone Number:</label>
				<input type="number" id="cnumber" name="cnumber" placeholder="0123 4567 8910 1112" required><br><br>
			<label for="expiration">Expiration (mm/yy)</label>
			<input type="month" id="expiration" name="month" placeholder="12/25"><br><br>
			<label for ="code">Security Code</label>
			<input type="number" max=3 id="code" name="code" placeholder="999"><br><br>
			<button type="submit" class="waves-effect waves-light btn">Pay</button>
		</form>
		
    	</div>
    </div>
    <footer class="page-footer black">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>