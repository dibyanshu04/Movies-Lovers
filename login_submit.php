<?php  
require './includes/common.php';

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5($_POST['password']);

$query = "SELECT id, email, password FROM users WHERE email ='$email' AND password ='$password'";
$query_result = mysqli_query($con, $query) or die (mysqli_error($con));
$total_rows_fetched= mysqli_num_rows($query_result);
if ($total_rows_fetched == 0) {
    header('location: login.php?Error=Invalid Email or Password || No User Found');
}
else {
    $row = mysqli_fetch_array($query_result);
    $user_id =  $row["id"];

    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["id"] = $user_id;

    header("Location: ./index.php");
}
