<?php
require './includes/common.php';
if (isset($_SESSION['id'])) {
    header('Location: /index.php');
}
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

    <!-- MDBootstrap css -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="main.css">
    
</head>

<body>
    <div class="wrapper">
        <!-- logo -->
        <div class="logo">
            <div class="container">
                <a style="color: white;" href="./">Movies <span>Lovers™</span></a>
            </div>
        </div>
        <br>
        <!-- end of logo -->
        <div class="container" style="width: 35%; background: white;" >
            
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                        aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                        aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
            </ul>
            <!-- Pills navs -->
        
            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form method="POST" action="login_submit.php">
                        <div class="text-center mb-3">
                            <p>Sign in with:</p>
                            
                        </div>
        
                       
        
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input name="email" type="email" id="loginName" class="form-control" />
                            <label class="form-label" for="loginName">Email Id</label>
                        </div>
        
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input name="password" type="password" id="loginPassword" class="form-control" />
                            <label class="form-label" for="loginPassword">Password</label>
                        </div>
        
                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    <br><?php if (isset($_GET['Error'])) {
                                                                                            echo $_GET['Error'];
                                                                                        }  ?>
                                </div>
                            </div>
                            
                        </div>
        
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
        
                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="#!">Register</a></p>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                    <form  method="POST" action="signup_script.php">
                        <div class="text-center mb-3">
                            <p>Sign up with:</p>
                            
                        </div>        
                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <input name="full_name" type="text" id="registerName" class="form-control" />
                            <label class="form-label" for="registerName">Name</label>
                        </div>
        
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input  name="email" type="email" id="registerEmail" class="form-control" />
                            <label class="form-label" for="registerEmail">Email</label>
                        </div>
        
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input name="password" type="password" id="registerPassword" class="form-control" />
                            <label class="form-label" for="registerPassword">Password</label>
                        </div>
        
                        <!-- Repeat Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="registerRepeatPassword" class="form-control" />
                            <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                        </div>
        
                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                aria-describedby="registerCheckHelpText" />
                            <label class="form-check-label" for="registerCheck">
                                I have read and agree to the terms
                            </label>
                            <br>    
                            <?php if (isset($_GET['msg'])) {
                                                                                echo $_GET['msg'];
                                                                            }  ?>
                        </div>
        
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                        <br>    
                    </form>
                </div>
            </div>
            <!-- Pills content -->
        </div>
    </div>
<div  class="footer ">Developed by Dibyanshu <br> </div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    
</body>

</html>