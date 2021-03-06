<!DOCTYPE html>
<html lang="en">

<?php
    include_once './session.php';

    if ($_SESSION != NULL)
    {
        $first_name = $_SESSION['first_name'];
        $last_name = $_SESSION['last_name'];
        $avatar = $_SESSION['avatar'];
        $username = $_SESSION['username'];
    
    }
?>

<head>
    <!--
     - Roxy: Bootstrap template by GettTemplates.com
     - https://gettemplates.co/roxy
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/just logo.png">
    <title>Typical Studio</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
        <?php
                                        //če je prijavljen - naj bo link na logout, če ne login 
                                        if (isset($_SESSION['user_id'])) {
                                            echo '<span class="fs-16 primary-color"><h3>Welcome</h3></span>';
                                            echo '<br><div class="testi-img mr-2">';
                                            ?>

                                            <img src="<?php echo $avatar; ?>" alt="Loading...">
                                            <?php
                                            if($username == NULL)
                                            {
                                                echo '<span class="fs-16 primary-color">   ' , $first_name ,' ', $last_name , '   </span></div>';
                                            }
                                            else
                                            {
                                                echo '<span class="fs-16 primary-color">   ' , $username , '   </span></div>';
                                            }
                                            echo '<br><a href="user.php" class="nav-link">Settings</a><br><br><br><br><br><br><br><br><br><a href="logout.php" class="nav-link">Logout</a>';
                                        }
                                        else {
                                            echo '<a href="login.php" class="nav-link">Login</a>';
                                        }
                                    ?>
		</p>
	</div>
</div>
	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<span class="lnr lnr-magnifier"></span>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
</div>	<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white">
            <h3 class="font-weight-bolder mb-0">TYPICAL STUDIO</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/Group.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">Games</h1>
  </div>
</div>		<section id="skills" class="bg-white">
    <div class="container">
        <div class="section-content pt-0">
            
            <div class="row">
                
                    <!-- Skill Item -->
                    <div class="skill-item">
                        <div class="d-flex justify-content-between">
                             <p>Dungeon Dude - A Knights Survival</p>
                            <p class="text-muted">75%</p>
                        </div>
                        <div class="progress" data-percent="75%">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                        </div>
                    </div>                
                    <br>
                    <img style=" margin-left: auto; margin-right: auto;" width="55%" src="img/DD_01.png">
                    <br>
                    <br>
                    <!-- Skill Item -->
                     <div class="skill-item" style="padding-top: 250px;">
                        <div class="d-flex justify-content-between">
                            <p>Get that shinny PC</p>
                            <p class="text-muted">15%</p>
                        </div>
                        <div class="progress" data-percent="15%">
                            <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                        </div>
                        <br/>
                        <div style=" margin-left: auto; margin-right: auto;">Image to be added</div>
                    </div>
                    <!-- End Skill Item -->
            </div>
        </div>
    </div>
</section>

</div>
<footer class="mastfoot my-3">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		
         	</div>
         	<div class="col-lg-4 col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">&copy; Typical Studio. Design by <a href="https://gettemplates.co" target="_blank">GetTemplates</a>.</p>
         	</div>
           
            <div class="col-lg-4 col-md-12">
            	<nav class="nav nav-mastfoot justify-content-center">
	                <a class="nav-link" href="#">
	                	<i class="fab fa-facebook-f"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-twitter"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-instagram"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-linkedin"></i>
	                </a>
	                <a class="nav-link" href="#">
	                	<i class="fab fa-youtube"></i>
	                </a>
	            </nav>
            </div>
            
        </div>
    </div>
</footer>	<!-- External JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	 
	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>
</body>
</html>
