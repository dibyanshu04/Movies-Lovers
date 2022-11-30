<?php
require './includes/common.php';
$email = $_SESSION['email'];
if (!isset($_SESSION['email'])) {
    header("Location: ./login.php");
}

$query = "SELECT id,fullname,is_list_public, email FROM users WHERE email ='$email'";
$query_result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($query_result);

$user_id = $row['id'];

$query2 = "SELECT id,users_id,movies_id FROM wishlist WHERE users_id = $user_id";
$query_result2 = mysqli_query($con, $query2) or die(mysqli_error($con));
$total_rows_fetched2 = mysqli_num_rows($query_result2);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Lovers</title>
    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="rightbox ">
        <?php

        if ($row['is_list_public'] == 'public') {

            echo '<span style="color: yellow">This List is Public to Everyone👉 </span><a style = "color: white" href="./changetoPrivate.php"> Change to Private</a>';
        } else {
            echo `<span style="color: yellow">This List is Private to Everyone👉<a style="color: white;" href="./changetoPrivate.php">Change to Public <i style="color:blue ;" class="fa fa-sign-out" aria-hidden="true"></i>
        </a>`;
        }



        ?>
        <a style="color: white;" href="./logout.php">Logout <i style="color:blue ;" class="fa fa-sign-out" aria-hidden="true"></i>
        </a>


    </div>

    <div class="wrapper">
        <!-- logo -->
        <div class="logo">
            <div class="container">
                <a style="color: white;" href="./">Movies <span>Lovers™</span></a>
            </div>

        </div>
        <!-- end of logo -->


        <!-- result container -->
        <div class="container">
            <div class="result-container">
                <?php
                while ($row2 = mysqli_fetch_array($query_result2)) { ?>

                    <div style="border: 1px solid white; margin: 10px; padding:10px;" class="result-grid" id="result-grid">

                        <div class="movie-poster">
                            <img style="height: 200px; width: auto;" src="medium-cover.jpg" alt="movie poster">
                        </div>
                        <div class="movie-info">
                            <h3 class="movie-title"><?php echo $row2['movies_id'] ?></h3>
                            <ul class="movie-misc-info">
                                <li class="year">Year: 2017</li>
                                <li class="rated">Ratings: PG-13</li>
                                <li class="released">Released: 05 May 2017</li>
                            </ul>
                            <p class="genre"><b>Genre:</b> Action, Adventure, Comedy</p>
                        </div>
                    </div>

                <?php
                }
                ?>


                <!--
                 -->

            </div>
            <!-- end of result container -->
        </div>
        <div class="footer">Developed by Dibyanshu</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>