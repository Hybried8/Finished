<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <section class="container-fluid signUpBg">
        <div class="row d-flex justify-content-center allForm">
            <div class="col-md-5 col-sm-10 form">
                <div class="signText">
                    <h2>To view todos, Sign In!</h2>
                </div>
                <div class="mb-4">
                    <input class="form-control" type="email" placeholder="Email" id="loginEmail">
                </div>
                <div class="mb-4">
                    <input class="form-control" type="password" placeholder="Password" id="loginPassword">
                </div>
                <div class="p-1 text-danger" id="loginError"></div>
                <div class="mb-4">
                    <input class="signUpButt" type="button" value="Login" id="loginButton">
                </div>
                <div>
                    <h6>Don't have an account? <a href="signup.php" class="log">Sign Up</a></h6>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="./js/jQuery.js"></script>
<script src="./js/main2.js"></script>

</html>
