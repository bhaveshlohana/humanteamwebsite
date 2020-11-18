<!DOCTYPE html>
<html>
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
      <div class="container">
         <div class="section">
            <ul class="collapsible">
               <li class="active">
                  <div class="collapsible-header">Upcoming Event 1</div>
                  <div class="collapsible-body">
                     <img src="images/ngo7.jpg">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </li>
               <li>
                  <div class="collapsible-header">Upcoming Event 2</div>
                  <div class="collapsible-body">
                     <img src="images/ngo7.jpg">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </li>
               <li>
                  <div class="collapsible-header">Upcoming Event 3</div>
                  <div class="collapsible-body">
                     <img src="images/ngo7.jpg">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </li>
               <li>
                  <div class="collapsible-header">More Future Events</div>
                  <div class="collapsible-body">
                    To be added here!
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div class="container">
         <div class="section">
            <ul class="collapsible">
               <li class="active">
                  <div class="collapsible-header">12/9/2020 Event</div>
                  <div class="collapsible-body">
                     <img src="images/ngo8.jpg">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </li>
               <li>
                  <div class="collapsible-header">9/9/2020 Event</div>
                  <div class="collapsible-body">
                     <img src="images/ngo8.jpg">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </li>
               <li>
                  <div class="collapsible-header">6/7/2020 Event</div>
                  <div class="collapsible-body">
                     <img src="images/ngo8.jpg">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
               </li>
               
            </ul>
         </div>
      </div>
      <?php include('footer.php'); ?>
   </body>
   <script type="text/javascript">
      $(document).ready(function() {
          $('.collapsible').collapsible();
      });
   </script>
</html>