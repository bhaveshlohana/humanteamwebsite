<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
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
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2">Human Team Foundation</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Together We Can</h5>
                </div>
                <div class="row center">
                    <a href="events.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Upcoming Events</a>
                    <a href="donate.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Donate</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="images/123.jpg" alt="Unsplashed background img 1"></div>
    </div>
    <h3 style="text-align: center;">Mission</h3>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="icon-block">
                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                </div>
            </div>
        </div>
        <div class="parallax"><img src="images/ngo2.jpg" alt="Unsplashed background img 2"></div>
    </div>
    <div class="container">
        <div class="section">
          <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/ngo5.jpg" height="200">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Kids Event<i class="material-icons right"></i></span>
                        <p><a href="donate.php">Donate ₹500</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Kids Event<i class="material-icons right">close</i></span>
                        <p>Details about Kids Event</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/ngo4.jpg" height="200">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Food Drive<i class="material-icons right"></i></span>
                        <p><a href="donate.php">Donate ₹1000</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Food Drive<i class="material-icons right">close</i></span>
                        <p>Details about Food Drive.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/ngo3.jpg" height="200">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Donation Drive<i class="material-icons right"></i></span>
                        <p><a href="donate.php">Donate ₹1000</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Donation Drive<i class="material-icons right">close</i></span>
                        <p>Detail about Donation Drive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    
    <?php include('footer.php'); ?>
</body>

</html>