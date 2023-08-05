<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Todos | Sign Up</title>
</head>

<body>
    <section class="container-fluid signUpBg">
        <div class="row d-flex justify-content-center allForm">
            <div class="col-md-5 col-sm-10 form">
                <div class="signText">
                    <h2>Let's begin, Sign Up here!</h2>
                </div>
                <div class="mb-4">
                    <input class="form-control" type="text" placeholder="First Name" id="registerFirstName">
                </div>
                <div class="mb-4">
                    <input class="form-control" type="text" placeholder="Last Name" id="registerLastName">
                </div>
                <div class="mb-4">
                    <input class="form-control" type="email" placeholder="Email" id="registerEmail">
                </div>
            
                <div class="mb-4">
                    <input class="form-control" type="password" placeholder="Password" id="registerPassword">
                </div>
                <div class="p-1 text-danger" id="registerError"></div>
                <div class="p-1 text-light" id="registerSuccess"></div>
                <div class="mb-4">
                    <input class="signUpButt" type="button" value="Sign Up" id="registerButton">
                </div>
                <div>
                    <h6>Already have an account? <a href="login.php" class="log">Login Now!</a></h6>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="./js/jQuery.js"></script>
<script src="./js/main.js"></script>

</html>
