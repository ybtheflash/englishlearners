<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="https://rawcdn.githack.com/ybtheflash/el_database_data/fd7970e737d2091f55dea09c9982653255f1135d/englearners.png">
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <title>EL - Portal</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" style="color:white;">Portal : Main</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href="lander.html">Home <span class="sr-only">Homepage</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only">LogOut</span></a>
      </li>
    </ul>

	<div class="navbar-collapse">
		<ul class="navbar-nav ms-auto">
		<li class="nav-item active">
			<a class="nav-link" href="#" data-bs-toggle="popover" data-bs-trigger="focus" title="Coming Soon" data-bs-content="Soon adding account section!"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "". $_SESSION['username']?></a>
		</li>
		</ul>
	</div>
  </div>
</div>
</nav>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>!</h3>
<h4><span id="typed2"></span></h4>
<hr>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?php echo "Tell me ". $_SESSION['username']?>, What is it you desire?</h1>
    <br>
    <p class="lead">
		<a class="btn btn-primary btn-lg" href="#" role="button" id="icse-tog">ICSE</a>
		<a class="btn btn-primary btn-lg" href="#" role="button" id="isc-tog">ISC</a>
		<a class="btn btn-primary btn-lg" href="#" role="button" id="cbse-tog">CBSE</a>
    </p>
    <div id="icse">
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <div class="moveit">
        <h5 class="moveit">For ICSE :</h5>
        <a class="btn btn-success" href="el-forum/icse.php" role="button">Blogs</a>
        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quiz</button>
        <div class="dropdown-menu">
            <!-- <a class="dropdown-item" href="#">To Build A Fire</a>
            <a class="dropdown-item" href="#">The Story Of An Hour</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Above All E2</a>
            <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="/mcqs/ICSE/lang-test-1/mcq.php">Lang. Test 1</a>
            <a class="dropdown-item" href="/mcqs/ICSE/little-match-girl/mcq.php">The Little Match Girl</a>
            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Above All E1 Language</a>
        </div>
      </div>
    </div>
    </div>
    <div id="isc">
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <div class="moveit">
        <h5 class="moveit">For ISC :</h5>
        <a class="btn btn-success" href="el-forum/isc.php" role="button">Blogs</a>
        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quiz</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/mcqs/ISC/buildafire-isc/mcq.php">To Build A Fire</a>
            <a class="dropdown-item" href="/mcqs/ISC/the-story-of-an-hour/mcq.php">The Story Of An Hour</a>
            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Above All E2 Echoes</a>
            <!-- <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">To Build A Fire</a>
            <a class="dropdown-item" href="#">The Story Of An Hour</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Above All E1 Language</a> -->
         </div>
        </div>
      </div>
    </div>
	<div id="cbse">
      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <div class="moveit">
        <h5 class="moveit">For CBSE :</h5>
        <a class="btn btn-success" href="el-forum/cbse.php" role="button">Blogs</a>
        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quiz</button>
        <div class="dropdown-menu">
            <!-- <a class="dropdown-item" href="#">To Build A Fire</a>
            <a class="dropdown-item" href="#">The Story Of An Hour</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Above All E2</a>
            <div class="dropdown-divider"></div> -->
            <!-- <a class="dropdown-item" href="/mcqs/ICSE/lang-test-1/mcq.php">Lang. Test 1</a> -->
            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Coming Soon!</a>
        </div>
      </div>
    </div>
    </div>
</div>
</div>
<div class="footer-basic">
        <footer>
            <div class="social"><a href="https://www.instagram.com/english.learners18"><i class="icon ion-social-instagram"></i></a></a><a href="https://www.youtube.com/c/EnglishLearners07"><i class="icon ion-social-youtube"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="http://englearners.co.in">Home</a></li>
                <!-- <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li> -->
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">English Learners © 2021 | Owned By <a href="#" class="crlink">Maithree Roy</a></p>
            <p class="copyright">Designed & Developed By <a href="https://ybtheflash.in" class="crlink">ybtheflash</a></p>
        </footer>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="./typed.js-master/lib/typed.min.js"></script>
    <script src="js/for_typed.js"></script>
    <script src="js/fancy.js"></script>

  </body>

</html>