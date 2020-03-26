<header class="header_area">

    <!-- start main header -->
    <div class="main_header_area">
        <div class="container">
            <!-- start mainmenu & logo -->
            <div class="mainmenu">
                <div id="nav">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="site_logo fix">
                                <a id="brand" class="clearfix navbar-brand border-right-whitesmoke" href="index.php"><img src="./public/img/site-logo.png" alt="Trips"></a>
                                <div class="header_login floatleft">
                                    <ul>
                                        <!-- <li><a href="booking.html">Register</a></li> -->
                                        <?php if ($loggedInUser) : ?>
                                            <li class="nav-item">
                                                <a class="nav-link text-primary font-weight-bold" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?= $loggedInUser['name']; ?></a>
                                            </li>
                                            <li><a class="nav-link text-primary font-weight-bold" href="./logout.php">Logout</a></li>
                                        <?php else : ?>
                                            <li><a href="./login.php" class="nav-link text-primary font-weight-bold">Login</a></li>
                                        <?php endif ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li role="presentation" class="dropdown">
                                    <a href="./index.php">Home</a>
                                </li>
                                <li><a href="accomodation.php">Accomodation</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li role="presentation" class="dropdown">
                                    <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                        Features
                                    </a>
                                    <ul id="menu2" class="dropdown-menu" role="menu">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="about-us.php">About US</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="booking.php">Booking</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="room-details.php">Room Details</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="staff.php">Our Staff</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="404.php">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">News</a></li>
                                <li><a href="contact-us.html">Contacts</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <!-- end mainmenu and logo -->
        </div>
    </div>
    <!-- end main header -->

</header>