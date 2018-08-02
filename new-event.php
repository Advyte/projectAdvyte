<?php
require_once('database.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PROFILE </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/styles.css" rel="stylesheet">

</head>
<body class="fixed-sn black-skin">
   
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper img-rounded  waves-light">
                        <a href="llap.jpg"><img src="llap.jpg" class="img-fluid img-rounded flex-center"></a>
                    </div>
                </li>
                <!--/. Logo -->
				
				<!--username-->
				<li>
                    <div class="username flex-center">
                        <p><?php echo $_SESSION['username']; ?></p>
                    </div>
                </li>
				<!--/username-->
				
                <!--Social-->
                <li>
                    <ul class="social">
                        <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                        <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                        <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                    </ul>
                </li>
                <!--/Social-->
				
                <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group md-form mt-0 pt-1 waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i>Account Settings<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="profile.php" class="waves-effect">Dashboard</a>
                                    </li>
                                    <li><a href="edit-profile.php" class="waves-effect">Edit Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Events<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
									<li><a href="new-event.php" class="waves-effect">New event<i class="fa fa-plus px-2"></i></a>
                                    </li>
                                    <li><a href="#" class="waves-effect">All events</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Private</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About me<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Contacts</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Monthly meetings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                       <!-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
		
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>USER DASHBOARD - ADVYTE</p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Inbox</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-users"></i> <span class="clearfix d-none d-sm-inline-block">Followers</span></a>
                </li>				
				 <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fa fa-arrow-down"></i> <span class="clearfix d-none d-sm-inline-block">Log out</span></a>
                </li>
                <!--<li class="nav-item dropdown">
					 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="clearfix d-none d-sm-inline-block">Account</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Change Password</a>
                        <a class="dropdown-item" href="#">Edit Profile</a>
                    </div>
                </li>-->
            </ul>
        </nav>
        <!-- /.Navbar -->
		
    </header>
	
    
    <main class="container-fluid">
        <div class="card  card-cascade narrower m-3">
             <div class="view py-2  gradient-card-header success-color-dark">
        <h5 class="mb-0 white-text text-center">Event Duration</h5>
    </div>
        <div class="card-body m-5">
            <!-- New event form -->
            <form action="#">
             <div class="md-form mt-2">
                <input type="text" id="event-title" class="form-control">
                <label for="username" class="font-weight-light"> Event title</label>
            </div>
                <div class="md-form">
                <input type="text" id="event-type" class="form-control">
                <label for="username" class="font-weight-light"> Event type</label>
            </div>
                <div class="md-form">
                <input type="text" id="event-PlannerName" class="form-control">
                <label for="username" class="font-weight-light"> Event Planner</label>
            </div >
                <!-- Event image -->
                
                <div class="md-form" id="event-image">
                  <input type="file" placeholder="Place event image here" class="form-control px-2">
                </div>
                   <!--Date pickers-->
               <p class="lead my-4">
        <span class="badge success-color-dark p-2">Start and End date</span>
            </p>
            <div class="md-form">
              <input placeholder="Selected date" type="text" id="from"class="form-control datepicker">
              <label for="date-picker-from">From</label>
            </div>
            <div class="md-form" id="event-image">
              <input placeholder="Selected date" type="text" id="to" class="form-control datepicker">
              <label for="date-picker-to">To</label>
            </div>
             
            
            
            </form>  
    </div>
        </div>
            
    </main>
    
    <!--Footer-->
    <footer class="page-footer text-center text-md-left pt-4">
       
        <!--Social buttons-->
        <div class="social-section text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><a class="btn-floating btn-fb"><i class="fa fa-facebook"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-tw"><i class="fa fa-twitter"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-li"><i class="fa fa-linkedin"> </i></a></li>
                <li class="list-inline-item"><a class="btn-floating btn-git"><i class="fa fa-github"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                 &copy; 2018 Copyright: <a href="http://www.advyte.com"> Adyte </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

      <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jscript.js"></script>
    <script>

         // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();
         // Material Select Initialization
          $(document).ready(function () {
          $('.mdb-select').material_select();
          });
      // Data Picker Initialization
         $('.datepicker').pickadate();
    
    </script>

</body>
    
</html>