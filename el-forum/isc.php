<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: ../login.php");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/mystyle.css">
    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    <title>EL - Learner's Forum</title>
</head>

<body>
    <?php include '../config.php';?>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    



    <!-- Slider starts here -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->


    <div class="container my-2" id="ques">
        <h2 class="text-center my-4">Forums x ISC</h2>
        <p>Spam / Advertising / Self-promotion in the forums is <b>NOT</b> allowed. <em>Do not post copyright-infringing material. Do not post “offensive” posts, links or images.</em> Do not cross post questions. <b>Be Respectful</b> to other members at all times.</p>
        <hr>
        <div class="row my-4">
          <!-- Fetch all the categories and use a loop to iterate through categories -->
        <div class="row">
            <?php 
                $sql = "SELECT * FROM `isc`"; 
                $result = mysqli_query($conn2, $sql);
                while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $top = $row['topic'];
                $cont = $row['topic_cont'];
                echo '<div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><a>' . $top . '</a></h5>
                                    <p class="card-text">' . substr($cont, 0, 50). '... </p>
                                    <a href="posts/isc/post'. $id .'.php" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>';
                } 
             ?>
        </div>
    </div>

    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>