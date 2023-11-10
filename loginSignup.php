<!-- LOGIN -->
<?php
include "LogIn_SignUp/login.php";
?>

<!-- SIGNUP -->
<?php
include "LogIn_SignUp/signup.php";
?>


<!-- HTML CODE -->
<!doctype html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn/SignUp | JavaJam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/javajam.css">
</head>

<body class="bg_colr">
    <div class="container-fluid">

        <!-- ROW 1 -->
        <div class="row">
            <!-- COLUMN -->
            <div class="col-12">
                <div class="flex-container mt-5">
                    <center>
                        <a class="text-decoration-none nav_f-size f_quesha fw-semibold text-dark" href="#"><u>COFFE SHOP</u></a>
                    </center>
                </div>
            </div>
            <!-- COLUMN -->
            <div class="col-lg-12" style="margin-top: 1rem;">
                <center>
                    <form name="myForm" id="myForm" method="POST" action="loginSignup.php" 
                        class="p-3 round shadow bg-white input_w">
                        <span>
                            <p class="fs-2 fw-semibold text-center">Sign In</p>
                            <hr class="solid mb-4">

                            <!-- Email Input Field -->
                            <input type="email" name="logEmail" class="form-control mb-3 input_p" id="email"
                                placeholder="Email adress" required>

                            <!-- Password Input Field -->
                            <input type="password" name="logPassword" class="form-control mb-3 input_p" id="password"
                                placeholder="Password" required>

                            <!-- Log In Button -->
                            <button type="submit" class="btn btn-lg w-100 text-white mb-2 fw-bold"
                                style="background-color: #c8102e;">Sign In</button>
                            <a class="text-decoration-none mb-5" href="#">Forgotten password?</a>

                            <hr class="solid mt-5">

                            <!-- Sign Up Button -->
                            <center>
                                <button type="button" class="btn btn-lg text-white fw-semibold mb-2"
                                    data-bs-target="#signupmodal" data-bs-toggle="modal"
                                    style="background-color: #42b72a;">Create a new
                                    account</button>
                            </center>
                        </span>
                    </form>
                </center>

            </div>
        </div>

        <!-- Sign Up Modal -->
        <div class="modal fade" id="signupmodal" data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" aria-hidden="true">
                <div class="modal-dialog w-100">
                    <div class="modal-content">
                        <div class="modal-header d-flex">
                            <h1 class="modal-title fs-2 fw-semibold">Sign Up</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form name="myForm" id="signUpForm" method="POST" action="loginSignup.php" onsubmit="return validateSignUpForm();"
                                class="row g-3 w-100">
                                    
                                <!-- First Name Input Field -->
                                    <div class="col-md-12">
                                        <label for="first_name" class="form-label">First name</label>
                                        <input name="firstName" type="text" class="form-control" id="first_name" required>

                                        <span id="fNameErrMsg" class="error"></span>
                                    </div>

                                <!-- Last Nmae Input Field -->
                                    <div class="col-md-12">
                                        <label for="last_name" class="form-label">Last name</label>
                                        <input name="lastName" type="text" class="form-control" id="last_name" required>

                                        <span id="lstNameErrMsg" class="error"></span>
                                    </div>
                                
                                <!-- Email Input Field -->
                                    <div class="col-md-12">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input name="signEmail" type="email" class="form-control" id="email" required>
                                    </div>

                                <!-- Password Input Field -->
                                    <div class="col-md-12">
                                        <label for="passw" class="form-label">Password</label>
                                        <input name="signPassword" type="password" class="form-control" id="passw" required>

                                        <span id="pwdErrMsg" class="error"></span>
                                    </div>
                                    <div class="col-12">
                                        <center>
                                            <button type="submit" class="btn btn-lg text-white fw-semibold mb-2" 
                                                style="background-color: #42b72a;">Sign Up
                                            </button>
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        validateSignUpForm = function () {
            return signupCreds();
        }

        function signupCreds() {

            var password = document.forms["signUpForm"]["passw"].value;
            var first_name = document.forms["signUpForm"]["first_name"].value;
            var last_name = document.forms["signUpForm"]["last_name"].value;

            var PasswordErrMsgHolder = document.getElementById('pwdErrMsg');
            var fNameErrMsgHolder = document.getElementById('fNameErrMsg');
            var lstNameErrMsgHolder = document.getElementById('lstNameErrMsg');

            if (!(/^\S{3,}$/.test(first_name))) {
                fNameErrMsgHolder.innerHTML =
                    "First Nmae can't contain whitespace(s).";
                return false;
            }
            else if (!(/^\S{3,}$/.test(last_name))) {
                lstNameErrMsgHolder.innerHTML =
                    "Last Nmae can't contain whitespace(s).";
                return false;
            }
            else if (password.length < 5) {
                PasswordErrMsgHolder.innerHTML =
                    'Your password must be minimum 5 letters.';
                return false;
            } 
            else {
                PasswordErrMsgHolder.innerHTML = '';
                fNameErrMsgHolder.innerHTML = '';
                lstNameErrMsgHolder.innerHTML = '';
                return undefined;
            }
        }

    </script>



    <script>
        // Bootstrap Modal JS
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>