<?php
require './includes/common.php';

$movie_id = $_GET['id'];
$user_email = $_SESSION['email'];
$query = "UPDATE users SET is_list_public = private WHERE users.email = $user_email";
$run_query = mysqli_query($con, $query);

header("Location: ./watchlist.php");
?>