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
        $banner = $_SESSION['banner'];
        $pass = $_SESSION['pass'];
    
    }
    else
    {
        header("Location: index.php");
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
<body data-spy="scroll" data-target="#navbar" class="static-layout">
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
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page">
		<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
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
                    <a class="nav-link" href="blog.php">About</a>
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

<div class="jumbotron2 jumbotron-single d-flex align-items-center" style="background-image: url(<?php echo $banner; ?>)">
  <div class="container text-center">


    <h1 class="display-2 mb-4"><div class="testi-img2 mr-2"><img src="<?php echo $avatar; ?>" alt="Loading..."></div>
    <br>
    <?php if($username == NULL)
                                            {
                                                echo '<span style="color:white;" class="font-weight-bolder mb-0">   ' , $first_name ,' ', $last_name , '   </span></div>';
                                            }
                                            else
                                            {
                                                echo '<span style="color:white;" class="font-weight-bolder mb-0">   ' , $username , '</span></div>';
                                            }  ?>
    </h1>
  </div>
</div>		<!-- Contact Form Section -->
<section id="contact-form" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap" data-aos="fade-up">
                <h1 class="section-title"  style="font-weight:bold;">Change User Info</h1>
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Contact Form Holder -->
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" style="border:1px solid black; border-radius:8px;" data-aos="fade-up">
                <form method="post" name="edit" action="user_save.php" enctype="multipart/form-data">
                <div class="col-md-12 form-group">
                    <span style="font-weight:bold; font-size: 30px;">Username: </span>
                    <input type="text" class="form-control" id="name" name="username" value="<?php echo $username; ?>">
                </div>

                <div class="col-md-12 form-group">
                    <span style="font-weight:bold; font-size: 30px;">Name: </span>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $first_name;?>">
                </div>

                <div class="col-md-12 form-group">
                    <span style="font-weight:bold; font-size: 30px;">Last Name: </span>
                    <input type="text" class="form-control" id="name" name="lastname" value="<?php echo $last_name;?>">
                </div>

                <div class="col-md-12 form-group">
                    <span style="font-weight:bold; font-size: 30px;">Profile Picture: </span>
                    <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                </div>

                <div class="col-md-12 form-group">
                    <span style="font-weight:bold; font-size: 30px;">Profile Banner: </span>
                    <input type="file" class="form-control" name="fileToUpload1" id="fileToUpload1">
                </div>

                </div>
            </div>
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                <div style="float:left;">
                    <a href="user.php"><button class="btn btn-primary btn-shadow btn-lg">Back</button></a>
                </div>
                <div style="float:right;">
                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Save</button></div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End of Contact Form Section -->		<!-- Features Section-->
<!-- End of Features Section-->		<footer class="mastfoot my-3">
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
</footer>	</div>
	
</div>
	<!-- External JS -->
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
