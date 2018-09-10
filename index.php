<?php 
//require connection to the database
//	require "database.php";
//	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - Advyte</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb_pro.min.css" rel="stylesheet">
</head>
<?php
	if(isset($_POST['signUp'])) { // user signing up
		require "signup.php";
	}
	if(isset($_POST['login'])) {
		require "login.php";
	}
	
?>
<body class="fixed-sn black-skin">
	    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class="social">
                        <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                        <li><a href="#" class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
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
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Submit blog<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Submit listing</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Registration form</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Instruction<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">For bloggers</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">For authors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Introduction</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Monthly meetings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
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
                        </li>
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
                <p>Advyte</p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Inbox</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light"><i class="fa fa-users"></i> <span class="clearfix d-none d-sm-inline-block">Followers</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light" href="logout.php"><i class="fa fa-arrow-down"></i> <span class="clearfix d-none d-sm-inline-block">Log out</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#login" data-toggle="modal">Login</a>
                        <a class="dropdown-item" href="#signup" data-toggle="modal">Sign Up</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
        <section>
            <div style="background-image: url('https://mdbootstrap.com/img/Photos/Others/slide4.jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Caption -->
                <div class="full-bg-img  flex-center white-text rgba-stylish-strong">
                    <ul class="animated fadeIn col-md-12 list-unstyled">
                        <li>
                            <h1 class="h1-responsive font-weight-bold mt-5 pt-5 ">Sed ut perspiciatis unde omnis iste natus sit voluptatem</h1>
                        </li>
                        <li>
                            <p>Unde omnis iste natus sit voluptatem veritatis et quasi architecto beatae</p>
                        </li>
                        <li class="pb-5">
                            <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="mb-5 btn btn-danger btn-rounded" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->
            </div>
        </section>

    </header>
    <!--/.Double navigation-->

	<div id = "login" class = "modal fade" data-toggle="modal" role = "dialog" aria-labelledby="modalLabel" tabindex="-1">
		<div class = "modal-dialog" role = "document">
			<div class = "modal-content">
				<div class = "modal-header">
					<h3>Login</h3>
					<button type = "button" class = "close" data-dismiss="modal" aria-label="close">
				         <span aria-hidden="true">&times;</span>
				    </button> <!-- close button -->
				</div><!--modal header-->
				
				<div class = "modal-body">
					<form action="login.php" method="POST" autocomplete="off">
						<div class="form-group">
							
							<label for = "email_Username">Email or Username</label>
								<input class="form-control" type="text" name="email" autofocus="on" required="required" autocomplete="off" placeholder="Please enter your email address or username">
							
								<label for ="password" >Password</label>
								<input class="form-control" type="password" required="required" autocomplete="off" name="password">
							

							
								<span class = "error"></span>
								<input type="submit" name="login" value = "Login"/>
							

						</div>
						
					</form> <!-- login form -->
				</div> <!-- modal body-->
			</div> <!-- modal content -->
		</div> <!-- modal dialog -->
	</div> <!-- modal #login -->
	
    <div class = "modal fade" id = "signup" data-toggle = "modal" aria-labelledby="modal" role = "dialog" tabindex="-1">
		<div class = "modal-dialog" role = "document">
			<div class = "modal-content">
				<div class ="modal-header">
					<h3>Sign up</h3>
					<button type = "button" class = "close" data-dismiss="modal" aria-label="close">
                       <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- modal header -->
                <div class = "modal-body">
					
					<form  method="POST" action="register.php" autocomplete="off">
						<div class="form-control">
							
								<label for = "Name">username</label>
								
									<input class="form-control" type="text" name="username" required="required" placeholder="Enter a username.." autocomplete="off" autofocus="on" />
								
							
							
								<label for = "fname"> First name</label>
								<input class="form-control" type="text" name = "fname" required="required" placeholder="Enter your first name"/>
							
							
								<label for = "lname"> Last name</label>
								<input class="form-control" type="text" name = "lname" required="required" placeholder="Enter your last name"/>
							
							
								<label for = "Email">Email</label>
								
									<input class="form-control" type="email" name="email" required="required" placeholder="Enter a valid email address"/>
								
							
							
							
								
									<label for = "password">password</label>
								
								
									<input class="form-control" type="password" name="password" required="required" placeholder="Enter your password"/>
								
							
							
														
								
									<label for = "password">confirm_password</label>
								
								
									<input class="form-control" type="password" name="confirm_password" required="required" placeholder="Enter your password"/>
								
							
							
														
								
									<label for = "password">phone</label>
								
								
									<input class="form-control" type="tel" name="phone" required="required" placeholder="Enter your password"/>
								
							

							
								<span class = "error"></span>
								
									<input type="submit" name="signUp" value="submit"/>
								
								
									<input type="submit" id = "reset" name="reset" value="Reset"/>
								
								
							
						</div>
					</form> <!-- sign up form -->
				</div>
			</div><!-- modal content -->
		</div> <!-- modal dialog -->
	</div><!-- modal #signup -->

	<!--Main layout-->
    <main>
        <div class="container-fluid">

            <!-- Magazine -->
            <div class="row mt-5">

                <!-- Main news -->
                <div class="col-xl-12 col-md-12">

                    <h4 class="font-weight-bold"><strong>LATESTS NEWS</strong></h4>
                    <hr class="red title-hr">

                    <!--Section: Group of personal cards-->
                    <section class="pt-2 mt-3 pb-3">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-3">

                                <!--Card-->
                                <div class="card card-personal mb-4">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/9.jpg" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <a>
                                            <h4 class="card-title"><strong>Title of the news</strong></h4>
                                        </a>
                                        <a><span class="badge badge-danger">Sport</span></a>

                                        <!--Text-->
                                        <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <hr>
                                        <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                        <p class="card-meta float-right">18/08/2017</p>
                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-3">

                                <!--Card-->
                                <div class="card card-personal mb-4">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/17.jpg" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <a>
                                            <h4 class="card-title"><strong>Title of the news</strong></h4>
                                        </a>
                                        <a><span class="badge badge-info">Technology</span></a>

                                        <!--Text-->
                                        <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <hr>
                                        <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                        <p class="card-meta float-right">18/08/2017</p>
                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-3">

                                <!--Card-->
                                <div class="card card-personal mb-4">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/2.jpg" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <a>
                                            <h4 class="card-title"><strong>Title of the news</strong></h4>
                                        </a>
                                        <a><span class="badge badge-success">Health</span></a>

                                        <!--Text-->
                                        <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <hr>
                                        <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                        <p class="card-meta float-right">18/08/2017</p>
                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-3">

                                <!--Card-->
                                <div class="card card-personal mb-4">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/23.jpg" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <a>
                                            <h4 class="card-title"><strong>Title of the news</strong></h4>
                                        </a>
                                        <a><span class="badge badge-secondary">Lifestyle</span></a>

                                        <!--Text-->
                                        <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <hr>
                                        <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                        <p class="card-meta float-right">18/08/2017</p>
                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->


                        <!-- Grid row -->
                        <div class="row mb-4">

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-3">

                                <!--Card-->
                                <div class="card card-personal mb-4">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/14.jpg" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <a>
                                            <h4 class="card-title"><strong>Title of the news</strong></h4>
                                        </a>
                                        <a><span class="badge badge-info">Technology</span></a>

                                        <!--Text-->
                                        <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <hr>
                                        <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                        <p class="card-meta float-right">18/08/2017</p>
                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-3">

                                <!--Card-->
                                <div class="card card-personal mb-4">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/16.jpg" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <a>
                                            <h4 class="card-title"><strong>Title of the news</strong></h4>
                                        </a>
                                        <a><span class="badge badge-info">Technology</span></a>

                                        <!--Text-->
                                        <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <hr>
                                        <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                        <p class="card-meta float-right">18/08/2017</p>
                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-3">

                                <!--Card-->
                                <div class="card card-personal mb-4">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/5.jpg" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <a>
                                            <h4 class="card-title"><strong>Title of the news</strong></h4>
                                        </a>
                                        <a><span class="badge badge-secondary">Lifestyle</span></a>

                                        <!--Text-->
                                        <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <hr>
                                        <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                        <p class="card-meta float-right">18/08/2017</p>
                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 col-lg-3">

                                <!--Card-->
                                <div class="card card-personal mb-4">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/7.jpg" alt="Card image cap">
                                        <a href="#!">
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Title-->
                                        <a>
                                            <h4 class="card-title"><strong>Title of the news</strong></h4>
                                        </a>
                                        <a><span class="badge badge-warning">Work</span></a>

                                        <!--Text-->
                                        <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                        <hr>
                                        <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                        <p class="card-meta float-right">18/08/2017</p>
                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </section>
                    <!--Section: Group of personal cards-->

                </div>
                <!--/Main news-->

                <!--Section: Sport-->
                <section class="mb-5">
                    <div class="col-xl-12 col-md-12">

                        <h4 class="font-weight-bold"><strong>SPORT</strong></h4>
                        <hr class="red title-hr">

                        <!--Section: Group of personal cards-->
                        <section class="pt-2 mt-3 pb-3">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/10.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-danger">Sport</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/11.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-danger">Sport</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/13.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-danger">Sport</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/12.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-danger">Sport</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                        </section>
                        <!--Section: Group of personal cards-->

                        <!--Pagination dark-->
                        <nav>
                            <ul class="pagination pg-dark flex-center">
                                <!--Arrow left-->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">4</a></li>
                                <li class="page-item"><a class="page-link">5</a></li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
                        <!--/Pagination dark grey-->
                    </div>
                </section>
                <!--/Section: Sport-->

                <!--Section: Technology-->
                <section class="mb-5">
                    <div class="col-xl-12 col-md-12">

                        <h4 class="font-weight-bold"><strong>TECHNOLOGY</strong></h4>
                        <hr class="blue title-hr">

                        <!--Section: Group of personal cards-->
                        <section class="pt-2 mt-3 pb-3">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/15.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-info">Technology</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/16.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-info">Technology</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/1.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-info">Technology</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/8.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-info">Technology</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                        </section>
                        <!--Section: Group of personal cards-->

                        <!--Pagination dark-->
                        <nav>
                            <ul class="pagination pg-dark flex-center">
                                <!--Arrow left-->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">4</a></li>
                                <li class="page-item"><a class="page-link">5</a></li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
                        <!--/Pagination dark grey-->
                    </div>
                </section>
                <!--/Section: Technology-->

                <!--Section: Lifestyle-->
                <section class="mb-5">
                    <div class="col-xl-12 col-md-12">

                        <h4 class="font-weight-bold"><strong>LIFESTYLE</strong></h4>
                        <hr class="deep-purple lighten-2 title-hr">

                        <!--Section: Group of personal cards-->
                        <section class="pt-2 mt-3 pb-3">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/20.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-secondary">Lifestyle</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/22.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-secondary">Lifestyle</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/21.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-secondary">Lifestyle</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6 col-lg-3">

                                    <!--Card-->
                                    <div class="card card-personal mb-4">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/square/24.jpg" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <a>
                                                <h4 class="card-title"><strong>Title of the news</strong></h4>
                                            </a>
                                            <a><span class="badge badge-secondary">Lifestyle</span></a>

                                            <!--Text-->
                                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.
                                            </p>
                                            <hr>
                                            <a class="card-meta"><span><i class="fa fa-user"></i>Tom Brown</span></a>
                                            <p class="card-meta float-right">18/08/2017</p>
                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                        </section>
                        <!--Section: Group of personal cards-->

                        <!--Pagination dark-->
                        <nav>
                            <ul class="pagination pg-dark flex-center">
                                <!--Arrow left-->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active"><a class="page-link">1</a></li>
                                <li class="page-item"><a class="page-link">2</a></li>
                                <li class="page-item"><a class="page-link">3</a></li>
                                <li class="page-item"><a class="page-link">4</a></li>
                                <li class="page-item"><a class="page-link">5</a></li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
                        <!--/Pagination dark grey-->
                    </div>
                </section>
                <!--/Section: Lifestyle-->

                <!--Section: Categories & Posts-->
                <section>
                    <div class="col-xl-11 col-md-12 mb-5 mt-4">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12">

                                <!-- Section: Categories -->
                                <section class="section mb-5">

                                    <h4 class="font-weight-bold"><strong>CATEGORIES</strong></h4>
                                    <hr class="red">

                                    <ul class="list-group z-depth-1 mt-4">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a>Business</a>
                                            <span class="badge badge-danger badge-pill">14</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a>Entertainment</a>
                                            <span class="badge badge-danger badge-pill">12</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a>Health</a>
                                            <span class="badge badge-danger badge-pill">10</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a>Lifestyle</a>
                                            <span class="badge badge-danger badge-pill">23</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a>Photography</a>
                                            <span class="badge badge-danger badge-pill">12</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a>Technology</a>
                                            <span class="badge badge-danger badge-pill">24</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a>Sport</a>
                                            <span class="badge badge-danger badge-pill">15</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a>Culinary</a>
                                            <span class="badge badge-danger badge-pill">12</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a>Travel</a>
                                            <span class="badge badge-danger badge-pill">5</span>
                                        </li>
                                    </ul>
                                </section>
                                <!-- Section: Categories -->

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4">

                                <h4 class="font-weight-bold"><strong>POPULAR POSTS</strong></h4>
                                <hr class="red mb-4">

                                <!--Carousel Wrapper-->
                                <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1" data-ride="carousel">
                                    <!--Indicators-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                    </ol>
                                    <!--/.Indicators-->
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <div class="view">
                                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/square/24.jpg" alt="First slide">
                                                <div class="mask rgba-black-light"></div>
                                            </div>
                                            <div class="carousel-caption">
                                                <h3 class="h3-responsive font-weight-bold">This is news</h3>
                                                <p>First text</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <!--Mask color-->
                                            <div class="view">
                                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/square/15.jpg" alt="Second slide">
                                                <div class="mask rgba-black-light"></div>
                                            </div>
                                            <div class="carousel-caption">
                                                <h3 class="h3-responsive font-weight-bold">This is news</h3>
                                                <p>Secondary text</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <!--Mask color-->
                                            <div class="view">
                                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/square/22.jpg" alt="Third slide">
                                                <div class="mask rgba-black-light"></div>
                                            </div>
                                            <div class="carousel-caption">
                                                <h3 class="h3-responsive font-weight-bold">This is news</h3>
                                                <p>Third text</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->
                                </div>
                                <!--/.Carousel Wrapper-->

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-xl-3 col-lg-4 col-md-12">

                                <!-- Section: Advertisment -->
                                <section class="section">

                                    <h6 class="grey-text text-center mb-3"><strong>- Advertisment -</strong></h6>

                                    <!--Jumbotron-->
                                    <div class="jumbotron text-center">

                                        <!--Title-->
                                        <h1 class="card-title h2-responsive mt-2"><strong>Material Design for Bootstrap</strong></h1>
                                        <!--Subtitle-->
                                        <p class="blue-text mb-4 mt-5 font-weight-bold">Powerful and free Material Design UI KIT</p>

                                        <!--Text-->
                                        <div class="d-flex justify-content-center">
                                            <p class="card-text mb-1" style="max-width: 43rem;">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque
                                                laudantium, totam rem.
                                            </p>
                                        </div>

                                        <hr class="mt-4 mb-4">

                                        <button type="button" class="btn btn-primary btn-sm waves-effect">Buy now <span class="fa fa-diamond ml-1"></span></button>
                                        <button type="button" class="btn btn-outline-primary btn-sm waves-effect">Download <i class="fa fa-download ml-1"></i></button>

                                    </div>
                                    <!--Jumbotron-->

                                </section>
                                <!--/ Section: Advertisment -->


                            </div>
                            <!--Grid column-->


                        </div>
                        <!--Grid row-->

                </section>
                <!--Section: Categories & Posts-->

                </div>
                <!--/ Magazine -->
            </div>

    </main>


	


	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src = "js/bootstrap.min.js" ></script>
		<!--<script>
			$(input#reset).on('click',function(){
			   input.value = '';
			   return false;
			   });
			else {
				return true;
			}
			
		</script>-->
</body>
</html>