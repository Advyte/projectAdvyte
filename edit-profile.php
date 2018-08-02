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
<body  class="fixed-sn black-skin">
    <div>
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper img-rounded  waves-light ">
                        <a href="llap.jpg"><img src="llap.jpg" class="img-fluid flex-center"></a>
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
                        <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook blue-text"> </i></a></li>
                        <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus red-text"> </i></a></li>
                        <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter" style="color:#90caf9"> </i></a></li>
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
                                    <li><a href="#" class="waves-effect">Change Password</a>
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
       
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
          <div class="sidenav-bg mask-strong"></div>

    </div>
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
                
            </ul>
        </nav>
        <!-- /.Navbar -->
		
    </header>
    </div>
      <main class="mt-5 pt-2">
          <div class="container  ">
          
               <div class="row" id="card-margin">
                 <div class="col-md-10 col-xs-6 col-lg-8 mx-auto">
                    <!-- Card -->
<div class="card px-3 align-items-center"  >

    <!-- Card body -->
    <div class="card-body w-75 ">
        <!-- Material form register -->
        <form action="#">
            <p class="h4 text-center pt-3">Edit Profile</p>
            
            <!-- Card Image -->
            <div class="d-flex justify-content-center my-2"><a href="profile-pic.png"><img src="profile-pic.png" class="img-fluid img-rounded text-center" width="140" height="140"></a></div>
           <!-- Card Image -->

            
            <!-- Edit username-->
            <div class="md-form">
                <i class="fa fa-user prefix teal-text"></i>
                <input type="text" id="username" class="form-control">
                <label for="username" class="font-weight-light"> Username</label>
            </div>
            <!-- Edit email -->
            <div class="md-form">
                <i class="fa fa-envelope prefix teal-text"></i>
                <input type="email" id="email" class="form-control">
                <label for="email" class="font-weight-light">E-mail</label>
            </div>

            <!-- Edit telephone -->
            <div class="md-form">
                <i class="fa fa-phone prefix teal-text"></i>
                <input type="text" id="phone" class="form-control">
                <label for="phone" class="font-weight-light">Telephone No.</label>
            </div>

            <!-- Edit password -->
            <div class="md-form">
                <i class="fa fa-lock prefix teal-text"></i>
                <input type="password" id="password" class="form-control">
                <label for="password" class="font-weight-light">Your password</label>
            </div>

            <div class="text-center py-3 mt-3">
                <button class="btn btn-success" type="submit">Edit Profile</button>
            </div>
        </form>
        <!-- Edit profile-->

    </div>
    <!-- Card body -->

</div>
<!-- Card --> 
                   
                   </div>
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
            <div class="container-fluid " >
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
    
    </script>
    

</body>

</html>