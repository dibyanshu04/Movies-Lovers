<?php
require './includes/common.php';

$movie_id = $_GET['id'];
$user_id = $_SESSION['id'];
$query = "UPDATE 'users' SET 'is_list_public' = 'public' WHERE 'users'.'id' = '$user_id'";
$run_query = mysqli_query($con, $query);

header("Location: ./watchlist.php");
