<?php
require './includes/common.php';

if (isset($_SESSION['id']) || isset($_SESSION['email'])) {
    header("Location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register || Movies Lovers</title>
    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <div class="container" style="margin-top: 80px; width: 50%;">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Register</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Full Name" name="full_name" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required pattern="{6,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 6 or more characters">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <div class="text-danger"><?php if (isset($_GET['msg'])) {
                                                    echo $_GET['msg'];
                                                }  ?></div>
                </form>
            </div>
            <div class="panel-footer text-danger">Already Have a Account <a href="./login.php" class="text-primary">Sign In</a></div>
        </div>
    </div>



</body>

</html>