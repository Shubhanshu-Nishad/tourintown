 <!-- ***** Preloader Start ***** -->
 <!-- <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div> -->
    <!-- ***** Preloader End ***** -->



<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
	
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo" style="text-align:left;">Tour<em>In</em>Town</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <!-- <ul class="nav size">  -->
                        <ul class="nav size" > 

						<li><a href="index.php">Home</a></li> 
						<li><a href="package-list.php">Tour Packages</a></li>
						
                            <li class="dropdown" style="text-align: center; ">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Explore</a>
                                <div class="dropdown-menu">
                                <a  style="text-align: center; " class="dropdown-item" href="gallery.php">Tour Gallery</a>
                                <a  style="text-align: center; " class="dropdown-item" href="about.php">About Us</a>
                                <a style="text-align: center; " class="dropdown-item" href="privacy.php">Privacy Policy</a>
                                <a  style="text-align: center; "class="dropdown-item" href="terms.php">Read FAQ</a>
                                </div>
                            </li>
                            <?php if($_SESSION['login'])
	                        {?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Welcome</a>
                                <div class="dropdown-menu" style="width:310px;">
                                    <a style="text-align: center; "  class="dropdown-item" href="profile.php"><?php echo htmlentities($_SESSION['login']);?></a></a>
                                    <a style="text-align: center; " class="dropdown-item" href="logout.php" > Logout</a>
                                </div>
                                <?php } else {?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Log In</a>
                                <div class="dropdown-menu">
                                <a style="text-align: center; " class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal" >Log In</a>
                                <!-- <a style="text-align: center; " class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal4" >Sign In</a> -->
                                <a style="text-align: center; "  class="dropdown-item" href="admin/index.php">Admin Login</a>
                                </div>
                            <?php }?>
                            </li>
                            <li ><a href="contact.php">Contact Us</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

<!-- <nav1>
    <ul>
        <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
        <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
        <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
    </ul>
</nav1> -->
