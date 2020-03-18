<!DOCTYPE html>
<html lang="en">

<?php
    include_once './session.php';

    if($_SESSION['admin'] != NULL)
    {
        
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
                                            echo '<br><br><br><br><br><br><br><br><br><br><a href="logout.php" class="nav-link">Logout</a>';
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

<div class="jumbotron d-flex align-items-center">
  <div class="container text-center">

<section id="contact-form" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap" data-aos="fade-up">
                <h2 class="section-title" style="color: black; ">Post</h2>
                <p class="section-sub-title" style="color: black; ">Make a post for normal users and other admins to see.</p>
            </div>
            <!-- End of Section Title -->
            <div class="row">
                <!-- Contact Form Holder -->
                <div class="col-md-8 offset-md-2 contact-form-holder mt-4" data-aos="fade-up">
                    <form method="post" name="post" action="post_insert.php">
                    <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Tittle">
                            </div>
                            <div class="col-md- form-group">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Surname">
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End of Contact Form Holder -->
            </div>
        </div>
    </div>
</section>

</div>
</div>


<?php
    include_once './footer.php';
?>