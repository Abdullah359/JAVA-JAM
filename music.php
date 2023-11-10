<?php
    session_start();
    include 'LogIn_SignUp/connect.php';
    if($_SESSION['email']==''){
        header("location: loginSignup.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaJam | Coffee Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/javajam.css">
</head>

<body>
    <div id="wrapper">
    <?php
        include "partials/navbar.php";
    ?>

        <main>
            <h2 class="mt-5">Music at JavaJam</h2>
            <p>
                The first Friday night each month at JavaJam is a special night. Join us from 8 pm to 11 pm for some
                music you don't want to miss!
            </p>
            <h4>January</h4>
            <div style="align-items: flex-end; " class="details">
                <a href="melanie.jpg">
                    <img src="images/melaniethumb.jpg" alt="melanie" width="100" height="80">
                </a>
                <p>Melanie Morris will be entertaining us with her melodic folk style.</p>
            </div>
            <h4>February</h4>
            <div style="align-items: flex-end; " class="details">
                <a href="greg.jpg">
                    <img src="images/gregthumb.jpg" alt="guitar" width="100" height="80">
                </a>
                <p>Tahoe Greg is back from his tour. New songs. New stories.</p>
            </div>
            <h4>March</h4>
            <div style="align-items: flex-end; " class="details">
                <a href="greg.jpg">
                    <img src="images/poets.jpg" alt="Poetry" width="100" height="80">
                </a>
                <p>Gregory Pardlo. Poetry is the best way to convey one's emotions.</p>
            </div>
        </main>

        <?php
        include "partials/footer.php";
        ?>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>