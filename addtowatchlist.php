<?php
require './includes/common.php';

$movie_id = $_GET['id'];
$user_id = $_SESSION['id'];
$query = "INSERT INTO `wishlist` (`id`, `users_id`, `movies_id`) VALUES (NULL, '$user_id', '$movie_id')";
$run_query = mysqli_query($con, $query);

header("Location: ./watchlist.php");
?>