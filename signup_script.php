<?php

require './includes/common.php';

$full_name = mysqli_real_escape_string($con, $_POST['full_name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = md5($_POST['password']);


$select_query = "SELECT id FROM users WHERE email = '$email' ";
$result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($result);

if ($total_rows_fetched > 0) {
    header('Location: ./register.php?msg=User Already Exist');
} else {
    $insert_query = "INSERT INTO users (email, fullname, password) VALUES ('$email', '$full_name',  '$password')";
    $result_insert_query = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    $primary_key = mysqli_insert_id($con);

    $_SESSION["email"] = $email;
    $_SESSION["id"] = $primary_key;

    header("Location: ./index.php");
}
