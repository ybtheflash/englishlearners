<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: ../../../login.php");
} else {
    $s_id = $_SESSION['id'];
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
    <link rel="stylesheet" href="../../../css/mystyle.css">
    <link rel="stylesheet" href="../../partials/post.css">
    <style>
        #ques {
            min-height: 433px;
        }
    </style>
    <title>EL - Learner's Forum</title>
</head>

<body>
    <?php include '../../../config.php'; ?>
    <?php include '../../partials/_dbconnect.php'; ?>
    <?php include '../../partials/_header.php'; ?>


    <div class="container my-2" id="ques">
        <?php
        $sql = "SELECT * FROM `isc` WHERE id = 1";
        $result = mysqli_query($conn2, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $top = $row['topic'];
            $cont = $row['topic_cont'];
        }
        ?>
        <div style="background-color:white;">
            <h2 class="text-center my-4"><?php echo $top ?></h2>
            <hr>
        </div>
        <div class="row my-4" style ="user-select: none;">
            <div>
                <p><?php echo nl2br($cont) ?></p>
            </div>
        </div>
        <div style="background-color:white;">
            <hr>

            <?php
             echo '<div class="container">
        <h1 class="py-2">Post a Comment</h1> 
        <form action= "' . $_SERVER['REQUEST_URI'] . '" method="post"> 
            <div class="form-group">
                <label for="form-control">Type Your Comment Here :</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                <input type="hidden" name="id" value="' . $s_id . '">
            </div>
            <br>
            <button type="submit" class="btn btn-warning">Post Comment</button>
        </form> 
    </div>';
            ?>
            <?php
            $showAlert = false;
            $method = $_SERVER['REQUEST_METHOD'];
            if ($method == 'POST') {
                $comment_content = (string)$_POST['comment'];
                // always increase the post id
                $sql2 = "INSERT INTO `isc_comments` (`comment_content`, `post_id`, `comment_by`, `comment_time`) VALUES ('$comment_content','1','$s_id', current_timestamp());";
                
                $result = mysqli_query($conn2, $sql2);
                $showAlert = true;
                if ($showAlert) {
                    echo '<br><div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your comment has been added! You will be responded shortly!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>';
                }
            }
            ?>
            <hr>
            <h1 class="py-2">Discussions</h1>
            <?php
            $sql2 = "SELECT * FROM `isc_comments` WHERE post_id=$id";
            $result = mysqli_query($conn2, $sql2);
            $noResult = true;
            while ($row = mysqli_fetch_assoc($result)) {
                $noResult = false;
                $id = $row['comment_id'];
                $comment_content = $row['comment_content'];
                $comment_time = $row['comment_time'];
                $post_user_id = (int)$row['comment_by'];
                $sql = "SELECT `username` FROM `users` WHERE id= $post_user_id";
                $result2 = mysqli_query($conn, $sql);
                $row2 = mysqli_fetch_assoc($result2);
                echo '<div class="media my-3">
                    <img src="../../partials/userdefault.png" width="44px" class="mr-3" alt="...">
                    <div class="media-body">
                    <p class="font-weight-bold my-0">' . $row2['username'] . ' at ' . $comment_time . '</p> ' . $comment_content . '
                    </div>
                </div>';
            }
            if ($noResult) {
                echo '<div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <p class="display-5">No Comments Found</p>
                                <p class="lead"> Be the first person to comment!</p>
                            </div>
                        </div> ';
            }

            ?>
            <hr>

            <?php include '../../partials/_footer.php'; ?>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
</body>

</html>